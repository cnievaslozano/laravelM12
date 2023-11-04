<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('google')->user();

        if (empty($user)) {
            $user = Socialite::driver('github')->user();
        }

        if (!empty($user)) {
            $userRecord = User::firstOrCreate([
                'email' => $user->getEmail(),
            ], [
                'name' => $user->getName(),
                'profile_photo_path' => $user->getAvatar(),
            ]);

            auth()->login($userRecord);
            return redirect()->to('/dashboard');
        } else {
            echo ('error ');
        }

    }
}
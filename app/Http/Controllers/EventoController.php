<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Models\Evento;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventoRequest $request)
    {
        // Validar la información del evento
        $request->validate(Evento::$rules);

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Crear el evento asociado al usuario autenticado
        $evento = $user->eventos->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        // obtengo los eventos del usuario autenticado
        $user = User::find(Auth::id());
        $evento = $user->eventos();
        return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //obtengo el usuario autenticado actual
        $user = Auth::user();

        $evento = $user->eventos->find($id);

        // $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        // $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');


        return response()->json($evento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        // Verificar si el usuario autenticado es el propietario del evento
        $user = Auth::user();

        if ($user && $user->id === $evento->user_id) {

            request()->validate(Evento::$rules);

            // Actualizar el evento con los datos del request
            $evento->update($request->all());

            // Devolver la respuesta JSON
            return response()->json($evento);
        } else {
            // El usuario no está autenticado o no es el propietario del evento
            return response()->json(['error' => 'Acceso no autorizado'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Obtener el evento por ID
        $evento = Evento::find($id);

        // Verificar si el usuario autenticado es el propietario del evento
        $user = Auth::user();

        if ($user && $evento && $user->id === $evento->user_id) {
            // Eliminar el evento
            $evento->delete();

            // Devolver una respuesta JSON indicando éxito
            return response()->json(['message' => 'Evento eliminado con éxito']);
        } else {
            // El usuario no está autenticado, el evento no existe o no es el propietario del evento
            return response()->json(['error' => 'Acceso no autorizado o evento no encontrado'], 403);
        }
    }
}
<style>
    .calendar-nolink * {
        color: inherit;
        text-decoration: none;
    }
</style>

<!-- Calendar -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
<!-- AXIOS -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<x-app-layout> <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg calendar-nolink">
                <x-calendario />
                <script src="{{ asset('build/assets/calendario.js')}}"> </script>
            </div>
        </div>
    </div>
</x-app-layout>
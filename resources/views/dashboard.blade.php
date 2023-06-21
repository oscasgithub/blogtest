<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Con slot sin nombre.
    NOTA: Solo puede existir un slot principal. Es decir solo se puede usar una vez de esta forma.
    Por este motivo se usan Slot con nombre -->
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
            <x-alert title="Titulo de Prueba">
                <p> Este es un texto de prueba </p>                
            </x-alert>

        </div>
    </div>
    

    <!-- Con slot secundario -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            
            @php
                $type = 'info';
            @endphp

            <x-alert :type="$type" >
               <x-slot name="title">
                    Este es el titulo desde el slot info
               </x-slot>
               <p> Este es un texto de Prueba desde el slot info</p>
            </x-alert>

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @php
                $type = 'danger';
            @endphp


            <x-alert :type="$type" id="alerta" class="mb-4" >
               <x-slot name="title">
                    Este es el titulo desde el slot danger
               </x-slot>
               <p> Este es un texto de Prueba desde el slot Danger</p>
            
            </x-alert>

            <p> Hola mundo </p>

            

        </div>
    </div>


    <!-- ALERT 2: Separa vista de la lógica. Separa Front del Back  -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @php
                $type = 'danger';
            @endphp


            <x-alert2 :type="$type" id="alerta" class="mb-4" >
               <x-slot name="title">
                    Este es el titulo desde el Alert 2, slot danger
               </x-slot>
               <p> Este es un texto de Prueba desde el Alert 2, el slot Danger</p>
            
            </x-alert2>

            <p> Hola mundo </p>

            

        </div>
    </div>


</x-app-layout>

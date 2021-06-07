<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = 'red';
        $alert = 'alert';
    @endphp

    <body>
     <div class="container mx-auto">
         <x-alert :color="$color" class="mb-4"> 

            <x-slot name="title">
                Titulo 1
            </x-slot>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quaerat sed eos eum voluptas quibusdam iste sint consequuntur voluptates quae. Quis velit atque quibusdam, maxime debitis dicta amet quae molestias?
         </x-alert>
         <x-alert2 color="blue" class="mb-4">

            <x-slot name="title">
                Titulo de prueba
            </x-slot>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat blanditiis nesciunt consequatur nisi asperiores magni illum rerum cupiditate sequi dolores aperiam, quidem ipsum vitae labore laborum, quaerat quam tempore!
         </x-alert2>

       {{--   <x-dynamic-component :component = "$alert">
            <x-slot name="title">
                Titulo de prueba
            </x-slot>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fugiat blanditiis nesciunt consequatur nisi asperiores magni illum rerum cupiditate sequi dolores aperiam, quidem ipsum vitae labore laborum, quaerat quam tempore!
        
         </x-dynamic-component> --}}
     </div>
    </body>
</html>

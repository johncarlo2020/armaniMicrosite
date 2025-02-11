<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Armani</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    @vite('resources/css/app.css')
    <body class="antialiased">
        <div class="logo">
            <img src="{{ url('assets/images/logo.webp') }}" alt="Armani sprayer">
        </div>
        <div id="trigger" >
            <h1>SÌ PASSIONE <br> POP-UP</h1>
            <div class="first">
                <h2>Your registration is confirmed.</h2>
                <img class="bottle-trigger" src="{{ url('assets/images/Structure-Armani.webp') }}" alt="">
                <a  id="startTrigger"> <img class="icon" src="{{ url('assets/images/camera.svg') }}" alt=""></a>
                <p class="small">Scan the QR code of register person to proceed</p>
                <p class="date">
                    15-22 FEB 25 <br>
                    📍KLCC PARK
                </p>
                <p class="small">#SephoraMY #Armanibeauty <br> T&C apply.</p>
            </div>
            <div class="second d-none">
                <div id="scanner"></div>
                <p class="small">Find the QR code & scan to check into the station</p>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>


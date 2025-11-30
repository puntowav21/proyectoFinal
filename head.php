<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>

    <style>
        body {
            margin: 0;
            font-family: Tahoma, sans-serif;
            background-color: #ece9d8;
        }

        /* Barra superior Windows XP */
        .xp-taskbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 45px;
            background: linear-gradient(#245edc, #1a4bd9);
            display: flex;
            align-items: center;
            border-bottom: 2px solid #0c2fa0;
            z-index: 9999;
            box-shadow: 0px 0px 4px black;
        }

        /* Botón inicio */
        .xp-start {
            background: linear-gradient(#3cb72c, #2a9f20);
            color: white;
            font-weight: bold;
            border: 2px solid #1c6b14;
            border-radius: 5px;
            padding: 5px 15px;
            margin-left: 10px;
            cursor: pointer;
        }

  
        .xp-links {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .xp-links a {
            color: white;
            text-decoration: none;
            font-size: 17px;
            margin-right: 25px;
            font-weight: bold;
        }

        .xp-links a:hover {
            text-decoration: underline;
        }

 
        .xp-right {
          display: flex;
            margin-left: auto;
            margin-right: 20px;
        }

        
        .xp-right a {
        color: white;
            text-decoration: none;
            font-size: 17px;
            margin-right: 25px;
            font-weight: bold;
        }

        .xp-right a:hover {
            text-decoration: underline;
        }
        .xp-space {
            height: 60px;
        }
    </style>
</head>

<body>

<!-- BARRA WINDOWS XP -->
<div class="xp-taskbar">

    <div class="xp-start">Inicio</div>

    <div class="xp-right">
        <a href="https://www.unam.mx/" target="_blank">UNAM</a>
    </div>

    <div class="xp-links">
        <a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio" target="_blank">FES Aragón</a>
    </div>

</div>

<!-- Espaciador para que nada quede tapado -->
<div class="xp-space"></div>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica Laravel y GitHub</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            width: 100%;
            padding: 20px 0;
            background: linear-gradient(90deg, #ff8bcf, #ff5fb8, #ff94d6);
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            border-bottom: 1px solid #ffb6dd;
            color: #4a0031;
            text-shadow: 0 0 6px rgba(255, 255, 255, 0.6);
        }

        footer {
            width: 100%;
            padding: 12px 0;
            background: linear-gradient(90deg, #000, #4b006e);
            text-align: center;
            color: #d6b4ff;
            font-size: 1rem;
            position: fixed;
            bottom: 0;
            left: 0;
            border-top: 1px solid #5d1a82;
        }

        .contenido {
            padding: 80px 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        Práctica de Laravel y GitHub
    </header>

    <div class="contenido">
        @yield('content')
    </div>

    <footer>
        by lizrod
    </footer>

</body>
</html>

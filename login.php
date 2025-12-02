<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* ================================================= */
        /* === 1. PALETA DE COLORES (VERDE VIBRANTE) === */
        /* ================================================= */
        :root {
            /* Definición del color primario: Verde Lima/Neón */
            --bs-sport-primary: #8BC34A; /* Verde Lima */ 
            --bs-sport-dark: #689F38; /* Tono más oscuro para el hover */
            /* Degradado de fondo deportivo (Verde suave a Azul/Gris claro) */
            --bg-gradient-start: #DCE775; 
            --bg-gradient-end: #E8F5E9; 
        }

        /* ================================================= */
        /* === 2. ESTILOS GLOBALES Y FONDO (GRADIENTE DEPORTIVO) === */
        /* ================================================= */
        body {
            /* Degradado de fondo deportivo */
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%); 
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        /* ================================================= */
        /* === 3. CONTENEDOR PRINCIPAL === */
        /* ================================================= */
        .main-wrapper {
            max-width: 1000px;
            width: 90%;
            transition: transform 0.3s ease;
        }

        .main-wrapper:hover {
            transform: translateY(-5px);
        }

        /* ================================================= */
        /* === 4. IMAGEN LATERAL (Actualizada al tema deportivo) === */
        /* ================================================= */
        .image-side {
            flex: 1; 
            /* Se mantiene la URL de ejemplo, pero ahora estará rodeada por el color primario */
            background-image: url('https://i.pinimg.com/736x/28/9f/51/289f516d0782a32381cb77c5f2857765.jpg'); 
            background-size: cover;
            background-position: center;
            min-width: 400px;
            /* Opcional: Borde izquierdo destacado en Verde Lima */
            border-left: 10px solid var(--bs-sport-primary); 
        }

        /* ================================================= */
        /* === 5. FORMULARIO DE LOGIN === */
        /* ================================================= */
        .login-side {
            flex: 1;
            padding: 50px 40px; 
            min-width: 350px;
        }

        /* Título */
        .login-side h1 {
            color: #333333; 
            margin-bottom: 35px;
            font-size: 32px;
            /* Borde inferior en color Verde Lima */
            border-bottom: 3px solid var(--bs-sport-primary); 
            display: inline-block;
            padding-bottom: 5px;
            text-align: center;
            width: 100%;
        }

        /* Botón de 'INGRESAR' (Ahora con estilos Verde Lima) */
        .btn-sport-primary {
            background-color: var(--bs-sport-primary);
            border-color: var(--bs-sport-primary);
            color: var(--bs-sport-text-dark);
            font-weight: bold;
            transition: background-color 0.2s, border-color 0.2s;
        }
        .btn-sport-primary:hover {
            background-color: var(--bs-sport-dark);
            border-color: var(--bs-sport-dark);
            color: #ffffff; /* Letras blancas en hover para mejor contraste */
        }
        
        /* ================================================= */
        /* === 6. MEDIA QUERIES (RESPONSIVIDAD) === */
        /* ================================================= */
        @media (max-width: 850px) {
            .main-wrapper {
                flex-direction: column; 
                max-width: 450px;
                width: 90%;
            }

            .image-side {
                display: none !important; 
            }
        }
    </style>
</head>
<body>
    <div class="main-wrapper d-flex bg-white rounded-3 shadow-lg overflow-hidden">
        
        <div class="image-side d-none d-md-block"> 
        </div>
        
        <div class="login-side d-flex flex-column justify-content-center">
            <h1>INICIAR SESIÓN</h1>
            
            <form action="ingresar.php" method="POST">
                
                <div class="mb-3">
                    <label for="usuario" class="form-label fw-bold text-secondary">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label fw-bold text-secondary">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contraseña" placeholder="Ingresa tu contraseña">
                </div>
                
                <button type="submit" class="btn btn-sport-primary shadow-sm mt-4 w-100" name="ingresar">INGRESAR</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
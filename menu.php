<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Deportes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* ================================================= */
        /* === 1. PALETA DE COLORES Y FUENTES (VERDE VIBRANTE) === */
        /* ================================================= */
        :root {
            /* Definición del nuevo color primario: Verde Lima/Neón */
            --bs-sport-primary: #8BC34A; /* Un verde vibrante (Lima) */ 
            --bs-sport-dark: #689F38; /* Un tono más oscuro para el hover */
            --bs-sport-text: #212529; /* Texto oscuro */
            --bs-sport-active-line-height: 4px; /* Altura de línea activa más gruesa */
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        /* ================================================= */
        /* === 2. ESTILOS DE LA BARRA DE NAVEGACIÓN === */
        /* ================================================= */
        .navbar-custom {
            background-color: #ffffff; /* Fondo blanco */
            /* Línea de fondo ahora con el Verde Vibrante */
            border-bottom: var(--bs-sport-active-line-height) solid var(--bs-sport-primary); 
            padding-top: .75rem;
            padding-bottom: 0rem; 
        }
        
        /* Enlaces de navegación */
        .navbar-custom .nav-link {
            color: var(--bs-sport-text); 
            font-weight: 700; 
            font-size: 0.95rem; 
            margin-right: 2rem;
            padding-top: 1rem;
            padding-bottom: 1.5rem; 
            position: relative;
            text-transform: uppercase;
            transition: color 0.2s ease-in-out;
        }
        
        /* ================================================= */
        /* === 3. ESTILOS DE ENLACES (HOVER/ACTIVO - Dinámico) === */
        /* ================================================= */
        .navbar-custom .nav-link:hover {
            color: var(--bs-sport-dark); 
        }

        .navbar-custom .nav-link.active {
            color: var(--bs-sport-primary); /* Texto activo en Verde */
        }
        
        /* Línea inferior activa en Verde */
        .navbar-custom .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%; 
            max-width: 80px; 
            height: var(--bs-sport-active-line-height);
            background-color: var(--bs-sport-primary); 
            border-radius: 0; 
            transition: width 0.3s ease-in-out;
        }

        /* Logo/Brand (Círculo con borde Verde) */
        .navbar-brand-logo {
            width: 45px; 
            height: 45px; 
            border-radius: 50%; 
            border: 3px solid var(--bs-sport-primary); /* Borde en Verde */
            background-color: #f8f9fa; 
            display: inline-block;
        }
        
        /* ================================================= */
        /* === 4. ESTILO DE CERRAR SESIÓN (Botón ligero en Verde) === */
        /* ================================================= */
        .logout-button {
            /* Botón contorneado en Verde */
            background-color: transparent; 
            color: var(--bs-sport-primary) !important; 
            border: 2px solid var(--bs-sport-primary);
            border-radius: 5px;
            padding: 0.375rem 1rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.2s ease-in-out;
            margin-left: 2rem; 
        }
        .logout-button:hover {
            /* Relleno del botón en Verde al hacer hover */
            background-color: var(--bs-sport-primary);
            color: #ffffff !important; 
            border-color: var(--bs-sport-dark);
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid px-5">
    
    <a class="navbar-brand me-5" href="#">
        <div class="navbar-brand-logo"></div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSimple" aria-controls="navbarNavSimple" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavSimple">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index_usuarios.php">Usuarios</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index_tipo.php">Tipo de Producto</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index_producto.php">Productos</a>
        </li>
        
      </ul>
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-flex align-items-center">
          <a class="btn logout-button" href="login.php">CERRAR SESIÓN</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
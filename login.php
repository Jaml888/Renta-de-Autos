<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ECUA CARS - Alquiler de Autos</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Librerías de Estilo -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Estilos Personalizados de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de Plantilla -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 border-0 shadow" style="max-width: 400px; background-color: var(--light);">
            <h2 class="text-center font-weight-bold" style="color: var(--primary);">Iniciar Sesión</h2>
            <form action="/login" method="POST">
                <div class="form-group mt-4">
                    <label for="email" class="font-weight-medium" style="color: var(--dark);">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="font-weight-medium" style="color: var(--dark);">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4 font-weight-bold" style="background-color: var(--primary); border-color: var(--primary);">Iniciar Sesión</button>
            </form>
            <div class="text-center mt-3">
                <a href="#" style="color: var(--secondary);">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</body>
</html>

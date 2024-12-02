<!-- Inicio de la Barra Superior -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+593 967 252 447</a>
                <span class="text-body">|</span>
                <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>contacto@ecuacars.com</a>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="https://facebook.com/freewebsitecode/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="https://freewebsitecode.com/">
                    <i class="fab fa-twitter"></i>
                </a>

                <a class="text-body px-3" href="https://freewebsitecode.com/">
                    <i class="fab fa-instagram"></i>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Fin de la Barra Superior -->

<!-- Inicio de la Barra de Navegación -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="index.php" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Ecua Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link">Nosotros</a>
                    <a href="car.php" class="nav-item nav-link">Autos</a>

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Autos</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="car.php" class="dropdown-item">Listado de Autos</a>
                            <a href="detail.php" class="dropdown-item">Detalles del Auto</a>
                            <a href="booking.php" class="dropdown-item">Reserva de Autos</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="service.php" class="dropdown-item">Servicios</a>
                            <a href="contact.php" class="dropdown-item">Contacto</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonios</a>
                            <a href="team.php" class="dropdown-item">Nuestro Equipo</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#loginModal">
                        <i class="fa fa-user mr-2"></i>Login/Registro
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Fin de la Barra de Navegación -->


<!-- Inicio de la Búsqueda -->
<div class="container-fluid bg-white pt-3 px-lg-5">
    <div class="row mx-n2">
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Lugar de Recogida</option>
                <option value="1">Ubicación 1</option>
                <option value="2">Ubicación 2</option>
                <option value="3">Ubicación 3</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Lugar de Devolución</option>
                <option value="1">Ubicación 1</option>
                <option value="2">Ubicación 2</option>
                <option value="3">Ubicación 3</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="date mb-3" id="date" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Dia de Recogida"
                    data-target="#date" data-toggle="datetimepicker" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="date mb-3" id="returnDate" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Dia de Entrega"
                    data-target="#returnDate" data-toggle="datetimepicker" />
            </div>
        </div>

        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Seleccionar un Auto</option>
                <option value="1">Auto 1</option>
                <option value="2">Auto 2</option>
                <option value="3">Auto 3</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Buscar</button>
        </div>
    </div>
</div>
<!-- Fin de la Búsqueda -->

<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #F4F5F8; border-radius: 8px;">
            <div class="modal-header border-0">
                <h3 class="modal-title">Iniciar Sesión</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <button class="btn btn-outline-dark btn-block mb-3"
                    style="display: flex; align-items: center; justify-content: center;">
                    <i class="fab fa-google mr-2"></i>Iniciar Sesión con Google
                </button>
                <p class="text-muted">O</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-group position-relative">
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                        <span class="password-toggle" onclick="togglePasswordVisibility()">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <a href="#" class="d-block text-muted mb-3">¿Olvidaste tu contraseña?</a>
                    <button type="submit" class="btn btn-primary btn-block"
                        style="background-color: #F77D0A; border: none;">Continuar</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <p class="mb-0">¿No tienes una cuenta? <a href="#" class="text-primary" data-dismiss="modal"
                        data-toggle="modal" data-target="#registerModal">Regístrate ahora</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #F4F5F8; border-radius: 8px;">
            <div class="modal-header border-0">
                <h3 class="modal-title mx-auto text-secondary">Crear Cuenta</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre Completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-group position-relative">
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                        <span class="password-toggle" onclick="togglePasswordVisibilityRegister()">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"
                        style="background-color: #F77D0A; border: none;">Registrarse</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <p class="mb-0">¿Ya tienes una cuenta? <a href="#" class="text-primary" data-dismiss="modal"
                        data-toggle="modal" data-target="#loginModal">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(modalId) {
        const passwordInput = document.querySelector(`#${modalId} input[type="password"], #${modalId} input[type="text"]`);
        const passwordToggle = document.querySelector(`#${modalId} .password-toggle i`);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        }
    }

    // Asignación de eventos a los íconos de "ver contraseña" en ambos modales
    document.querySelector('#loginModal .password-toggle').addEventListener('click', () => togglePasswordVisibility('loginModal'));
    document.querySelector('#registerModal .password-toggle').addEventListener('click', () => togglePasswordVisibility('registerModal'));

</script>
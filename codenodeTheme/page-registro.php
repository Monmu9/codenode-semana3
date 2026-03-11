<?php get_header(); ?>

<main>
    <div class="mmc-form">
        <h2>Crear cuenta</h2>
        <p>Únete a MMC Hotel y empieza a reservar.</p>

        <form id="form-registro" action="/wordpress/procesar_registro.php" method="POST" novalidate>
            <div class="campo">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe aquí tu nombre">
                <span class="msg-error" id="error-nombre"></span>
            </div>
            <div class="campo">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="email@example.com">
                <span class="msg-error" id="error-email"></span>
            </div>
            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres">
                <span class="msg-error" id="error-password"></span>
            </div>
            <div class="campo">
                <label for="password2">Confirmar contraseña</label>
                <input type="password" id="password2" name="password2" placeholder="Repite tu contraseña">
                <span class="msg-error" id="error-password2"></span>
            </div>
            <button type="submit" class="btn">Registrarse</button>
        </form>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const formRegistro = document.getElementById('form-registro');
    if (formRegistro) {
        formRegistro.addEventListener('submit', validarRegistro);
    }
});

function validarRegistro(evento) {
    evento.preventDefault();
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const password2 = document.getElementById('password2').value;
    limpiarErrores(['error-nombre', 'error-email', 'error-password', 'error-password2']);
    let hayErrores = false;
    if (nombre === '') { mostrarError('error-nombre', 'El nombre no puede estar vacío.'); hayErrores = true; }
    if (email === '') { mostrarError('error-email', 'El correo no puede estar vacío.'); hayErrores = true; }
    else if (!esEmailValido(email)) { mostrarError('error-email', 'Introduce un correo válido.'); hayErrores = true; }
    if (password === '') { mostrarError('error-password', 'La contraseña no puede estar vacía.'); hayErrores = true; }
    else if (password.length < 8) { mostrarError('error-password', 'Mínimo 8 caracteres.'); hayErrores = true; }
    if (password2 === '') { mostrarError('error-password2', 'Confirma tu contraseña.'); hayErrores = true; }
    else if (password !== password2) { mostrarError('error-password2', 'Las contraseñas no coinciden.'); hayErrores = true; }
    if (!hayErrores) { evento.target.submit(); }
}

function mostrarError(idSpan, mensaje) {
    const span = document.getElementById(idSpan);
    if (span) span.textContent = mensaje;
}

function limpiarErrores(ids) {
    ids.forEach(function(id) {
        const span = document.getElementById(id);
        if (span) span.textContent = '';
    });
}

function esEmailValido(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
</script>

<?php get_footer(); ?>
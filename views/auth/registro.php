<main class="auth">
    <h2 class="auth__encabezado"><?php echo $titulo; ?></h2>
    <p class="auth__descripcion">Regístrate en DevWebcamp</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input
                name="nombre"
                class="formulario__input"
                placeholder="Tu nombre"
                type="text"
                id="nombre"
                value="<?php echo $usuario->nombre; ?>"
            />
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellidos</label>
            <input
                name="apellido"
                class="formulario__input"
                placeholder="Tus apellidos"
                type="text"
                id="apellido"
                value="<?php echo $usuario->apellido; ?>"
            />
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input
                name="email"
                class="formulario__input"
                placeholder="Tu email"
                type="email"
                id="email"
                value="<?php echo $usuario->email; ?>"
            />
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input
                name="password"
                class="formulario__input"
                placeholder="Tu contraseña"
                type="password"
                id="password"
            />
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repite tu contraseña</label>
            <input
                name="password2"
                class="formulario__input"
                placeholder="Repetir contraseña"
                type="password"
                id="password2"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Crear cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Has olvidado tu contraseña?</a>
    </div>
</main>
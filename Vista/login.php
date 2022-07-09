<div class="admin-login-wrapper">
    <div class="body-title">
        <h1>
            Ingreso al panel de control
        </h1>
    </div>
    <form class="form" method="POST">
        <div class="form-wrapper">
            <label for="admin-email"></label>
            <input type="email" name="admin-email" id="admin-email" placeholder="Correo electrónico">
        </div>
        <div class="form-wrapper">
            <label for="admin-password"></label>
            <input type="password" name="admin-password" id="admin-password" placeholder="Contraseña">
        </div>
            <input type="submit" class="btn-primary" value="Ingresar">
    </form>
</div>
<?php if(isset($_GET['error'])){ ?>
    <div>
        <p class="item error">
<?php print ($_GET['error']);} ?>
        </p>
    </div>

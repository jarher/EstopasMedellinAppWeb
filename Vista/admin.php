<div class="body-title">
    <h1>
        Panel administrador
    </h1>
</div>
<hr />
<div class="toolbar">
    <div class="user-options">
        <form method="POST">
            <select name="r" id="user-options" onchange="this.form.submit()">
                <option value="createMs" <?php if(!empty($_POST['r'])) ($_POST['r'] == 'createMs')? print 'selected' : null ?>>Crear nuevo mensaje</option>
                <option value="viewMs" <?php if(!empty($_POST['r'])) ($_POST['r'] == 'viewMs') ? print 'selected' : print 'selected'?>>Ver mensajes de usuarios</option>
                <option value="viewUser" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewUser') print'selected' ?>>Ver suscriptores</option>
                <option value="viewProducts" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewProducts') print'selected'?>>Ver productos</option>
                <option value="viewAdmin" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewAdmin') print'selected' ?>>Ver administradores</option>
            </select>
        </form>
    </div>
    <div class="close-session-wrapper">
        <button id="close-session" class="btn btn-alert">
            Cerrar sesión
        </button>
    </div>
</div>
<?php 
    $controlador = new VistaControlador();
    var_dump($_POST['r']);
    if(isset($_POST['r'])){
        if($_POST['r'] == 'createMs'){
            $controlador->load_view('table_create_message.php');
        }else if($_POST['r'] == 'viewMs'){
            $controlador->load_view('table_messages.php');
        }else if($_POST['r'] == 'viewUser'){
            $controlador->load_view('table_users.php');
        }else if($_POST['r'] == 'viewProducts'){
            $controlador->load_view('table_products.php');
        }else if($_POST['r'] == 'viewAdmin'){
            $controlador->load_view('table_admin.php');
        }else if($_POST['r'] == 'admin-add'){
            $controlador->load_view('crud-administrador.php');
        }else if($_POST['r'] == 'create-admin'){
            $controlador->load_view('crud-administrador.php');
        }
    }else{
        $controlador->load_view('table_messages.php');
    }
    
?>


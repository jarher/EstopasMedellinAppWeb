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
                <option value="viewMs" <?php if(!empty($_POST['r'])) ($_POST['r'] == 'viewMs') ? print 'selected' : print 'selected'?>>Ver mensajes de usuarios</option>
                <option value="viewUser" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewUser') print'selected' ?>>Ver suscriptores</option>
                <option value="viewProducts" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewProducts') print'selected'?>>Ver productos</option>
                <option value="viewAdmin" <?php if(!empty($_POST['r'])) if($_POST['r'] == 'viewAdmin') print'selected' ?>>Ver administradores</option>
            </select>
        </form>
    </div>
    <div class="close-session-wrapper">
        <button id="close-session" class="btn btn-alert">
            <a href="salir">Cerrar sesión</a>    
        </button>
    </div>
</div>
<?php 
    $controlador = new VistaControlador();
    
    if(isset($_POST['r'])){
        if($_POST['r'] == 'viewMs'){
            $controlador->load_view('table_user_messages');
        }else if($_POST['r'] == 'viewUser'){
            $controlador->load_view('table_users');
        }else if($_POST['r'] == 'viewProducts'){
            $controlador->load_view('table_products');
        }else if($_POST['r'] == 'viewAdmin'){
            $controlador->load_view('table_admin');
        }else if($_POST['r'] == 'admin-add-form' 
            || $_POST['r'] == 'create-admin'
            || $_POST['r'] == 'edit-admin'
            || $_POST['r'] == 'update-admin'
            || $_POST['r'] == 'delete-admin'
            || $_POST['r'] == 'eliminate-admin'
            || $_POST['r'] == 'product-add-form'
            || $_POST['r'] == 'create-product'
            || $_POST['r'] == 'edit-product-form'
            || $_POST['r'] == 'update-product'
            || $_POST['r'] == 'delete-product-form'
            || $_POST['r'] == 'eliminate-product'
            || $_POST['r'] == 'delete-user-form'
            || $_POST['r'] == 'eliminate-user'
            || $_POST['r'] == 'delete-message-form'
            || $_POST['r'] == 'eliminate-message'
            || $_POST['r'] == 'create-message-form'
            || $_POST['r'] == 'send-message'){
                
            $controlador->load_view('crud-administrador');
        }
    }else{
        $controlador->load_view('table_user_messages');
    }
    
?>


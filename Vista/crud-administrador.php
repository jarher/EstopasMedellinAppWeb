<?php 
    if(isset($_POST['r'])){
        $administrador = new AdministradorControlador();

        if($_POST['r'] == 'admin-add'){
            print('<div class="body-title">Crear usuario administrador</div>
                <div class="admin-crud-form">
                    <form method="POST">
                        <label>Nombre del usuario administrador</label>
                        <input type="text" name="admin_name" placeholder="ingrese aquí el nombre" required />
                        <label>Email del usuario administrador</label>
                        <input type="email" name="admin_email" placeholder="ingrese aquí el correo electrónico" required />
                        <label>Contraseña del usuario administrador</label>
                        <input type="password" name="admin_password" placeholder="ingrese aquí la contraseña" required />
                        <input type="submit" value="crear" />
                        <input type="hidden" name="r" value="create-admin">
                    </form>  
                </div>
            ');
        }else if($_POST['r'] == 'create-admin'){

            $new_admin = array(
                'admin_name' => $_POST['admin_name'],
                'admin_email' => $_POST['admin_email'],
                'admin_password' => $_POST['admin_password']
            );

            $administrador->create($new_admin);

            print('<p class="text-success">¡El nuevo usuario administrador fue creado con éxito!</p>
            <script>
                 window.onload = function(){
                     redirect_user_admin();
                }
             </script>');
        }
    }else{
        if($_POST['set'] == 'create'){
            
        }
    }
?>
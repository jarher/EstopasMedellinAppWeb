<?php 

    $administrador = new AdministradorControlador();
    
    $producto = new ProductosControlador();

    $suscriptores = new UsuariosControlador();

    $mensajes = new MensajesControlador();

    if(isset($_POST['r'])){ 
        if($_POST['r'] == 'admin-add-form'){
            print('<div class="body-title">Crear usuario administrador</div>
                <div class="admin-crud-form" enctype="multipart/form-data">
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
        }
        else if($_POST['r'] == 'create-admin'){

            $new_admin = array(
                'admin_name' => $_POST['admin_name'],
                'admin_email' => $_POST['admin_email'],
                'admin_password' => $_POST['admin_password']
            );

            $administrador->create($new_admin);

            print('<p class="text-alert">¡El nuevo usuario administrador fue creado con éxito!</p>
            <script>
                 window.onload = function(){
                     redirect(3);
                }
             </script>');
        }
        else if($_POST['r'] == 'edit-admin-form'){

                $template_admin_edit = '
                <div class="body-title">Crear usuario administrador</div>
                <div class="admin-crud-form">
                    <form method="POST">
                        <label>Nombre del usuario administrador</label>
                        <input type="text" name="admin_name" placeholder="ingrese aquí el nombre" value="%s"/>
                        <label>Email del usuario administrador</label>
                        <input type="email" name="admin_email" placeholder="ingrese aquí el correo electrónico" value="%s"/>
                        <label>Contraseña del usuario administrador</label>
                        <input type="password" name="admin_password" placeholder="ingrese aquí la contraseña" value="%s"/>
                        <input type="submit" value="Actualizar" />
                        <input type="hidden" name="r" value="update-admin">
                    </form>  
                </div>';

                printf($template_admin_edit, 
                $_POST["admin_name"],
                $_POST['admin_email'],
                $_POST['admin_password']);
            
        }
        else if($_POST['r'] == 'update-admin'){

            $new_admin = array(
                'admin_name' => $_POST['admin_name'],
                'admin_email' => $_POST['admin_email'],
                'admin_password' => $_POST['admin_password']
            );

            $administrador->update($new_admin);

            print('<p class="text-success">¡El usuario administrador fue actualizado con éxito!</p>
            <script>
                 window.onload = function(){
                     redirect(3);
                }
             </script>');
        }
        else if($_POST['r'] == 'delete-admin-form'){

            print('<div class="body-title">Eliminar usuario administrador</div>
            <p class="text-alert">¿Realmente desa eliminar al usuario <b>' . $_POST['admin-email'] . '</b>?</p>    
            <div class="admin-crud-form">
                <form method="POST" class="delete-form">
                    <input type="submit" value="Aceptar" class="btn btn-primary"/>
                    <input type="button" value="Denegar" class="btn btn-alert" onclick="history.go(-2)">
                    <input type="hidden" name="r" value="eliminate-admin">
                    <input type="hidden" name="admin-email" value="' . $_POST['admin-email'] . '" />
                </form>  
            </div>');
        }
        else if($_POST['r'] == 'eliminate-admin'){

            $administrador->delete($_POST['admin-email']);

            $template = '<p class="text-success">El usuario %s fue eliminado</p>
            <script>
                 window.onload = function(){
                     redirect(3);
                }
             </script>';

            printf($template, $_POST['admin-email']);
        } 
        else if($_POST['r'] == 'product-add-form'){

            print('<div class="body-title">Crear nuevo producto</div>
                <div class="admin-crud-form">
                    <form method="POST" enctype="multipart/form-data">
                        <label>Nombre del producto</label>
                        <input type="text" name="product-name" placeholder="ingrese aquí el nombre del producto" required />
                        <label>Peso del producto</label>
                        <input type="text" name="product-weight" placeholder="ingrese aquí el peso del producto" required />
                        <label>color del producto</label>
                        <input type="texto" name="product-color" placeholder="ingrese aquí el color del producto" required />
                        <label>descripción del producto</label>
                        <input type="texto" name="product-description" placeholder="ingrese la descripción del producto" required />
                        <label for="product-img">Subir imagen del producto</label>
                        <input type="file" name="product-img" required/>
                        <input type="submit" value="crear" />
                        <input type="hidden" name="r" value="create-product" />
                    </form>  
                </div>
            ');
        }
        else if($_POST['r'] == 'create-product'){

            $file = $_FILES["product-img"]["name"];
            
            $file_dir = "./public/img/product_img/".$_FILES["product-img"]["name"];
            
            $imgSize = $_FILES["product-img"]["size"];
            // extensión del archivo 
            $imgExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            // extensiones de archivo válidas
            $valid_ext = array('jpeg','jpg', 'png', 'gif');

            // validar formato de imagen
            if(in_array($imgExt, $valid_ext)){
                if($imgSize < 5000000){
                 move_uploaded_file($file, $file_dir);
                }else{
                    $errMSG = "Error, el archivo es muy grande";
                }
            }
            else{
                $errMSG = "Sólamente archivos con extensión JPG, JPEG, PNG o GIF son permitidos";   
            }

            if(!isset($errMSG)){
                $new_product = array(
                'product_id' => 0,
                'product_name' => $_POST['product-name'],
                'product_weight' => $_POST['product-weight'],
                'product_color' => $_POST['product-color'],
                'product_description' => $_POST['product-description'],
                'product_img' => $_FILES["product-img"]["name"]
                );
                $producto->create($new_product);
                print('<p class="text-success">¡El nuevo producto fue creado con éxito!</p>');
            }else{
                print($errMSG);
            }   
            print('<script>
                window.onload = function(){
                    redirect(2);
                }
                </script>');
        }
        else if($_POST['r'] == 'edit-product-form'){

            $target_file = "./public/img/product_img/" . $_POST['product-img'];

            $template_product_edit = '
                <div class="body-title">Editar producto</div>
                <div class="admin-crud-form">
                    <form method="POST">
                        <input type="hidden" name="product_id" value="%s" />
                        <label>Nombre del producto</label>
                        <input type="text" name="product_name" placeholder="ingrese aquí el nombre" value="%s" required/>
                        <label>Peso del producto</label>
                        <input type="text" name="product_weight" placeholder="ingrese aquí el peso" value="%s" required/>
                        <label>color del producto</label>
                        <input type="text" name="product_color" placeholder="ingrese aquí el color" value="%s" required/>
                        <label>descripción del producto</label>
                        <input type="text" name="product_description" placeholder="ingrese aquí la descripción" value="%s" required/>
                        <label for="product_img">Cambiar imagen del producto</label>
                        <input type="file" name="product_img"/>
                        <div>
                            <img src="./public/img/product_img/%s" />
                        </div>
                        <input type="submit" value="Actualizar" />
                        <input type="hidden" name="r" value="update-product" />
                        <input type="hidden" name="target_file" value="' . $target_file . '" />
                    </form>  
                </div>';

                printf($template_product_edit, 
                $_POST["product-id"],
                $_POST['product-name'],
                $_POST['product-weight'],
                $_POST['product-color'],
                $_POST['product-description'],
                $_POST['product-img']
                );
        }
        else if($_POST['r'] == 'update-product'){

            $file = null;
            
            $edit_row = $producto->read($_POST['product_id']);
            
            if(isset($_FILES['product_img'])){

                $file = $_FILES['product_img']['name'];
            
                $file_dir = "./public/img/product_img/";
            
                $imgSize = $_FILES['product_img']['size'];

                $userpic = $file;
            }

            if($file){
                // extensión del archivo 
                $imgExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                // extensiones de archivo válidas
                $valid_ext = array('jpeg','jpg', 'png', 'gif');

                // validar formato de imagen
                if(in_array($imgExt, $valid_ext)){
                    if($imgSize < 5000000){
                        unlink($file_dir.$file);
                        move_uploaded_file($file, $file_dir);
                    }else{
                        $errMSG = "Error, el archivo es muy grande, debe ser de menos de 5MB";
                    }
                }
                else{
                    $errMSG = "Sólamente archivos con extensión JPG, JPEG, PNG o GIF son permitidos";   
                }
            }else{
                $userpic = $edit_row[0]['imgUrl']; // imagen vieja de la base de datos
            }
                if(!isset($errMSG)){
                    
                    $new_product = array(
                    'product_id' => $_POST['product_id'],
                    'product_name' => $_POST['product_name'],
                    'product_weight' => $_POST['product_weight'],
                    'product_color' => $_POST['product_color'],
                    'product_description' => $_POST['product_description'],
                    'product_img' => $userpic
                    );
                    
                    $producto->update($new_product);

                    print('<p class="text-success">¡El nuevo producto fue actualizado con éxito!</p>');
                }else{
                    print($errMSG);
                }   
                print('<script>
                    window.onload = function(){
                        redirect(2);
                    }
                    </script>');
            
        }
        else if($_POST['r'] == 'delete-product-form'){
            print('<div class="body-title">Eliminar producto</div>
                <p class="text-alert">¿Realmente desa eliminar el producto?</p>    
                <div class="admin-crud-form">
                    <form method="POST">
                        <input type="submit" value="Aceptar" class="btn btn-primary"/>
                        <input type="button" value="Denegar" class="btn btn-alert" onclick="history.go(-2)">
                        <input type="hidden" name="r" value="eliminate-product">
                        <input type="hidden" name="product-id" value="' . $_POST['product-id'] . '" />
                    </form>  
                </div>');
        }
        else if($_POST['r'] == 'eliminate-product'){
            
             $producto->delete($_POST['product-id']);

            $template = '<p class="text-success">El producto %s fue eliminado</p>
            <script>
                 window.onload = function(){
                     redirect(2);
                }
             </script>';

            printf($template, $_POST['product-id']);
        }
        else if($_POST['r'] == 'delete-user-form'){
            print('<div class="body-title">Eliminar suscriptor</div>
                <p class="text-alert">¿Realmente desa eliminar el suscriptor?</p>    
                <div class="admin-crud-form">
                    <form method="POST" class="delete-user">
                        <input type="submit" value="Aceptar" class="btn btn-primary"/>
                        <input type="button" value="Denegar" class="btn btn-alert" onclick="history.go(-2)">
                        <input type="hidden" name="r" value="eliminate-user">
                        <input type="hidden" name="user-email" value="' . $_POST['user-email'] . '" />
                    </form>  
                </div>');
        }
        else if($_POST['r'] == 'eliminate-user'){
            
             $suscriptores->delete($_POST['user-email']);

            $template = '<p class="text-success">El usuario %s fue eliminado</p>
            <script>
                 window.onload = function(){
                     redirect(1);
                }
             </script>';

            printf($template, $_POST['user-email']);
        }
        else if($_POST['r'] == 'delete-message-form'){
            print('<div class="body-title">Eliminar mensaje</div>
                <p class="text-alert">¿Realmente desa eliminar el mensaje de <b>'.$_POST['email_message'].'</b>?</p>    
                <div class="admin-crud-form">
                    <form method="POST">
                        <input type="submit" value="Aceptar" class="btn btn-primary"/>
                        <input type="button" value="Rechazar" class="btn btn-alert" onclick="history.go(-2)">
                        <input type="hidden" name="r" value="eliminate-message">
                        <input type="hidden" name="email_message" value="' . $_POST['email_message'] . '" />
                    </form>  
                </div>');
        }
        else if($_POST['r'] == 'eliminate-message'){
            
             $mensajes->delete($_POST['email_message']);
            // var_dump($_POST['email_message']);
            $template = '<p class="text-success">El mensaje del usuario %s fue eliminado</p>
            <script>
                 window.onload = function(){
                     redirect(0);
                }
             </script>';

            printf($template, $_POST['email_message']);
        }
        else if($_POST['r'] == 'create-message-form'){
            print('<div class="panel-wrapper " id="panel-message">
                    <div class="title-panel">Enviar mensaje a suscriptores</div>
                                <form method="POST" class="form message-form">
                                    <input type="hidden" name="r" value="send-message" />
                                        <div class="form-wrapper">
                                        <label>Correo del administrador</label>
                                        <input type="text" name="admin-email" id="admin-email" placeholder="Correo administrador" />
                                        </div>
                                        <div class="form-wrapper">
                                        <label>Asunto</label>
                                        <input type="text" name="admin-subject" id="admin-subject" placeholder="Asunto" />
                                        </div>
                                        <div class="form-wrapper">
                                        <label>mensaje</label>
                                        <input type="text" name="admin-message" id="admin-message" placeholder="Mensaje" />
                                        </div>
                                        <div class="form-wrapper">
                                        <input type="submit" value="Enviar" class="btn-primary">
                                    
                                </form>
                                    
                            
                        </div>');
        }
        // else if($_POST['r'] == 'send-message'){

        // }
    }
?>
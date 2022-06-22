<?php 
    //tabla para gestionar los usuarios administradores del sistema
    $admin = new AdministradorControlador();
    
    $admin_data = $admin->read();
?>
<div class="panel-wrapper " id="panel-admin">
    <div class="title-panel">Usuarios administradores</div>
    <div class="table">
        <div class="theader">
            <div class="th">Nombre</div>
            <div class="th">Email</div>
            <div class="th">Contraseña</div>
            <div class="th">Editar</div>
            <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
            <?php 
                if(empty($admin_data)){
                    print ('<p>No hay usuarios administradores</p>');
                }else{
                    for($n = 0; $n < count($admin_data); $n++){
                    print ('<div class="tr">
                            <div class="tc">
                                <span class="title-tc">Nombre: </span>
                                <div class="content-tc">' . $admin_data[$n]["nombre"]. '</div>
                            </div>
                            <div class="tc">
                                <span class="title-tc">Email: </span>
                                <div class="content-tc">' . $admin_data[$n]["email"]. '</div>
                            </div>
                            <div class="tc">
                                    <span class="title-tc">Contraseña: </span>
                                    <div class="content-tc">' . $admin_data[$n]["password"]. '</div>
                            </div>
                            <div class="tc row tc-border">
                                <form method="POST">
                                    <input type="hidden" name="r" value="edit-admin-form" />
                                    <input type="hidden" name="admin_name" value="' . $admin_data[$n]["nombre"] . '" /> 
                                    <input type="hidden" name="admin_email" value="' . $admin_data[$n]["email"] . '" /> 
                                    <input type="hidden" name="admin_password" value="' . $admin_data[$n]["password"] . '" /> 
                                    <button class="btn btn-edit" type="submit">
                                        <span class="btn-text">Editar usuario
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </button>
                                </form>
                                
                            </div>
                            <div class="tc row tc-border">
                                <form method="POST">
                                    <input type="hidden" name="r" value="delete-admin-form" />
                                    <input type="hidden" name="admin-email" value="' . $admin_data[$n]["email"] . '" />
                                    <button class="btn btn-delete" type="submit">
                                        <span class="btn-text">Eliminar usuario</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </form>
                                
                            </div>
                        </div>');
                    }
                }
                
            ?>

    </div>
    <div class="btn-create-wrapper">
        <form method="POST">
            <input type="hidden" name="r" value="admin-add-form"/>
            <input type="hidden" name="set" value="create" />
            <input type="submit" value="Crear usuario administrador" class="btn btn-primary btn-submit"/>
        </form>
    </div>
</div>

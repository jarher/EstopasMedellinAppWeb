<?php 
    require_once('./Vista/plantillas/header.html');
?>
<div class="body-title">
    <h1>
        Panel administrador
    </h1>
</div>
<hr />
<div class="toolbar">
    <div class="user-options">
        <select name="user-options" id="user-options">
            <option value="create">Crear nuevo mensaje</option>
            <option value="viewMs" selected>Ver mensajes de usuarios</option>
            <option value="viewUser">Ver usuarios</option>
            <option value="viewProducts">Ver productos</option>
            <option value="viewAdmin">Ver administradores</option>
        </select>
    </div>
    <div class="notification-bar">
        <button id="notification">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill"
                viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
            </svg>
        </button>
        <button id="close-session" class="btn btn-alert">
            Cerrar sesión
        </button>
    </div>
</div>
<!-- <div class="panel-wrapper" id="panel-contact">
    <div class="panel-wrapper-header">
        <div class="title-panel">Mensajes de usuarios</div>
        <div class="panel-wrapper-select">
            <p>ordenar por:</p>
            <select name="message-ordered" id="message-ordered">
                <option value="order-alpha">Alfabéticamente</option>
                <option value="order-newest">Fecha ingreso reciente</option>
                <option value="order-latest">fecha ingreso antíguo</option>
            </select>
        </div>
    </div>

    <div class="table">
        <div class="theader">
            <div class="th">Nombre</div>
            <div class="th">Teléfono</div>
            <div class="th">Email</div>
            <div class="th">Asunto</div>
            <div class="th">Mensaje</div>
            <div class="th">Fecha de ingreso</div>
            <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="tc">
                    <span class="title-tc">Nombre: </span>
                    <div class="content-tc-name"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Teléfono: </span>
                    <div class="content-tc-phone"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Email: </span>
                    <div class="content-tc-email"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Asunto: </span>
                    <div class="content-tc-subject"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Mensaje: </span>
                    <div class="content-tc-message"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Fecha de ingreso: </span>
                    <div class="content-tc-timestamp"></div>
                </div>
                <div class="tc tc-border">
                    <button class="btn btn-eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                        <span class="btn-text">Eliminar mensaje de usuario</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel-wrapper " id="panel-users">
    <div class="panel-wrapper-header">
        <div class="title-panel">Subscriptores</div>
        <div class="panel-wrapper-select">
            <p>ordenar por:</p>
            <select name="user-ordered" id="user-ordered">
                <option value="order-alpha">Alfabéticamente</option>
                <option value="order-newest">Fecha ingreso reciente</option>
                <option value="order-latest">fecha ingreso antíguo</option>
            </select>
        </div>
    </div>
    <div class="table">
        <div class="theader">
            <div class="th">Nombre</div>
            <div class="th">Teléfono</div>
            <div class="th">Email</div>
            <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="tc">
                    <span class="title-tc">Nombre: </span>
                    <div class="content-tc-name"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Teléfono: </span>
                    <div class="content-tc-phone"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Email: </span>
                    <div class="content-tc-email"></div>
                </div>
                <div class="tc tc-border">
                    <button class="btn btn-eliminar">
                        <span class="btn-text">Eliminar usuario</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="panel-wrapper " id="panel-products">
    <div class="panel-wrapper-header">
        <div class="title-panel">Panel de productos</div>
        <div class="panel-wrapper-select">
            <p>ordenar por:</p>
            <select name="product-ordered" id="product-ordered">
                <option value="order-alpha">Alfabéticamente</option>
                <option value="order-quantity">Cantidad</option>
                <option value="order-color">Color</option>
                <option value="order-weight">Peso</option>
            </select>
        </div>
    </div>
    <div class="table">
        <div class="theader">
            <div class="th">Nombre</div>
            <div class="th">Cantidad</div>
            <div class="th">Peso</div>
            <div class="th">Color</div>
            <div class="th">Foto</div>
            <div class="th">Editar</div>
            <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="tc">
                    <span class="title-tc">Nombre: </span>
                    <div class="content-tc-name-prod"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Cantidad: </span>
                    <div class="content-tc-cant-prod"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Peso: </span>
                    <div class="content-tc-weight-prod"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Color: </span>
                    <div class="content-tc-color-prod"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Foto: </span>
                    <div class="content-tc-photo-prod"></div>
                </div>
                <div class="tc row tc-border">
                    <button class="btn btn-editar">
                        <span class="btn-text">Editar producto
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </button>
                </div>
                <div class="tc row tc-border">
                    <button class="btn btn-eliminar">
                        <span class="btn-text">Eliminar producto
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-create-wrapper">
        <button class="btn btn-primary" id="create-product">
            crear producto
        </button>
    </div>
</div>
<div class="panel-wrapper " id="panel-message">
    <div class="title-panel">Enviar mensaje a suscriptores</div>
    <div class="table">
        <div class="theader">
            <div class="th">Correo administrador: </div>
            <div class="th">Asunto: </div>
            <div class="th">Mensaje: </div>
            <div class="th">Enviar: </div>
            <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
            <form action="" method="POST">
                <div class="tr">
                    <div class="tc">
                        <input type="text" name="admin-email" id="admin-email" placeholder="Correo administrador" />
                    </div>
                    <div class="tc">
                        <input type="text" name="admin-subject" id="admin-subject" placeholder="Asunto" />
                    </div>
                    <div class="tc">
                        <input type="text" name="admin-message" id="admin-message" placeholder="Mensaje" />
                    </div>
                    <div class="tc tc-submit">
                        <input type="submit" value="Enviar" class="btn-primary">
                    </div>
            </form>
            <div class="tc row tc-border">
                <button class="btn btn-eliminar">
                    <span class="btn-text">Eliminar mensaje: </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div> -->
</div>
<?php 
    require('./Vista/plantillas/admin-table.html');
?>
<!-- <div class="panel-wrapper " id="panel-admin">
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
            <div class="tr">
                <div class="tc">
                    <span class="title-tc">Nombre: </span>
                    <div class="content-tc-name"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Email: </span>
                    <div class="content-tc-email"></div>
                </div>
                <div class="tc">
                    <span class="title-tc">Contraseña: </span>
                    <div class="content-tc-email"></div>
                </div>
                <div class="tc row tc-border">
                    <button class="btn btn-editar">
                        <span class="btn-text">Editar usuario
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </button>
                </div>
                <div class="tc tc-border">
                    <button class="btn btn-eliminar">
                        <span class="btn-text">Eliminar usuario</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="btn-create-wrapper">
        <button class="btn btn-primary" id="create-user-admin">
            crear usuario administrador
        </button>
    </div>
</div> -->
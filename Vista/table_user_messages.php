<?php 
  $messages = new MensajesControlador();
  $message_data = $messages->read();
?>
<div class="panel-wrapper" id="panel-contact">
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

      <div class="table-message">
        <div class="tbody">
          <?php 
            if(empty($message_data)){
              print('<div class="text-alert">No hay mensajes</div>');
            }else{
              
              for($n = 0; $n < count($message_data); $n++){
                $email_message = $message_data[$n]['email'];
                printf('
                <div class="tr-ms">
                  <div class="tc">
                    <div class="title-ms">Nombre: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="title-ms">Teléfono: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="title-ms">Email: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="title-ms">Asunto: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="title-ms">Mensaje: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="title-ms">Fecha de ingreso: </div>
                    <div class="content-ms">%s</div>
                  </div>
                  <div class="tc">
                    <div class="content-ms">
                      <form method="POST">
                        <input type="hidden" name="r" value="delete-message-form"/>
                        <input type="hidden" name="email_message" value="'.$email_message.'"/>
                        <button class="btn btn-delete btn-delete-ms" method="POST">
                          Eliminar mensaje de usuario
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                ', 
                $message_data[$n]['nombre'],
                $message_data[$n]['telefono'],
                $message_data[$n]['email'],
                $message_data[$n]['asunto'],
                $message_data[$n]['mensaje'],
                $message_data[$n]['fecha_ingreso']);
              }
            }
          ?>
          
        </div>
      </div>
    </div>
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
                  <form action="POST">
                    <button class="btn btn-delete" type="submit">
                      <span class="btn-text">Eliminar mensaje: </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path
                          d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                      </svg>
                    </button>
                  </form>
                  
                </div>
              </div>
        </div>
    </div>
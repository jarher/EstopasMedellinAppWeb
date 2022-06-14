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
              <button class="btn btn-delete">
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
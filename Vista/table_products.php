<?php 
    //tabla para gestionar los productos del sistema
    $product = new ProductosControlador();
    
    $product_data = $product->read();
?>
<div class="panel-wrapper " id="panel-products">
      <div class="panel-wrapper-header">
        <div class="title-panel">Panel de productos</div>
      </div>
      <div class="table">
        <div class="theader">
          <div class="th">Nombre</div>
          <div class="th">Peso</div>
          <div class="th">Color</div>
          <div class="th">Descripción</div>
          <div class="th">Foto</div>
          <div class="th">Editar</div>
          <div class="th">Eliminar</div>
        </div>
        <div class="tbody">
          <?php 
            if(empty($product_data)){
                    print ('<p>No hay productos</p>');
            }else{
              for($n = 0; $n < count($product_data); $n++){
                print ('<div class="tr">
                <div class="tc">
                  <span class="title-tc">Nombre: </span>
                  <div class="content-tc-name-prod">' . $product_data[$n]['nombre'] . '</div>
                </div>
                <div class="tc">
                  <span class="title-tc">Peso: </span>
                  <div class="content-tc">' . $product_data[$n]['peso'] . '</div>
                </div>
                <div class="tc">
                  <span class="title-tc">Color: </span>
                  <div class="content-tc">' . $product_data[$n]['color'] . '</div>
                </div>
                <div class="tc">
                  <span class="title-tc">Descripción: </span>
                  <div class="content-tc">' . $product_data[$n]['descripcion'] . '</div>
                </div>
                <div class="tc">
                  <span class="title-tc">Foto: </span>
                  <div class="content-tc">
                    <div class="product-table-img-wrapper">
                      <img src="./public/img/product_img/' . $product_data[$n]['imgUrl'] . '" />
                    </div>
                  </div>
                </div>
                <div class="tc row tc-border">
                  <form method="POST" class="form-tc">
                    <input type="hidden" name="r" value="edit-product-form" />
                    <input type="hidden" name="product-id" value="' . $product_data[$n]["product_id"] . '" />
                    <input type="hidden" name="product-name" value="' . $product_data[$n]["nombre"] . '" /> 
                    <input type="hidden" name="product-weight" value="' . $product_data[$n]["peso"] . '" /> 
                    <input type="hidden" name="product-color" value="' . $product_data[$n]["color"] . '" /> 
                    <input type="hidden" name="product-description" value="' . $product_data[$n]["descripcion"] . '" />
                    <input type="hidden" name="product-img" value="' . $product_data[$n]["imgUrl"] . '" /> 
                    <button class="btn btn-edit" type="submit">
                      <span class="btn-text">Editar producto
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                          d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                      </svg>
                    </button>
                  </form>
                  
                </div>
                <div class="tc row tc-border">
                  <form method="POST" class="form-tc">
                    <input type="hidden" name="r" value="delete-product-form" />
                    <input type="hidden" name="product-id" value="' . $product_data[$n]["product_id"] . '" />
                    <button class="btn btn-delete" type="submit">
                      <span class="btn-text">Eliminar producto
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash3-fill" viewBox="0 0 16 16">
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
      </div>
      <div class="btn-create-wrapper">
         <form method="POST">
            <input type="hidden" name="r" value="product-add-form"/>
            <input type="hidden" name="set" value="create" />
            <input type="submit" value="ingresar producto" class="btn btn-primary btn-submit"/>
        </form>
      </div>
    </div>
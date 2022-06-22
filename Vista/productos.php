<?php 
    $productos = new ProductosControlador();

    $product_data = $productos->read();

     $template = '
        <div class="product-card">
            <div class="product-title">%s
            </div>
            <div>
                <div class="product-img-wrapper">
                    <img src="./public/img/%s" alt="" class="product-img">
                </div>
                <div class="descriptions-product">
                    <div>Peso: 
                        <p class="desc-value">%s</p>
                    </div>
                    <div>Color: 
                        <p class="desc-value">%s</p>
                    </div>
                    
                </div>
            </div>
            <div>Descripción: <p class="desc-text">%s</p>
            </div>
        </div>';
?>
<div class="body-title">
    <p class="title-decorator"></p>
    <h1>
        Catálogo de Productos
    </h1>
</div>
<div class="product-container">
    <?php 
        if(empty($product_data)){

        }else{
            for($n=0; $n < count($product_data); $n++){
            printf($template,
            $product_data[$n]['nombre'],
            $product_data[$n]['imgUrl'],
            $product_data[$n]['peso'],
            $product_data[$n]['color'],
            $product_data[$n]['descripcion']
            );
        }
    }
        
    ?>
    <!-- <div class="product-card">
        <div class="product-title">Nombre:
        </div>
        <div>
            <div class="product-img-wrapper">
                <img src="./public/img/estopa-1.png" alt="" class="product-img">
            </div>
            <div class="descriptions-product">
                <div>Cantidad: 
                    <p class="desc-value">1</p>
                </div>
                <div>Peso: 
                    <p class="desc-value">250g</p>
                </div>
                <div>Color: 
                    <p class="desc-value">Blanco</p>
                </div>
                
            </div>
        </div>
        <div>Descripción: <p class="desc-text">Estopa fina, peinada y empacada</p>
        </div>
    </div>
    <div class="product-card">
        <div class="product-title">Nombre:
        </div>
        <div>
            <div class="product-img-wrapper">
                <img src="./public/img/estopa-2.png" alt="" class="product-img">
            </div>
            <div class="descriptions-product">
                <div>Cantidad: <p class="desc-value">1</p>
                </div>
                <div>Peso: <p class="desc-value">250g</p>
                </div>
                <div>Color: <p class="desc-value">Blanco</p>
                </div>
    
            </div>
        </div>
        <div>Descripción: <p class="desc-text">Estopa fina, peinada y empacada</p>
        </div>
    </div>
    <div class="product-card">
        <div class="product-title">Nombre:
        </div>
        <div>
            <div class="product-img-wrapper">
                <img src="./public/img/estopa-1.png" alt="" class="product-img">
            </div>
            <div class="descriptions-product">
                <div>Cantidad: <p class="desc-value">1</p>
                </div>
                <div>Peso: <p class="desc-value">250g</p>
                </div>
                <div>Color: <p class="desc-value">Blanco</p>
                </div>
    
            </div>
        </div>
        <div>Descripción: <p class="desc-text">Estopa fina, peinada y empacada</p>
        </div>
    </div>
    <div class="product-card">
        <div class="product-title">Nombre:
        </div>
        <div>
            <div class="product-img-wrapper">
                <img src="./public/img/estopa-1.png" alt="" class="product-img">
            </div>
            <div class="descriptions-product">
                <div>Cantidad: <p class="desc-value">1</p>
                </div>
                <div>Peso: <p class="desc-value">250g</p>
                </div>
                <div>Color: <p class="desc-value">Blanco</p>
                </div>
    
            </div>
        </div>
        <div>Descripción: <p class="desc-text">Estopa fina, peinada y empacada</p>
        </div>
    </div> -->
</div>
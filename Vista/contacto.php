<?php 
    $enviar_mensaje = new MensajesControlador();
    
    if(!empty($_POST['message-submit'])){
   
       
        
        $mensaje = array(
            'email_contact' => $_POST['email_contact'],
            'name_contact' => $_POST['name_contact'],
            'tel_contact' => $_POST['tel_contact'],
            'subject_contact' => $_POST['subject_contact'],
            'message_contact' => $_POST['message_contact'],
        );

        $enviar_mensaje->create($mensaje);

        printf('
        <div class="modal-container">
            <div class="news">
                <div class="close-news-wrapper">
                    <button class="close-btn" id="close-modal"></button>
                </div>
                <div class="news-title">Gracias <b>%s</b></div>
                    <hr/>
                    <p class="text-success">¡Su mensaje ha sido enviado con éxito!</p>
            </div>
        </div>', $_POST['name_contact']);
        
        $_POST['message-submit'] = null;
    }
?>
<div class="body-title">
    <h1>
        Contacto
    </h1>
</div>
<div class="contact-container">
    <div class="line-middle"></div>
    <div class="form-container">
        <p class="text-form">
            Gracias por confiar en nosotros. Por favor diligencie este formulario y háganos saber sus dudas,
            inquietudes o interés
            en comprar nuestros productos.
        </p>
        
        <form class="form contact-form" method="POST">
           
            <div class="form-wrapper">
                <label for="name_contact">Nombre:</label>
                <input type="text" name="name_contact" id="name_contact" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-wrapper">
                <label for="tel_contact">Teléfono:</label>
                <input type="tel" name="tel_contact" id="tel_contact" placeholder="Ingrese su teléfono" required>
            </div>
            <div class="form-wrapper">
                <label for="email_contact">Correo electrónico:</label>
                <input type="email" name="email_contact" id="email_contact" placeholder="Ingrese su coreo electrónico" required>
            </div>
            <div class="form-wrapper">
                <label for="subject_contact">Asunto:</label>
                <input type="text" name="subject_contact" id="subject_contact" placeholder="Ingrese el asunto" required>
            </div>
            <div class="form-wrapper">
                <label for="message_contact">Mensaje:</label>
                <textarea name="message_contact" id="message_contact" cols="20" rows="5"
                    placeholder="Ingrese su inquetud o consulta" required></textarea>
            </div>

            <input type="submit" name="message-submit" value="Enviar" class="btn-primary">
        </form>
        <div class="map-container">
            <div>
                <p>Ubicación:</p>
                <p>
                    calle 44 # 8 - 25. Barrio León XIII. Soacha Bogotá-Colombia
                </p>
            </div>
            <div class="map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1988.501997588326!2d-74.19698694216648!3d4.593304599165759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e35963306d9%3A0x8668ef06c75b30a5!2sCl.%2044%20%23825%2C%20Soacha%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1654139521628!5m2!1ses!2sco"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

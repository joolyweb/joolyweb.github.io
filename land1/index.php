<?php
$api = [
    'key' => '21921',
    'secret' => 'UYdqS1Hr0N4bOYMYQ8vuEVQUfGPu2qAF',
    'flow_url' => 'https://leadrock.com/URL-B5242-7320A'
];

function send_the_order($post, $api)
{
    $params = [
        'flow_url' => $api['flow_url'],
        'user_phone' => $post['phone'],
        'user_name' => $post['name'],
        'other' => $post['other'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'ua' => $_SERVER['HTTP_USER_AGENT'],
        'api_key' => $api['key'],
        'sub1' => $post['sub1'],
        'sub2' => $post['sub2'],
        'sub3' => $post['sub3'],
        'sub4' => $post['sub4'],
        'sub5' => $post['sub5'],
        'ajax' => 1,
    ];
    $url = 'https://leadrock.com/api/v2/lead/save';

    $trackUrl = $params['flow_url'] . (strpos($params['flow_url'], '?') === false ? '?' : '&') . http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $trackUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $params['track_id'] = curl_exec($ch);

    $params['sign'] = sha1(http_build_query($params) . $api['secret']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

    header('Location: ' . (empty($post['success_page']) ? 'confirm.html' : $post['success_page']));
}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST, $api);
}

if (!empty($_GET)) {
?>
    <script type="text/javascript">
        window.onload = function() {
            let forms = document.getElementsByTagName("form");
            for(let i=0; i < forms.length; i++) {
                let form = forms[i];
                form.setAttribute('action', form.getAttribute('action') + "?<?php echo http_build_query($_GET)?>");
                form.setAttribute('method', 'post');
            }
        };
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="ES">
  <head>
    <meta name="robots" content="noindex" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width" />
    <title>Blackmaca</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      rel="shortcut icon"
      href="img/favicon/favicon.ico"
      type="image/x-icon"
    />
    <style type="text/css">
      .top > ul > li {
        display: inline-block;
        margin-top: 5px;
        border-right: 1px solid #ccc;
        padding-right: 10px;
      }

      .top > ul > li:last-child {
        border-right: none;
      }

      .screenLock {
        position: fixed;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        top: 0px;
        left: 0px;
        z-index: 99999;
        display: none;
      }

      .msg {
        position: absolute;
        width: 600px;
        height: 480px;
        top: 5px;
        left: 50%;
        margin-left: -300px;
        background: #148fb9;
        border: 1px solid #eee;
      }

      .msg > h1 {
        color: #fff;
        text-align: center;
        font-size: 24px;
        margin-bottom: 30px;
        margin-top: 30px;
      }

      .close {
        position: absolute;
        top: 1px;
        right: 5px;
        font-size: 40px;
        cursor: pointer;
      }
    </style>

    <style>
      .hide,
      .flag-dropdown {
        display: none;
      }
      .error-box {
        color: #fff;
        background-color: #de5042 !important;
        border-radius: 5px;
        text-align: center;
        width: 240px;
        font-size: 13px;
        line-height: 20px;
        margin: 5px auto !important;
        z-index: 100;
      }
      input:invalid {
        box-shadow: none;
      }
    </style>
  </head>
  <body>
    <div class="screenLock">
      <div class="msg">
        <div class="close">X</div>
        <h1>
          Ya no hay dolor, ni flacidez, ni problemas. Mi pene es duro, fuerte,
          robusto y mi novia se corre 3 veces seguidas
        </h1>
      </div>
    </div>
    <div class="wrap">
      <div class="content">
        <div class="post">
          <h1>
            Ya no hay dolor, ni flacidez, ni problemas. Mi pene es duro, fuerte,
            robusto y mi novia se corre 3 veces seguidas
          </h1>

          <p>
            Antes de comenzar a contar mi historia, comenzaré con lo más
            importante:
            <b
              >no esperen hasta encontrarse con un pene flácido y un dolor
              punzante en la uretra.</b
            >
            Esto inevitablemente causará problemas en las relaciones, afectará
            la confianza en ustedes mismos y, en general, es terriblemente
            desagradable. Créanme, soy una persona que ha pasado por este
            infierno físico y psicológico. Ahora les hablaré de
            <b>una cosa mega genial que todo hombre debería tener.</b>
          </p>
          <h2>Cómo empezó todo</h2>
          <p>
            Nunca había tenido problemas de salud. Y si algo comenzaba a
            molestarme, no le daba importancia y todo se solucionaba solo. Noté
            que algo andaba mal cuando comencé a tener
            <b>sensaciones desagradables en la ingle.</b> No le di ninguna
            importancia. <b>Los dolores se intensificaban,</b> aparecieron
            constantes ganas de orinar, el dolor comenzó a extenderse al
            perineo, genitales, espalda baja y, lo peor de todo - al pene.
            <b>Mi pene se hizo flácido.</b> No se levantaba de inmediato, como
            antes, y caía demasiado rápido. ¿Honestamente? Se volvió muy
            aterrador. Llegué a pensar: ¿y si tengo clamidia o VIH?
          </p>
          <div>
            <center>
              <img src="img/1-osn.png" style="max-width: 550px; width: 100%" />
            </center>
          </div>
          <p>
            Lo más extraño es que el dolor apareció de la nada. No me había
            resfriado, ni agripado, no estaba estresado. No había razón para
            enfermarse. ¿Entonces por qué el pene dejó de levantarse? Me dirigí
            a mi amigo urólogo que me dijo que
            <b
              >los problemas con la potencia indicaban una posible
              prostatitis.</b
            >
            Y que valía la pena comenzar la terapia lo antes posible para no
            descuidar la enfermedad y no se convierta en una forma crónica.
          </p>
          <h2>Solución</h2>

          <p>
            Mi amigo dijo que
            <b
              >recientemente apareció en el mercado un producto genial, que fue
              creado por médicos europeos específicamente para la corrección de
              la potencia</b
            >
            y el tratamiento de la prostatitis. Ha sido probado y ahora se está
            introduciendo activamente como un nuevo método. Esto es
            <a href="#order_form">Blackmaca</a>, un complejo natural basado en
            un afrodisíaco natural único: la maca negra.
            <b
              >Enfrenta perfectamente el problema de la reducción de la
              potencia, la prostatitis e incluso puede aumentar la libido.</b
            >
            También se puede tomar aunque no haya síntomas de prostatitis, solo
            para aumentar la potencia y la resistencia:
            <b
              >el pene se vuelve como una roca, la sangre hierve, la energía se
              desborda.</b
            >
          </p>

          <p style="text-align: center">
            <a href="#order_form"
              ><img
                style="max-width: 200px; width: 100%; margin: 0 auto"
                src="img/order_tube.png"
            /></a>
          </p>

          <h2>Pida con descuento del fabricante</h2>

          <p>
            También mi amigo me dijo que no todos los urólogos saben de él.
            Muchos especialistas que llevan más de 10 años trabajando suelen
            recetar lo mismo y no estudian otras variantes. Además, algunos de
            ellos reciben un porcentaje de las ganancias si llegan a un acuerdo
            con una empresa. ¿Por qué recomendaría otra cosa si le pagan por la
            recomendación?
          </p>

          <p>
            Mi amigo dijo que
            <b
              >es mejor comprar cápsulas en el sitio web oficial para evitar
              falsificaciones y sobreprecios</b
            >
            en sitios de terceros. Me envió el enlace, inmediatamente pedí
            varios botes para tener una reserva y para la prevención. A los 2
            días el mensajero me trajo mi salvación. No esperaba que el
            suplemento ayudara aliviando el dolor después de un día y lo
            eliminara por completo al tercer día. Antes del inicio del
            tratamiento, el dolor no desaparecía durante 2 semanas y podía
            molestar durante días y días. Estoy completamente convencido de la
            eficacia del suplemento.
          </p>

          <h2>Felicitaciones, usted ha ganado el jackpot</h2>

          <p>
            Ahora, la guinda del pastel. Después de una semana de uso, noté que
            mi potencia mejoró. Por supuesto que me preocupaba tener
            prostatitis, por eso decepcionaba a mi novia en la cama. Había un
            problema con la potencia, estaba muy avergonzado y tenso porque
            también tenía que resolver ese problema. Y de pronto
            <b
              >mi erección se hizo más fuerte y se mantiene estable durante
              varias horas.</b
            >
            Mi novia y yo solíamos tener sexo con descansos para “recargarnos”
            después del primer orgasmo. Ahora soy un macho alfa. Puedo continuar
            inmediatamente después de la eyaculación.
            <b>Por primera vez la llevó a tres orgasmos seguidos,</b> ¡imaginen!
            es <b>tremendamente genial:)</b>
          </p>

          <div>
            <center>
              <img src="img/2-osn.jpg" style="max-width: 550px; width: 100%" />
            </center>
          </div>

          <p>
            La clave de <a href="#order_form">Blackmaca</a> es que
            <b>contiene un componente singular y valioso:</b> la maca negra y
            una gran cantidad de vitaminas y microelementos. Se puede tomar
            tanto para terapia compleja como para prevención. Ayuda a
            <b
              >mejorar la circulación sanguínea en el área de la próstata,
              aumenta la producción natural de testosterona, restablece el
              equilibrio hormonal en el cuerpo.</b
            >
            Un ciclo de tratamiento con el producto ayuda a estabilizar el
            funcionamiento de la glándula prostática, fortalecer el sistema
            inmunológico y mejorar la potencia.
          </p>

          <p>
            Y además de una potencia poderosa, mi
            <b>libido ha aumentado.</b> Cuando satisfaces tanto a tu novia, no
            solo te vuelves más seguro en ti mismo, sino que también mejoras
            significativamente tu relación debido al sexo genial, la confianza y
            la armonía en las relaciones. ¿Para qué usar productos químicos para
            aumentar la testosterona cuando hay
            <a href="#order_form">Blackmaca</a>?
          </p>

          <p>
            <b
              >Conclusión: follen más, beban Blackmaca y disfruten de la
              vida.</b
            >
          </p>

          <p style="text-align: center" id="order_form">
            <img
              id="form-intro"
              style="max-width: 200px; width: 100%; margin: 0 auto"
              src="img/order_tube.png"
            />
          </p>
          <center>
            <p class="form-intro">
              <b>ATENCIÓN:</b> hay una oferta especial del fabricante. ¡No
              pierda la oportunidad de probar Blackmaca con un 50% de descuento!
            </p>
          </center>
          <div class="iframe">
            <font class="form-font" color="black">
              Introduzca la información necesaria para obtener el presente
              Blackmaca <br />
              <span style="color: red; white-space: nowrap">
                <span class="hidden-pzero">por </span> :
                <span
                  class="price_land_s1 price_main x_currency priceAndLabelForLandingInfoApi"
                  >890 MXN</span
                >,
              </span>
              <span style="color: red; white-space: nowrap">
                <span style="text-decoration: line-through">
                  <span
                    class="price_land_s4 price_old x_currency_old oldPriceAndLabelForLandingInfoApi"
                    >1780 MXN</span
                  >
                </span>
              </span>
            </font>
            <form class="form_order order_form" action method="POST">
              <input name="country" type="hidden" value="MX" />
              <div class="order_form">
                <div class="block_form target_list_wrap"></div>
                <div class="block_form">
                  <label class="block_form_label">Ejemplo: Pedro Gutiérrez</label>
                  <div>
                    <input
                      class="form_input"
                      name="name"
                      type="text"
                      placeholder="Introduzca su nombre"
                      required
                    />
                  </div>
                </div>
                <div class="block_form">
                  <label class="block_form_label">Ejemplo: +52 1 222 123 4567</label>
                  <div>
                    <input
                      class="form_input"
                      name="phone"
                      placeholder="Ingrese su número de Teléfono"
                      type="tel"
                      required
                    />
                  </div>
                </div>
                <div class="clear"></div>
                <button
                  class="button order-btn ifr_button sub"
                  style="text-transform: uppercase"
                  type="submit"
                >
                  PEDIR <span class="hidden-pzero"></span>
                  <span
                    class="price_land_s1 price_main x_currency priceAndLabelForLandingInfoApi"
                    >890 MXN</span
                  >
                </button>
              </div>
            </form>
          </div>
          <center>
            <div class="form-bottom">
              <p class="form-bottom__title">
                ¡DÉSE PRISA! Los paquetes promocionales terminarán pronto.
              </p>
              <p>
                <b>Actualización:</b> solo quedan
                <b><span class="form-instock">17</span> unidades</b> al día.
                <b><span class="js-current-date"></span></b>
              </p>
              <p class="form-bottom__order">
                Rellene el formulario y nuestro especialista pronto se pondrá en
                contacto con usted. El mensajero entregará el pedido a su
                domicilio, pago a la recepción.
              </p>
            </div>
          </center>
          <br />
          <br />
          <style>
            .iframe * {
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
            }

            .form-font {
              font-size: 20px;
            }

            .iframe {
              max-width: 600px;
              margin: auto;
              height: auto !important;
              background: rgb(160, 186, 138) none repeat scroll 0% 0%;
              border: 5px dashed black;
              padding: 20px 20px 0;
              text-align: center;
            }

            .block_form input {
              display: block;
              width: 100%;
              height: 40px;
              padding: 0 15px;
              border: #888 1px solid;
              font-size: 15px;
              background: #fff;
            }

            .block_form select {
              display: block;
              width: 100%;
              height: 40px;
              padding: 0 15px;
              border: #888 1px solid;
              font-size: 15px;
              background: #fff;
            }

            .block_form {
              margin-bottom: 10px;
            }

            .order_form {
              margin-top: 15px;
            }

            .block_form_label {
              font-size: 15px;
              margin-bottom: 5px;
              text-align: left;
              display: block;
            }

            .order_form .clear {
              clear: both;
            }

            .ifr_button {
              cursor: pointer;
              letter-spacing: 0.4px;
              font-weight: 600 !important;
              border: none;
              border-bottom-color: currentcolor;
              border-bottom-style: none;
              border-bottom-width: medium;
              font-family: calibri, roboto, arial;
              display: block;
              margin: 10px auto 20px;
              color: #fff;
              font-size: 20px;
              text-decoration: none;
              text-align: center;
              width: auto;
              line-height: 32px;
              height: auto;
              background: #e74c3c;
              border-bottom: 2px solid #c0392b;
              -webkit-border-radius: 3px;
              -moz-border-radius: 3px;
              border-radius: 3px;
              min-height: 51px;
              padding: 0 14px;
            }
          </style>
          <!-- <center><img src="img/social-c.png"></center> -->
        </div>
        <div class="vk-comment-load comment-id-1">
          <div class="vk-avatar">
            <img src="img/m1.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Santiago Luna <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            ¡Hola! Recientemente tuve el mismo problema de flacidez. Estuve muy
            asustado, confundido y sin saber que hacer. Me daba vergüenza ir al
            médico. Vi tu historia y me inspiré, pedí 2 botes para mí:))
            prometieron traerlo en 2 días.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m2.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Arturo <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Me interesa la ciencia, sigo las novedades, las investigaciones
            médicas. ¡Me esfuerzo en cuidar mi salud! Leí sobre los resultados
            de las pruebas de Blackmaca, me sorprendió. Nunca había visto un
            porcentaje tan alto de efectividad en otros estudios. Pedí 2
            paquetes por el precio de uno. Cuando me beba uno, escribiré.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m3.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Domingo Santos <span class="comment_date"></span>
          </div>
          <p class="vk-comment-text">
            Yo también tengo periódicamente problemas fisiológicos... ¡Qué bueno
            que encontré este comentario! Lo pido.
          </p>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m4.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Gabriel Sandoval <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            ¡Hola a todos! Ayer llegó el paquete por mensajería. Entregado en 2
            días. Contaré sobre el efecto cuando haga el ciclo.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m5.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Julián Alarcón <span class="comment_date"></span>
          </div>
          <p class="vk-comment-text">
            Soy director de empresa, tengo reuniones frecuentes y encuentros con
            socios. Se me presentaron problemas con la prostatitis, la necesidad
            constante de ir al baño y el dolor. El suplemento fue recomendado
            por mi médico, después de un ciclo ya no me preocupo por la
            prostatitis y mi erección ha mejorado mucho. Mi esposa y yo quedamos
            muy contentos, lo bebo para mantener el efecto. Lo recomiendo,
            funciona muy bien
          </p>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m6.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Miguel <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Hasta los 50 años, nada me molestaba realmente. Corría, trabajaba,
            hacía de todo. Pero luego empezó... Una cosa, luego otra. Me dolía
            en el área de la ingle, me dolía orinar. Estaba preocupado porque
            trabajo duro para mantener a mi familia y no tengo tiempo ni dinero
            para ir a médicos y comprar medicamentos caros. Leí más opiniones
            sobre Blackmaca, todas positivas. Pedí un bote y luego dos más.
            Desde el primer bote, los dolores desaparecieron, la potencia fue
            restaurada. Tomo para mantener la testosterona y sentirme con más
            energía. ¡Me siento simplemente increíble!
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m7.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            José <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Compré Blackmaca solo por recomendación de un colega en quien
            confío. Lo ha estado tomando durante mucho tiempo. ¡Ahora, a los 55,
            tengo una potencia estable y todo es súper en la cama! Además es
            económico.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m8.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Salvador Ortega <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Blackmaca me lo recomendó mi médico. Tengo 46 años y la mayoría de
            los medicamentos no son adecuados para mí debido a intolerancia.
            Acudí a él quejándome de dolor, ganas frecuentes de orinar, fatiga.
            El suplemento resolvió todos mis problemas, me siento mucho mejor.
            Incluso la potencia ha mejorado.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m9.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Cristián <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Entre por curiosidad para leer comentarios. Hasta ahora no ha habido
            problemas, pero tendré en cuenta que existe un suplemento tan
            efectivo. ¡Super!
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m10.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Víctor <span class="comment_date"></span>
          </div>
          <p class="vk-comment-text">
            Estuve sufriendo de prostatitis durante 5 años. Todo comenzó con un
            dolor tirante en la parte baja de la espalda, luego afectó la
            potencia y el orgasmo. Fui a varios médicos. Los síntomas
            desaparecían, luego volvía la misma historia. Demasiadas recetas...
            Finalmente logré resolver mi problema solo con la ayuda de
            Blackmaca: actuó rápido, alivió el dolor y las demás consecuencias
            desagradables de la enfermedad. Además, aumenta la libido, fortalece
            el sistema inmunológico y gracias a todo eso ¡el humor mejora! 👍
          </p>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m11.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Hugo Peña <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">Este producto realmente funciona.</div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m12.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Pablo Castilla <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            A mi también fue mi médico que me recomendó el suplemento. Ahora
            hago ciclos de tratamiento y no tengo ningún problema del sistema
            genitourinario. ¡Super!
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m13.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Ángel <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Inspirado con sus historias, hago el pedido. Ya que se puede comprar
            con descuento.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m14.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Diego <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">Pedí, llegó muy rápido</div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m15.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Alfonso Soler <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Que bueno que hayan creado un suplemento así y que los médicos estén
            tratando de ayudar a la gente, dándose cuenta de la situación
            económica del país. ¡Que bien! Respetos a los médicos.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m16.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Pedro Padilla <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Ultimamente me he sentido humillado, como si nadie que conociera
            haya enfrentado problemas de potencia. Me avergonzaba abrir el tema
            entre amigos. ¡Qué bueno que encontré a Blackmaca! ¡Qué alivio!
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar">
            <img src="img/m10.jpg" style="width: 50px" />
          </div>
          <div class="vk-comment-name">
            Andrés <span class="comment_date"></span>
          </div>
          <div class="vk-comment-text">
            Lo probé. ¡Excelente! Sigo tomandolo, haciendo más sano mi cuerpo.
            Recomiendo comprar
          </div>
        </div>
      </div>
      <center>
        <a href="#order_form" style="font-size: 32px">Ordena Blackmaca</a>
        <div class="footer-privacy" style="font-size: 15px; text-align: center">
            <div>
                <center>
                  GIBSON CAD SERVICES LTD,86a Market Street, Eastleigh, England, SO50 5RE
                  <br>
                  <a href="policy.html" target="_blank" rel="noopener noreferrer">Privacy policy</a>
                </center>
              </div>
        </div>
      </center>
      <br />
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/script.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        let formInstockValue;
        let countDownFlag = true;

        // Функция уменьшения количества упаковок
        function countdown(el) {
          if (formInstockValue > 10) {
            formInstockValue -= randomIntFromInterval(1, 3);
            changeCounter(formInstockValue, el);
          } else if (formInstockValue > 7) {
            formInstockValue -= 1;
            changeCounter(formInstockValue, el);
          }
        }

        function changeCounter(num, el) {
          localStorage.setItem("inStock", num);
          el.style.opacity = 0;
          setTimeout(function () {
            el.style.opacity = 1;
            el.textContent = num;
          }, 300);
        }

        // Функция для генерации случайного числа в заданном диапазоне
        function randomIntFromInterval(min, max) {
          // min and max included
          return Math.floor(Math.random() * (max - min + 1) + min);
        }

        // Здесь указываем класс элементов, в котором(ых) находится счётчик упаковок
        const element = document.querySelectorAll(".form-bottom");

        let Visible = function (targets) {
          // Проходимся по всем блокам со счётчиком, если их несколько
          targets.forEach((target) => {
            let formInStockEl = target.querySelector(".form-instock");
            // Проверяем наличие записи в localStorage о количестве упаковок
            if (localStorage.hasOwnProperty("inStock")) {
              formInStockEl.textContent = localStorage.getItem("inStock");
              formInstockValue = formInStockEl.textContent;
            } else {
              formInstockValue = formInStockEl.textContent;
              localStorage.setItem("inStock", formInstockValue);
            }
            // Все позиции элемента
            let targetPosition = {
                top: window.pageYOffset + target.getBoundingClientRect().top,
                left: window.pageXOffset + target.getBoundingClientRect().left,
                right:
                  window.pageXOffset + target.getBoundingClientRect().right,
                bottom:
                  window.pageYOffset + target.getBoundingClientRect().bottom,
              },
              // Получаем позиции окна
              windowPosition = {
                top: window.pageYOffset,
                left: window.pageXOffset,
                right:
                  window.pageXOffset + document.documentElement.clientWidth,
                bottom:
                  window.pageYOffset + document.documentElement.clientHeight,
              };

            if (
              targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
              targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
              targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
              targetPosition.left < windowPosition.right
            ) {
              // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
              // Если элемент полностью видно, то запускаем следующий код
              if (countDownFlag) {
                startCountDown(formInStockEl);
                countDownFlag = false;
              }
            } else {
              // Если элемент не видно, то запускаем этот код
            }
          });
        };

        // Запускаем функцию при прокрутке страницы
        window.addEventListener("scroll", function () {
          Visible(element);
        });

        // А также запустим функцию сразу. А то вдруг, элемент изначально видно
        Visible(element);

        function startCountDown(el) {
          let countInterval = setInterval(function () {
            countdown(el);
          }, randomIntFromInterval(10, 15) * 1000);
          // В функцию передаём количество секунд от 5 до 8. Умножаем на 1000 для получения миллисекунд(для работы интервала). В данном случае получаем случайное число в диапазоне от 5 до 8 включительно.
        }
      });
    </script>
	<script>
		(function (m, e, t, r, i, k, a) {
		  m[i] =
			m[i] ||
			function () {
			  (m[i].a = m[i].a || []).push(arguments);
			};
		  m[i].l = 1 * new Date();
		  (k = e.createElement(t)),
			(a = e.getElementsByTagName(t)[0]),
			(k.async = 1),
			(k.src = r),
			a.parentNode.insertBefore(k, a);
		})(
		  window,
		  document,
		  "script",
		  "https://mc.yandex.ru/metrika/tag.js",
		  "ym"
		);
		ym(92795457, "init", {
		  clickmap: true,
		  trackLinks: true,
		  accurateTrackBounce: true,
		  webvisor: true,
		});
	  </script>
	  <!-- Метрика -->
	<!-- Валидация формы -->
	  <style>
		input[type="tel"] {
		  outline: none;
		}
		a {
		  cursor: pointer !important;
		}
		button {
		  cursor: pointer !important;
		}
		button:disabled {
		  cursor: not-allowed !important;
		}
	  </style>
	  <script>
		const code = "52";
		const inputs = document.querySelectorAll('input[type="tel"]');
		inputs.forEach((input) => {
		  input.value = `+${code}`;
		});
  
		const lengthMain = 10;
		const lengthTotal = code.length + lengthMain;
		const forms = document.querySelectorAll("form");
		forms.forEach((form) => {
		  const submitBtn = form.querySelector('button[type="submit"]');
		  const inputPhone = form.querySelector('input[type="tel"]');
		  if (submitBtn) {
			submitBtn.disabled = true;
		if (inputPhone) {
				  inputPhone.addEventListener("input", (e) => {
			  const plus = e.target.value.includes("+");
			  const clearStr = e.target.value.replace(/[^+\d]/g, "");
			  if (plus) {
				inputPhone.setAttribute("minlength", lengthTotal + 1);
			  } else {
				inputPhone.setAttribute("minlength", lengthTotal);
			  }
  
			  inputPhone.value = clearStr;
  
			  if (/(\+52|52)([0-9]{10})/.test(clearStr)) {
				submitBtn.disabled = false;
				inputPhone.style.border = "2px solid green";
			  } else {
				submitBtn.disabled = true;
				inputPhone.style.border = "2px solid red";
			  }
			});
		}
		  }
		});
	  </script>
  <script type="text/javascript" src="https://cdn.ldrock.com/validator.js"></script>
<script type="text/javascript">
    LeadrockValidator.init({
        geo: {
            iso_code: 'MX'
        }
    });
</script>
</body>
</html>

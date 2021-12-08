
$(document).ready(function () {
  document.getElementById("buscador").focus();

  const productos = [
    { nombre: 'Queso Oaxaca 1 KG', id: 1, img: 'img-1' },
    { nombre: 'Yogurt 4 KG', id: 2, img: 'img-2' },
    { nombre: 'Queso Panela 1.6 KG', id: 3, img: 'img-3' },
    { nombre: 'Boli Lari 1 L', id: 4, img: 'img-4' },
    { nombre: 'Queso Oaxaca 200 GR', id: 5, img: 'img-5' },
    { nombre: 'Queso Oaxaca Rayado 1 KG', id: 6, img: 'img-6' },
    { nombre: 'Queso Panela 800 GR', id: 7, img: 'img-7' },
    { nombre: 'Queso Asadero Gudchis 1 KG', id: 8, img: 'img-8' },
    { nombre: 'Queso Asadero Rayado Gudchis 1 KG', id: 9, img: 'img-9' },
    { nombre: 'Queso Doblecrema 1 KG', id: 10, img: 'img-10' },
    { nombre: 'Queso Doblecrema 2.5 KG', id: 11, img: 'img-11' },
    { nombre: 'Liquesco 1 KG', id: 12, img: 'img-12' },
    { nombre: 'Queso Frecal Rayado 1 KG', id: 13, img: 'img-13' },
    { nombre: 'Crema 1 L', id: 14, img: 'img-14' },
    { nombre: 'Yoghurt Lari 1 L', id: 15, img: 'img-15' },
    { nombre: 'Yoghurt Lari 1 G', id: 16, img: 'img-16' }
  ];
  const buscador = document.querySelector('#buscador');
  const respuesta = document.querySelector('#respuesta');

  $('.abchat').on('click', function () {
    $('.abrir-chat').slideUp(300);

    $('.wrapper-chatbot').removeClass('not-visible');
    $('.wrapper-chatbot').addClass('visible');
  });
  $('.close-chat').on('click', function () {

    $('.wrapper-chatbot').removeClass('visible');
    $('.wrapper-chatbot').addClass('not-visible');
    $('.abrir-chat').slideDown(300);
  });
  //Srcorll smooth

  $('.ir-arriba').on('click', function () {
    console.log("Arriba");
    $('body, html').animate({
      scrollTop: '0px'
    }, 800);
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('.ir-arriba').slideDown(300);

    } else {
      $('.ir-arriba').slideUp(300);

    }
  });
  //Scroll smooth
  //Tooltip
  document.getElementById('tooltip_container').addEventListener('mousemove', (e) => {

    let x = e.clientX;
    let y = e.clientY;
    var target = e.target.className.split(' ');
    var targetP = e.target.parentNode.className.split(' ');
    if (target[1] === 'tooltip-box') {
      e.target.children[0].style.top = y + y * .02 + 'px';
      e.target.children[0].style.left = x + x * .02 + 'px';
    }
    if (targetP[1] === 'tooltip-box') {
      e.target.parentNode.children[0].style.top = y + y * .02 + 'px';
      e.target.parentNode.children[0].style.left = x + x * .02 + 'px';
    }
  });
  //ToolTip
  $('ul li').on('click', function () {
    $('li').removeClass('active');
    $(this).addClass('active');
  });
  $('.media').on('click', function () {
    $(this).removeClass('show');
    // $(this).addClass('hide');
    $('.receta').addClass('receta-act');
    $('.receta-act').removeClass('receta');

  });

  $('.media').click(function () {
    $(this).toggleClass('flipped');
  });
  $('.receta').on('click', function () {
    $(this).addClass('receta');
    // $(this).addClass('hide');
    $(this).removeClass('receta-act');


  });



  const filtrar = () => {
    respuesta.innerHTML = "";
    const text = buscador.value.toLowerCase();
    for (let producto of productos) {
      let nombre = producto.nombre.toLocaleLowerCase();
      if (nombre.indexOf(text) !== -1 && text !== "") {

        respuesta.innerHTML += `<div class="row align-items-center busc-card">
      <div class="col-sm-6 ">
      <img class="img-bus" src="/LaLaja/images/${producto.img}.jpg" style="height:90px;"></img>
      </div>
     
      <div class="col-sm-6 col-bus">
      <a class="icono-busc-a" href="/LaLaja/paginas/mockupcompra.php?id_p=${producto.id}">${producto.nombre}</br</a>
      </div>
     
      </div>
      `;

      }
    }
    if (respuesta.innerHTML === "" && text !== "") {
      respuesta.innerHTML += `<div class="row align-items-center busc-card">
      <div class="col-sm-6 ">
      <i class="img-bus fa fa-question"  style="height:90px;"></i>
      </div>
     
      <div class="col-sm-6 col-bus">
      <a class="icono-busc-a" href="/LaLaja/paginas/productos.php">NO EXISTE</a>
      </div>
     
      </div>
      `;
    }
  };

  buscador.addEventListener('keyup', filtrar);

  //Enviar mensajes chatbot
  $("#send-btn").on("click", function () {
    $value = $("#data").val();
    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');

    // start ajax code
    $.ajax({
      url: '/LaLaja/controllers/message.php',
      type: 'POST',
      data: 'text=' + $value,
      success: function (result) {
        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="/LaLaja/images/vaca-chat.png" class="vaca-chat"></img></div><div class="msg-header"><p>' + result + '</p></div></div>';
        $(".form").append($replay);
        // when chat goes down the scroll bar automatically comes to the bottom
        $(".form").scrollTop($(".form")[0].scrollHeight);
      }
    });
  });
  //Enviar mensajes chatbot
});

//Funcion para mostrar articulos
function mostrarArticulos(orden, where) {
  console.log(orden + "," + where);
  $.ajax({
    url: '/LaLaja/controllers/ProductoController.php',
    data: { 'orden': orden, 'where': '' + where },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {
      console.log(respuesta);
      var template = `
      <div class="row-card">
        
      `;

      if (JSON.parse(respuesta) == "-1") {
        console.log(respuesta);
        template += `<img class="img-sad" src="/LaLaja/images/sad.png"></img>
        <h3 class="red">NO SE ENCONTRO EL PRODUCTO</h3>`;

      } else {
        var productos = JSON.parse(respuesta);
        var numCom = 0;
        productos.forEach(producto => {
          template += `
          <div class="example-1 card">
            <div class="wrapper ${producto.imagen}">
                <div class="date">
                    <span class="day">${producto.descuento * 100}%</span>
                    <span class="month">DESC</span>
                    <span class="year"><strike>$${producto.precio}</strike></span>
                    <span class="day"><b>$${producto.precio - producto.descuento * 100}</b></span>
                </div>
                
                <div class="data">
               
                    <div class="content">
                        <h3 class="title">                
                         <a class="tooltip-box" href="/LaLaja/paginas/conocer_producto.php?id_p=${producto.idProducto}">${producto.nombre} ${producto.peso}
                        <span class="tooltip-info"><i class="fa fa-eye" aria-hidden="true"></i> Click en Titulo para Ver mas</span>
                        <i class="fa fa-plus-circle" aria-hidden="true" style="color:#8CBF3A;"> </i>  </a></h3>
                        <p class="text">${producto.descripcion}</p>
                        <label for="show-menu-${producto.idProducto}" class="menu-button" ><span></span></label>                       
                    </div>
                    <input type="checkbox" id="show-menu-${producto.idProducto}" checked />
                    <ul class="menu-content">
                        <li class="tooltip-box"> <span class="tooltip-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</span><a href="/LaLaja/paginas/mockupcompra.php?id_p=${producto.idProducto}" class="fa fa-shopping-cart" ></a></li>
                        <li class="tooltip-box"> <span class="tooltip-info"><i class="fa fa-heart-o" aria-hidden="true"></i> Dar like</span><a onClick="javascript:darLike(${producto.idProducto})" class="fa fa-heart-o"><span id="sp-${producto.idProducto}">${producto.numLikes}</span></a></li>
                        <li class="tooltip-box"> <span class="tooltip-info"><i class="fa fa-comment-o" aria-hidden="true"></i> Comentar</span><a onClick="javascript:verComentarios(${producto.idProducto})" class="fa fa-comment-o"><span>${producto.totalComentarios}</span></a></li>
                        <div class="divcomentarios" id="comentario${producto.idProducto}"></div>
                    </ul>
                   
                </div>
                
            </div> 
           
        </div>`;
        });

      }
      template += `</div>`;
      console.log(template);
      $('#row-card-prod').html(template);
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log("Error CTNPN: " + errorThrown + textStatus + XMLHttpRequest);

    }
  });
}
//Fin de funcion para mostrar articulos
//Funcion para llenar generar carrousel
function generarCarrousel(orden, where) {
  console.log(orden + "," + where);
  $.ajax({
    url: '/LaLaja/controllers/ProductoController.php',
    data: { 'orden': orden, 'where': '' + where },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {

      var template = ``;

      if (JSON.parse(respuesta) == "-1") {

        template = "";
      } else {
        var productos = JSON.parse(respuesta);
        template += `<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">`;
        productos.forEach((producto, i) => {
          if (i == 0) {
            template += `<li data-target="#carouselExampleIndicators" data-slide-to="${i}" class="active"></li>`;
          } else {
            template += `<li data-target="#carouselExampleIndicators" data-slide-to="${i}"></li>
          `};
        });
        template += `</ol><div class="carousel-inner">`;
        productos.forEach((producto, i) => {
          let a = "";
          if (i == 0) {
            a = " active"
          }
          template += `
            
            <div class="carousel-item${a}">
                <img class="d-block w-100" src="/LaLaja/images/${producto.imagen}.jpg" alt="${producto.nombre}">
            </div>`;
        });
        template += `</div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>`;
        $('.row-ca').html(template);

      }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log("Error CTNPN: " + errorThrown + textStatus + XMLHttpRequest);

    }
  });
}
//Fin funcion para llenar carrousel
function darLike(idProducto) {
  $.ajax({
    url: `/LaLaja/controllers/ProductodarLike.php?idProducto=${idProducto}`,
    data: { 'idProducto': idProducto },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {

      mostrarArticulos('ORDER BY numLikes desc LIMIT 4', '');

    }
  });
}

function verComentarios(idProducto) {

  var html = $('#comentario' + idProducto).html();
  console.log(html);
  if (html == "") {

    $.ajax({
      url: `/LaLaja/controllers/ProductoVerComentarios.php`,
      data: { 'idProducto': idProducto },
      method: 'POST',
      datatype: 'json',
      success: function (respuesta) {

        var template = "";
        var comentarios = "";
        var comentarios = JSON.parse(respuesta);
        console.log(comentarios);
        template += `
      
        <div class="row">
        <div class="col">
           
          <div  id="form-cm" class="form_comentarios d-flex justify-content-center">
          
                <input class="form-control" type="text" name="cvEntrega" id="nombre${idProducto}" placeholder="Nombre" value="">
               <br>
                <textarea class="form-control contenido" name="contenido" id="contenido${idProducto}"  placeholder="Comentario" required></textarea>
                <button   class="button-53" role="button" onClick="javascript:insertarComentarios(${idProducto})" data-toggle="tooltip" data-placement="top" title="ENVIAR COMENTARIO"> <img class="icon-img-com" src="/LALAJA/images/vaca-escribiendo.png"> Comentar</button>
           </div> 
          
        </div>
    </div>`;

        if (comentarios !== "-1") {

          comentarios.forEach(comentario => {
            template += `
        <div class="row">
        
        <div class="col-com col-md-12 col-sm-12 ">
 <p class="t-e nombre">Escrito por: ${comentario.nombre} <span class="t-e">
                    ${comentario.fecha}</span> </p>
            <p class="t-e comentario">${comentario.contenido}</p>
         
        </div>
    </div>
       <hr class="hr-style">
    
        `;
          });//${comentario.idComentario}
        }
       
        $('#comentario' + idProducto).html(template);

        $('#comentario' + idProducto).removeClass("divcomentarios");
        $('#comentario' + idProducto).addClass("divcomentarios-active");
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log("Error CTNPN: " + errorThrown + textStatus + XMLHttpRequest);

      }
    });
  } else {

    if ($('#comentario' + idProducto).prop('class') == "divcomentarios-active") {
      $('#comentario' + idProducto).removeClass("divcomentarios-active");
      $('#comentario' + idProducto).addClass("divcomentarios");
    } else {
      $('#comentario' + idProducto).removeClass("divcomentarios");
      $('#comentario' + idProducto).addClass("divcomentarios-active");
    }


  }


}
function insertarComentarios(idProducto) {
  var contenido = document.getElementById('contenido' + idProducto).value;
  var nombre = document.getElementById('nombre' + idProducto).value;
  console.log(nombre);

  $.ajax({
    url: `/LaLaja/controllers/ProductoInsertarComentarios.php`,
    data: { 'idProducto': idProducto, 'contenido': contenido, 'nombre': nombre },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {
      if (JSON.parse(respuesta)) {
        $('#comentario' + idProducto).html("");
        mostrarArticulos('ORDER BY numLikes desc LIMIT 4', '');
      } else {
        alert("No se pudo agregar el dato");
      }
    }
  });



}


function verReceta(tipo) {
  var htmlReceta = "";
  switch (tipo) {
    case 1:
      htmlReceta = `  <div class="row justify-content-md-center">

  <div class="col-sm-6 col-md-6 col-lg-6 col-6 txt-alg-left">
      <i class="fa fa-times-circle-o cl-receta" aria-hidden="true"></i>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12 col-12 txt-alg-right">
      <i class="icon-medium"><img class="img-r" src="images/vaca-cocinando.png"></i>

  </div>
</div>
<img src="images/dedos-queso.png" class="img-al" alt="">

<div class="row justify-content-md-center wrap-content-recipe">
  <div class="col-md-12 recipe">
      <div class="text-receta">
          <h3> DEDOS DE QUESO LA LAJA</h3>
          <p>Esta receta de dedos de queso es ideal para los chiquitines, el queso
              empanizado lleva unas especies italianas que le dan un sabor original,
              pruébalas.</p>

      </div>
  </div>


  <div class="col-md-6 col-lg-6 wrap-list-ing">
      <h5>INGREDIENTES PARA 4 PERSONAS</h5>
      <div class="ingredientes-l">
          <ul class="list-ing">
              <li>400 gr <a href="paginas/mockupcompra.php?id_p=1"><strong
                          class="n tooltip-box">Queso Oaxaca
                          <span class="tooltip-info">
                              <img src="images/img-1.jpg" class="img-ing-su" alt="">
                          </span>
                      </strong>
                  </a>
              </li>
              <li>1 taza <strong>Harina</strong></li>
              <li>2 <strong>Huevos</strong></li>
              <li>2 tazas de <strong>Pan Molido</strong> extra crunch</li>
              <li> 1 cucharada <strong>Perejil finamente picado</strong></li>
              <li>2 tazas <strong>Aceite</strong> </li>
              <li><strong>Sal</strong> al gusto</li>
              <li><strong>Pimienta</strong> al gusto</li>
          </ul>

      </div>
  </div>
  <div class="col-md-6 col-lg-6 wrap-list-step">
      <h4>PASOS:</h4>
      <ol>
          <li>En un recipiente hondo mezcle los huevos y el agua.</li>
          <li>En otro recipiente mezcle el pan molido, la sal de ajo, la albahaca, y el
              orégano.</li>
          <li>En un tercer recipiente hondo mezcle la harina y la maicena.</li>
          <li>Caliente en un sartén grande el aceite hasta que esté listo para freír.</li>
          <li>Corte el queso manchego en rectángulos (los dedos) y pase cada uno por la
              mezcla de la harina, luego la de los huevos y por último la del pan molido.
          </li>
          <li>Fría cada dedo hasta que este dorado (aproximadamente 45 segundos) y seque
              muy bien con una toalla de papel para remover la grasa.
          </li>
      </ol>


  </div>

</div>`;
      break;
    case 2:
      htmlReceta = `  <div class="row justify-content-md-center">

  <div class="col-sm-6 col-md-6 col-lg-6 col-6 txt-alg-left">
      <i class="fa fa-times-circle-o cl-receta" aria-hidden="true"></i>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12 col-12 txt-alg-right">
      <i class="icon-medium"><img class="img-r" src="images/vaca-cocinando.png"></i>

  </div>
</div>
<img src="images/receta-2.png" class="img-al" alt="">

<div class="row justify-content-md-center wrap-content-recipe">
  <div class="col-md-12 recipe">
      <div class="text-receta">
          <h3> FRUTAS CON CREMA LA LAJA</h3>
          <p>Receta fácil, rápida y económica para hacer en casa, con un nivel de dificultad extremadamente bajo, para preparar con los pequeños y compartir en familia. Ideal para disfrutar después de la comida.</p>

      </div>
  </div>


  <div class="col-md-6 col-lg-6 wrap-list-ing">
      <h5>INGREDIENTES PARA 10 PORCIONES</h5>
      <div class="ingredientes-l">
          <ul class="list-ing">
              <li>1/2 litros de <a href="paginas/mockupcompra.php?id_p=14"><strong
                          class="n tooltip-box">Crema Acida
                          <span class="tooltip-info">
                              <img src="images/img-14.jpg" class="img-ing-su" alt="">
                          </span>
                      </strong>
                  </a>
              </li>
              <li>4 <strong>Manzanas</strong></li>
              <li>4 <strong>Platanos</strong> </li>
              <li> 1 lata de <strong>Piña en almibar, mediana</strong></li>
              <li>3 cucharadas de<strong>Nuez</strong> entera. </li>
           
          </ul>

      </div>
  </div>
  <div class="col-md-6 col-lg-6 wrap-list-step">
      <h4>PASOS:</h4>
      <ol>
          <li>Lava la manzana, pícala en trozos pequeños y agrega en un tazón.</li>
          <li>Pela el plátano ,córtalo en rebanadas y agrega junto con la manzana.</li>
          <li>Agrega la piña en almíbar junto con un poco de almíbar.</li>
          <li>Vacía la crema hasta que cubra la fruta.</li>
          <li>Agregar las nueces picadas y mezcla.</li>
          <li>Opcional: Si se va a comer después agrega un poco de azúcar glass para evitar que la fruta se oxide.</li>
      </ol>


  </div>

</div>`;
      break;
    case 3: htmlReceta = `  <div class="row justify-content-md-center">

    <div class="col-sm-6 col-md-6 col-lg-6 col-6 txt-alg-left">
        <i class="fa fa-times-circle-o cl-receta" aria-hidden="true"></i>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 txt-alg-right">
        <i class="icon-medium"><img class="img-r" src="images/vaca-cocinando.png"></i>
  
    </div>
  </div>
  <img src="images/receta-3.png" class="img-al" alt="">
  
  <div class="row justify-content-md-center wrap-content-recipe">
    <div class="col-md-12 recipe">
        <div class="text-receta">
            <h3> PALETAS DE YOGHURT CON GRANOLA</h3>
            <p>PARA EL ANTOJITO DE LA TARDE EN ESTOS DÍAS CALUROSOS, TENEMOS UNA RICA OPCIÓN: PREPARA ESTAS PALETAS DE YOGURT CON GRANOLA PARA TI Y TU FAMILIA.</p>
        </div>
    </div>
  
  
    <div class="col-md-6 col-lg-6 wrap-list-ing">
        <h5>INGREDIENTES PARA 4 PORCIONES</h5>
        <div class="ingredientes-l">
            <ul class="list-ing">
                <li>1 taza de <a href="paginas/mockupcompra.php?id_p=16"><strong
                            class="n tooltip-box">Yoghurt Lari
                            <span class="tooltip-info">
                                <img src="images/img-16.jpg" class="img-ing-su" alt="">
                            </span>
                        </strong>
                    </a>
                </li>
                <li>1 taza de <strong>Leche de Coco</strong></li>
                <li>1/2 de <strong>Azucar</strong></li>
                <li>1 cda. de <strong>extracto de vainilla</strong></li>
                <li>1/2 taza de <strong>Granola</strong></li>
            </ul>
  
        </div>
    </div>
    <div class="col-md-6 col-lg-6 wrap-list-step">
        <h4>PASOS:</h4>
        <ol>
            <li>Licua la leche con el azúcar, el extracto de vainilla y el yoghurt.</li>
            <li>Vierte en moldes para paleta y congélalas por una noche.</li>
            <li>Para servir desmóldalas y pásalas ligeramente sobre la granola. Ofrece.</li>
           
        </ol>
  
  
    </div>
  
  </div>`;
      break;
    default:
      break;
  }

  $('.receta').html(htmlReceta);
}
/*
$('.navbar-toggler').on('click',function(){


   console.log(estado);
    if(estado==0){
    $('.navbar-brand').addClass('hide');
    $('.navbar-nav').removeClass('ml');
     $('.navbar-nav').addClass('m0');
    estado=1;
    }else{
   estado=0;
        $('.navbar-brand').removeClass('hide');
          $('.navbar-nav').removeClass('m0');
        $('.navbar-nav').addClass('ml');

    }
});*/
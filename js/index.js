
$(document).ready(function () {
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

  $('.abchat').on('click',function()
  {
    $('.abrir-chat').slideUp(300);
   
    $('.wrapper-chatbot').removeClass('not-visible');
$('.wrapper-chatbot').addClass('visible');

  });
  $('.close-chat').on('click',function()
{
  
  $('.wrapper-chatbot').removeClass('visible');
$('.wrapper-chatbot').addClass('not-visible');
$('.abrir-chat').slideDown(300);
  });
  //Srcorll smooth
 
$('.ir-arriba').on('click',function(){
  console.log("Arriba");
  $('body, html').animate({
    scrollTop: '0px'
  }, 800);
});

$(window).scroll(function(){
  if( $(this).scrollTop() > 0 ){
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
    var target= e.target.className.split(' ');
    var targetP=e.target.parentNode.className.split(' ');
    if (target[1] === 'tooltip-box') {
      e.target.children[0].style.top = (y + 15) + 'px';
      e.target.children[0].style.left = (x + 15) + 'px';
    }
    if (targetP[1] === 'tooltip-box') {
      e.target.parentNode.children[0].style.top = (y + 15) + 'px';
      e.target.parentNode.children[0].style.left = (x + 15) + 'px';
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
    if( respuesta.innerHTML==""){
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
  $("#send-btn").on("click", function(){
    $value = $("#data").val();
    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');

    // start ajax code
    $.ajax({
        url: '/LaLaja/controllers/message.php',
        type: 'POST',
        data: 'text='+$value,
        success: function(result){
            $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="/LaLaja/images/vaca-chat.png" class="vaca-chat"></img></div><div class="msg-header"><p>'+ result +'</p></div></div>';
            $(".form").append($replay);
            // when chat goes down the scroll bar automatically comes to the bottom
            $(".form").scrollTop($(".form")[0].scrollHeight);
        }
    });
});
  //Enviar mensajes chatbot
});


function mostrarArticulos(orden,where) {
console.log(orden+","+where);
  $.ajax({
    url: '/LaLaja/controllers/ProductoController.php',
    data:{'orden':orden,'where':''+where},
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {

      var template = `<h1>Productos</h1>
      <div class="row-card">
        
      `;

      if (JSON.parse(respuesta) == "-1") {
        template = "<p> Sin datos</p>";
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
                     
                        <h3 class="title"><a href="/LaLaja/paginas/conocer_producto.php?id_p=${producto.idProducto}"   data-toggle="tooltip" data-placement="top" title="VER MAS INFORMACION.">${producto.nombre} ${producto.peso}</a></h3>
                        <p class="text">${producto.descripcion}</p>
                        <label for="show-menu-${producto.idProducto}" class="menu-button"><span></span></label>                       
                    </div>
                    <input type="checkbox" id="show-menu-${producto.idProducto}" data-toggle="tooltip" data-placement="top" title="ABRIR MENU DE OPCIONES"/>
                    <ul class="menu-content">
                        <li><a href="/LaLaja/paginas/mockupcompra.php?id_p=${producto.idProducto}" class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="top" title="COMPRAR"></a></li>
                        <li><a onClick="javascript:darLike(${producto.idProducto})" class="fa fa-heart-o" data-toggle="tooltip" data-placement="top" title="DAR LIKE"><span id="sp-${producto.idProducto}">${producto.numLikes}</span></a></li>
                        <li><a onClick="javascript:verComentarios(${producto.idProducto})" class="fa fa-comment-o" data-toggle="tooltip" data-placement="top" title="VER COMENTARIOS"><span>${producto.totalComentarios}</span></a></li>
                        <div class="divcomentarios" id="comentario${producto.idProducto}"></div>
                    </ul>
                   
                </div>
                
            </div> 
           
        </div>`;
        });
        template += `</div>`;
        $('#row-card-prod').html(template);

      }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log("Error CTNPN: " + errorThrown + textStatus + XMLHttpRequest);

    }
  });
}

function darLike(idProducto) {
  $.ajax({
    url: `/LaLaja/controllers/ProductodarLike.php?idProducto=${idProducto}`,
    data: { 'idProducto': idProducto },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {

      mostrarArticulos();

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

        var template ="";
        var comentarios = "";
        var comentarios = JSON.parse(respuesta);
        console.log(comentarios);

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
        mostrarArticulos();
      } else {
        alert("No se pudo agregar el dato");
      }
    }
  });



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
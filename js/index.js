
$(document).ready(function () {
  const productos=[
    {nombre:'Queso Oaxaca 1 KG' ,id:1,img:'img-1'},
    {nombre:'Yogurt 4 KG' ,id:2,img:'img-2'},
    {nombre:'Queso Panela 1.6 KG' ,id:3,img:'img-3'}
  ]
  $('ul li').on('click', function () {
    $('li').removeClass('active');
    $(this).addClass('active');
  }); 
  $('.media').on('click', function () {
    $(this).removeClass('show');
   // $(this).addClass('hide');
    $('.back').removeClass('hide');
    $('.back').addClass('show');
  }); 
 
  $('.media').click(function(){
    $(this).toggleClass('flipped');
    });
    $('.back').click(function(){
      $(this).removeClass('show');
      $(this).addClass('hide');
      });
    
  mostrarArticulos();
 const buscador=document.querySelector('#buscador');
 const respuesta=document.querySelector('#respuesta');
 
 const filtrar=()=>{
  respuesta.innerHTML="";
   const text=buscador.value.toLowerCase();
   for(let producto of productos){
     let nombre=producto.nombre.toLocaleLowerCase();
     if(nombre.indexOf(text)!==-1 && text!==""){
       
      respuesta.innerHTML+=`<div class="row align-items-center busc-card">
      <div class="col-sm-6 ">
      <img class="img-bus" src="images/${producto.img}.jpg" style="height:90px;"></img>
      </div>
     
      <div class="col-sm-6 col-bus">
      <a class="icono-busc-a" href="paginas/mockupcompra.php?id_p=${producto.id}">${producto.nombre}</br</a>
      </div>
     
      </div>
      `;
      
     }

   }
 };
 buscador.addEventListener('keyup',filtrar);
});


function mostrarArticulos() {

  $.ajax({
    url: 'controllers/ProductoController.php',
    type: 'post',
    cache: false,
    processData: false,
    contentType: false,
    success: function (respuesta) {
      console.log("respuesta: "+respuesta);
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
                     
                        <h3 class="title"><a href="paginas/conocer_producto.php?id_p=${producto.idProducto}">${producto.nombre} ${producto.peso}</a></h3>
                        <p class="text">${producto.descripcion}</p>
                        <label for="show-menu-${producto.idProducto}" class="menu-button"><span></span></label>

                       
                    </div>
                    <input type="checkbox" id="show-menu-${producto.idProducto}" />
                    <ul class="menu-content">
                        <li>
                            <a href="paginas/mockupcompra.php?id_p=${producto.idProducto}" class="fa fa-shopping-cart"></a>
                        </li>
                        <li><a onClick="javascript:darLike(${producto.idProducto})" class="fa fa-heart-o"><span>${producto.numLikes}</span></a></li>
                        <li><a onClick="javascript:verComentarios(${producto.idProducto})" class="fa fa-comment-o"><span>${producto.totalComentarios}</span></a></li>
                    </ul>
                </div>
                
            </div> 
            <div class="divcomentarios" id="comentario${producto.idProducto}">
                
                        
                        
                 
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
    url: `controllers/ProductodarLike.php?idProducto=${idProducto}`,
    data: { 'idProducto': idProducto },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {
      $('#row-card-prod').html("");
      mostrarArticulos();

    }
  });
}

function verComentarios(idProducto) {
  
  var html=$('#comentario'+idProducto).html();
  if(html==""){
  $.ajax({
    url: `controllers/ProductoVerComentarios.php`,
    data: { 'idProducto': idProducto },
    method: 'POST',
    datatype: 'json',
    success: function (respuesta) {
     console.log("Hola mundo"+respuesta);
      var template="";
      var comentarios=JSON.parse(respuesta);
      comentarios.forEach(comentario => {
        template+=`
     
        <div class="row media">
        
        <div class="col media_body">
            <p class="t-e nombre">${comentario.nombre} <span class="t-e">
                    ${comentario.fecha}</span> </p>
            <p class="t-e comentario">${comentario.contenido}</p>
         
        </div>
    </div>
       <hr class="hr-style">
    
        `;
      });//${comentario.idComentario}
      template+=`
 
      <div class="row">
      <div class="col">
         
        <div   class="form_comentarios d-flex justify-content-center">
        
              <input class="form-control" type="text" name="cvEntrega" id="nombre${idProducto}" placeholder="Nombre" value="">
             <br>
              <textarea class="form-control contenido" name="contenido" id="contenido${idProducto}"  placeholder="Comentario" required></textarea>
              <button   class="button-53" role="button" onClick="javascript:insertarComentarios(${idProducto})" ><i class="fa fa-comments" aria-hidden="true"></i> Comentar</button>
         </div> 
        
      </div>
  </div>`;
      $('#comentario'+idProducto).html(template);
 

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log("Error CTNPN: " + errorThrown + textStatus + XMLHttpRequest);

    }
  });
  }else{
    $('#comentario'+idProducto).html("");
  }

 
}
function insertarComentarios(idProducto) {
  var contenido=document.getElementById('contenido'+idProducto).value;
  var nombre=document.getElementById('nombre'+idProducto).value;
console.log(nombre);

  $.ajax({
      url: `controllers/ProductoInsertarComentarios.php`,
      data:{'idProducto':idProducto,'contenido':contenido,'nombre':nombre},
      method: 'POST',
    datatype: 'json',
      success: function(respuesta) {
        if (JSON.parse(respuesta)){
          $('#comentario'+idProducto).html("");
           verComentarios(idProducto);
          }else{
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
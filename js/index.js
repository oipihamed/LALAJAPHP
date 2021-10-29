
$(document).ready(function () {
  $('ul li').on('click', function() {
    $('li').removeClass('active');
    $(this).addClass('active');
  });
  mostrarArticulos();
  
});


function mostrarArticulos(){
  console.log('Antes de ajax');
  $.ajax({
    url: 'controllers/ProductoController.php',
    type: 'post',
    cache:false,
    processData:false,
    contentType:false,
    success: function(respuesta) {
      var template=`<h1>Productos</h1>
      <div class="row-card">
        
      `;
         
        if(JSON.parse(respuesta)=="-1"){
          template="<p> Sin datos</p>";
        }else{
          var productos =JSON.parse(respuesta);
          var numCom=0;
          productos.forEach(producto => {
            template+=`<div class="example-1 card">
            <div class="wrapper ${producto.imagen}">
                <div class="date">
                    <span class="day">${producto.descuento*100}%</span>
                    <span class="month">DESC</span>
                    <span class="year"><strike>$${producto.precio}</strike></span>
                    <span class="day"><b>$${producto.precio-producto.descuento*100}</b></span>
                </div>
                <div class="data">
                    <div class="content">
                     
                        <h1 class="title"><a href="./paginas/mockupconocer.html">${producto.nombre} ${producto.peso}</a></h1>
                        <p class="text">${producto.descripcion}</p>
                        <label for="show-menu-${producto.idProducto}" class="menu-button"><span></span></label>
                    </div>
                    <input type="checkbox" id="show-menu-${producto.idProducto}" />
                    <ul class="menu-content">
                        <li>
                            <a href="./paginas/mockupcompra.html" class="fa fa-shopping-cart"></a>
                        </li>
                        <li><a onClick="javascript:darLike(${producto.idProducto})" class="fa fa-heart-o"><span>${producto.numLikes}</span></a></li>
                        <li><a onClick="javascript:verComentarrios(${producto.idProducto})" class="fa fa-comment-o"><span>${numCom}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>`;
          }); 
          template+=`</div>`;
         $('#row-card-prod').html(template);
        }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log("Error CTNPN: " + errorThrown +textStatus+XMLHttpRequest);
      
    }
});
}

function darLike(idProducto){
  $.ajax({
    url: 'controllers/ProductodarLike.php',
    data: { 'idProducto':idProducto},
    type: 'post',
    datatype: 'json',
    success: function(respuesta) {
         $('#row-card-prod').html("");
          mostrarArticulos();
                 
    }
});
}

function verComentarrios(idArticulo){
  alert(idArticulo);
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
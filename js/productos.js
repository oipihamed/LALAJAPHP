$(document).ready(function () {

	mostrarArticulos('ORDER BY numLikes desc','');
    //generarCarrousel('ORDER BY numLikes desc LIMIT 4','');

    
});


function mostrarTipo(){
    var tipo="";
    var orden="ORDER BY ";
    var buscar="";
    var where="";
    tipo= document.getElementById('selTipo').value;
    orden+=document.getElementById('selOrden').value+" "+document.getElementById('selAsc').value;
    buscar=document.getElementById('txtBuscar').value;
    if(buscar!=="" || tipo!==""){
    where+="WHERE";
    if(buscar!==""){
        where+=" nombre LIKE '%"+buscar+"%'";
        if(tipo!==""){
            where+=" AND tipo="+tipo;
        }
      }else{
        where+=" tipo="+tipo;
      }
   }
  
   if(orden!==""){
    mostrarArticulos(orden,where);
    $('body, html').animate({
        scrollTop: '100px'
      }, 1000);
      
}

}
$(window).scroll(function(){
    if( $(this).scrollTop() < 80 ){
      $('.col-12-p').slideDown(300);
      
    } else {
      $('.col-12-p').slideUp(300);
      
    }
  });

  
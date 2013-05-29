function validaForm(){
        //PARA cantidad producto
        var valor = document.getElementById('cantidadProducto');
        var valor2 = document.getElementById('contenedorCantidadProducto');
        var form = document.getElementById('registrar');
        var band=0;
        if(document.getElementById('errorCantidadProducto')){
                var div_error = document.getElementById('errorCantidadProducto');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorCantidadProducto')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorCantidadProducto');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
       else if (!/^(\d)+$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorCantidadProducto');
                    //creo el texto
                    var msg = document.createTextNode('Solo numeros');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Cantidad real
        valor = document.getElementById('cantidadReal');
        valor2 = document.getElementById('contenedorCantidadReal');
        if(document.getElementById('errorCantidadReal')){
                var div_error = document.getElementById('errorCantidadReal');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorCantidadReal')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorCantidadReal');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^(\d)+$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorCantidadReal');
                    //creo el texto
                    var msg = document.createTextNode('Solo numeros');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Esperada
        valor = document.getElementById('cantidadEsperada');
        valor2 = document.getElementById('contenedorCantidadEsperada');
        if(document.getElementById('errorCantidadEsperada')){
                var div_error = document.getElementById('errorCantidadEsperada');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorCantidadEsperada')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorCantidadEsperada');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^(\d)+$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorCantidadEsperada');
                    //creo el texto
                    var msg = document.createTextNode('Solo numeros');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Fecha
        valor = document.getElementById('fecha');
        valor2 = document.getElementById('contenedorFecha');
        if(document.getElementById('errorFecha')){
                var div_error = document.getElementById('errorFecha');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorExistencia')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorFecha');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^(\d){4}-(\d){2}-(\d){2}$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorFecha');
                    //creo el texto
                    var msg = document.createTextNode('formato: YYYY-MM-DD');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Descripcion
        valor = document.getElementById('descripcion');
        valor2 = document.getElementById('contenedorDescripcion');
        if(document.getElementById('errorDescripcion')){
                var div_error = document.getElementById('errorDescripcion');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == "" || !/^(\s){1,}$/){
                if ( !document.getElementById('errorDescripcion')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorDescripcion');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        if( band == 1 )
            return false;
        return true;
}

function envia() {
    if ( validaForm() ) {
       document.forms["registrar"].submit();
       
    }
}
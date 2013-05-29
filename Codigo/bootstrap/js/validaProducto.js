function validaForm(){
        //PARA NOMBRE
        var valor = document.getElementById('nombre');
        var valor2 = document.getElementById('contenedorNombre');
        var form = document.getElementById('registrar');
        var band=0;
         
        if(document.getElementById('errorNombre')){
                var div_error = document.getElementById('errorNombre');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorNombre')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorNombre');
                    //creo el texto
                    var msg = document.createTextNode('No puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    
                    //return false;
                    band=1;
                }	
        }
        else if (!/^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span3');
                    div.setAttribute('id','errorNombre');
                    //creo el texto
                    var msg = document.createTextNode('Solo letras');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        
        //para Precio
        valor = document.getElementById('precio');
        valor2 = document.getElementById('contenedorPrecio');
        if(document.getElementById('errorPrecio')){
                var div_error = document.getElementById('errorPrecio');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorPrecio')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorPrecio');
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
        else if (!/^(\d)+(\.(\d){2})?$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span4');
                    div.setAttribute('id','errorPrecio');
                    //creo el texto
                    var msg = document.createTextNode('formato: 15 , 15.00');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Existencia
        valor = document.getElementById('existencia');
        valor2 = document.getElementById('contenedorExistencia');
        if(document.getElementById('errorExistencia')){
                var div_error = document.getElementById('errorExistencia');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorExistencia')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorExistencia');
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
                    div.setAttribute('id','errorExistencia');
                    //creo el texto
                    var msg = document.createTextNode('Solo numeros');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Imagen
        valor = document.getElementById('imagen');
        valor2 = document.getElementById('contenedorImagen');
        if(document.getElementById('errorImagen')){
                var div_error = document.getElementById('errorImagen');
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorImagen')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorImagen');
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
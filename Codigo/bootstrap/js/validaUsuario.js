function validaForm(){
        //PARA NOMBRE
        var valor = document.getElementById('nombre');
        var valor2 = document.getElementById('contenedorNombre');
        var form = document.getElementById('registrar');
        var band=0;
         
        if(document.getElementById('errorNombre')){
                var div_error = document.getElementById('errorNombre');
                //alert(div_error);
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
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
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
        
        //para E-mail
        valor = document.getElementById('mail');
        valor2 = document.getElementById('contenedorMail');
        if(document.getElementById('errorMail')){
        
                var div_error = document.getElementById('errorMail');
                //alert(div_error);
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorMail')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorMail');
                    //creo el texto
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^(_|-)?([a-zA-Z]|\d)(\w|-|(\.(\w|-)))*@([a-zA-Z]|\d)+(-([a-zA-Z]|\d))*\.([a-zA-Z]|\d)([a-zA-Z]|\d|-)*$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span4');
                    div.setAttribute('id','errorMail');
                    //creo el texto
                    var msg = document.createTextNode('formato: ejemplo@dominio.com');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Pass
        valor = document.getElementById('pass');
        valor2 = document.getElementById('contenedorPass');
        if(document.getElementById('errorPass')){
        
                var div_error = document.getElementById('errorPass');
                //alert(div_error);
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorPass')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorPass');
                    //creo el texto
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^([a-zA-Z]|\d){6,}$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorPass');
                    //creo el texto
                    var msg = document.createTextNode('Solo letras y numeros(Minimo de 6)');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //para Direccion
        valor = document.getElementById('direccion');
        valor2 = document.getElementById('contenedorDireccion');
        if(document.getElementById('errorDireccion')){
        
                var div_error = document.getElementById('errorDireccion');
                //alert(div_error);
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorDireccion')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorDireccion');
                    //creo el texto
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span3');
                    div.setAttribute('id','errorDireccion');
                    //creo el texto
                    var msg = document.createTextNode('Ejemplo: Calle #0');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        } 
        //para RFC
        valor = document.getElementById('rfc');
        valor2 = document.getElementById('contenedorRfc');
        if(document.getElementById('errorRfc')){
        
                var div_error = document.getElementById('errorRfc');
                //alert(div_error);
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorRfc')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorRfc');
                    //creo el texto
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^([a-zA-Z]|\d){13}$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorRfc');
                    //creo el texto
                    var msg = document.createTextNode('Solo letras y numeros(Exactamente 13)');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        } 
        //para Telefono
        valor = document.getElementById('telefono');
        valor2 = document.getElementById('contenedorTelefono');
        if(document.getElementById('errorTelefono')){
        
                var div_error = document.getElementById('errorTelefono');
                //alert(div_error);
                if( typeof(div_error) == 'object' )
                        valor2.parentNode.removeChild(div_error);
        }
        if( valor.value == null || valor.value.length == ""){
                if ( !document.getElementById('errorTelefono')) {
                    //alert('AQUI!');
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-error span4');
                    div.setAttribute('id','errorTelefono');
                    //creo el texto
                    var msg = document.createTextNode('Este Campo no puede estar vacio');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
                    //return false;			
                }	
        }
        else if (!/^(\d){10}$/.test(valor.value)) {
                    var div = document.createElement('div');
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorTelefono');
                    //creo el texto
                    var msg = document.createTextNode('Solo se permite numeros(deben ser 10)');
                    //al div le agrefo el mensaje
                    div.appendChild(msg);
                    //valor.parentNode.insertBefore( div, valor.nextSibling );					    
                    valor2.parentNode.appendChild(div);
                    band=1;
        }
        //alert(band);
        if( band == 1 )
            return false;
        return true;
}

function envia() {
    if ( validaForm() ) {
       document.forms["registrar"].submit();
       
    }
}
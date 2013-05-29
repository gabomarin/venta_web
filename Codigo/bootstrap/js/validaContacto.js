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
                    var msg = document.createTextNode('No puede estar vacio');
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
                    div.setAttribute('class','mensaje alert alert-sintaxis  span5');
                    div.setAttribute('id','errorMail');
                    //creo el texto
                    var msg = document.createTextNode('formato: ejemplo@dominio.com');
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
function validaForm(){
        //PARA NOMBRE
        var valor = document.getElementById('mail');
        var valor2 = document.getElementById('contenedorMail');
        var form = document.getElementById('registrar');
        var band=0;

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
                    div.setAttribute('class','mensaje alert alert-sintaxis span6');
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
                    var msg = document.createTextNode('No puede estar vacio');
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
                    div.setAttribute('class','mensaje alert alert-sintaxis span6');
                    div.setAttribute('id','errorPass');
                    //creo el texto
                    var msg = document.createTextNode('Solo letras y numeros(Minimo de 6)');
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
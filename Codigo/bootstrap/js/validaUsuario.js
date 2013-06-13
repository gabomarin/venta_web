function validaForm(){
        
        //PARA NOMBRE
        var valor = document.getElementById('nombre');
        var valor2 = document.getElementById('errorNombre');
        var valor3 = document.getElementById('errorNombre2');
        var form = document.getElementById('registrar');
        var band=0;
        //alert("antes"); 
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        else if (!/^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$/.test(valor.value)) {
                
                    valor3.style.display='block';
                    band=1;
        }
        
        //para E-mail
        valor = document.getElementById('mail');
        valor2 = document.getElementById('errorMail');
        valor3 = document.getElementById('errorMail2');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        else if (!/^(_|-)?([a-zA-Z]|\d)(\w|-|(\.(\w|-)))*@([a-zA-Z]|\d)+(-([a-zA-Z]|\d))*\.([a-zA-Z]|\d)([a-zA-Z]|\d|-)*$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        }
        //para Pass
        valor = document.getElementById('pass');
        valor2 = document.getElementById('errorPass');
        valor3 = document.getElementById('errorPass2');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';

                    band=1;
                }	
        }
        else if (!/^([a-zA-Z]|\d){6,}$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        }
        //para Direccion
        valor = document.getElementById('direccion');
        valor2 = document.getElementById('errorDireccion');
        valor3 = document.getElementById('errorDireccion2');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        else if (!/^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        } 
        //para RFC
        valor = document.getElementById('rfc');
        valor2 = document.getElementById('errorRfc');
        valor3 = document.getElementById('errorRfc2');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        else if (!/^[a-zA-Z]{4}(\d){2}((0[1-9])|(1[1-2]))(([1-2]\d)|(3[0-1]))([a-zA-Z]|\d){3}$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        } 
        //para Telefono
        valor = document.getElementById('telefono');
        valor2 = document.getElementById('errorTelefono');
        valor3 = document.getElementById('errorTelefono2');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       if(valor3.style.display == 'block' ){
                valor3.style.display='none'
                
        }
       
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        else if (!/^(\d){10}$/.test(valor.value)) {
                    valor3.style.display='block';
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
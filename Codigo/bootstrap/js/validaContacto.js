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
        //para Descripcion
        valor = document.getElementById('descripcion');
        valor2 = document.getElementById('errorDescripcion');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
       valor.value=jQuery.trim(valor.value);
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
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

function validaForm(){
        
        //para Direccion
        var valor = document.getElementById('direccion');
        var valor2 = document.getElementById('errorDireccion');
        var valor3 = document.getElementById('errorDireccion2');
        var form = document.getElementById('registrar');
        var band=0;
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
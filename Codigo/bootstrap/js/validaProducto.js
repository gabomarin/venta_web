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
        
        //para Precio
        valor = document.getElementById('precio');
        valor2 = document.getElementById('errorPrecio');
        valor3 = document.getElementById('errorPrecio2');
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
        else if (!/^(\d)+(\.(\d){2})?$/.test(valor.value)) {
                valor3.style.display='block';
                band=1;
        }
        //para Existencia
        valor = document.getElementById('existencia');
        valor2 = document.getElementById('errorExistencia');
        valor3 = document.getElementById('errorExistencia2');
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
        else if (!/^(\d)+$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        }
        //para Imagen
        valor = document.getElementById('imagen');
        valor2 = document.getElementById('errorImagen');
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }
        if( valor.value == null || valor.value.length == ""){
                if ( valor2.style.display != 'block' ) {
                        valor2.style.display='block';
                    band=1;
                }	
        }
        //para Descripcion
        valor = document.getElementById('descripcion');
        valor2 = document.getElementById('errorDescripcion');
        valor.value=jQuery.trim(valor.value);
        if(valor2.style.display == 'block' ){
                valor2.style.display='none';
                
        }

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
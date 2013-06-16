function validaForm(){
        //PARA cantidad producto
        var valor = document.getElementById('cantidadProducto');
        var valor2 = document.getElementById('errorCantidadProducto');
        var valor3 = document.getElementById('errorCantidadProducto2');
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
       else if (!/^(\d)+$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        }
        //para Cantidad real
        valor = document.getElementById('cantidadReal');
        valor2 = document.getElementById('errorCantidadReal');
        valor3 = document.getElementById('errorCantidadReal2');
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
        //para Esperada
        valor = document.getElementById('cantidadEsperada');
        valor2 = document.getElementById('errorCantidadEsperada');
        valor3 = document.getElementById('errorCantidadEsperada2');
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
        //para Fecha
        valor = document.getElementById('fecha');
        valor2 = document.getElementById('errorFecha');
        valor3 = document.getElementById('errorFecha2');
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
        else if (!/^(\d){4}-(\d){2}-(\d){2}$/.test(valor.value)) {
                    valor3.style.display='block';
                    band=1;
        }
        //para Descripcion
        valor = document.getElementById('descripcion');
        valor2 = document.getElementById('errorDescripcion');
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
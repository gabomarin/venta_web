function validaForm(){
        var valor = document.getElementById('passAnterior');
        var valor2 = document.getElementById('errorPassAnterior');
        var valor3 = document.getElementById('errorPassAnterior2');
        var form = document.getElementById('registrar');
        var band=0;
        //para Pass
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
        
        //para Pass
        valor = document.getElementById('passNuevo');
        var valor2 = document.getElementById('errorPassNuevo');
        var valor3 = document.getElementById('errorPassNuevo2');
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
        
        
        if( band == 1 )
            return false;
        return true;
}
function checa() {
        var pass1 = document.getElementById('passAnterior');
        var pass2 = document.getElementById('passNuevo');

        
        /*if ( pass1.value == ) {
                alert("wooo");
                return true;
        }*/
        
        return true;
}
function envia() {
    if ( validaForm() && checa() ) {
       document.forms["registrar"].submit();
       
    }
}
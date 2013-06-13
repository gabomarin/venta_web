<style type="text/css">
.imagen{
    padding: .5em .5em .5em .5em;
    border: solid 1px #29273f;
    min-height: 130px;
    min-width: 130px;
    display: inline-block;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 5px 5px 5px black;
    -webkit-box-shadow: 5px 5px 5px black;
    box-shadow: 2px 2px 5px black inset;
    box-shadow: -9px -9px 39px  8px black inset;
}

.compra{
    background-color: rgba(44, 40, 96, 0.3);
    color: #ffffff;
    display: inline-block;
    word-wrap: break-word;
    word-spacing: 2px;
    letter-spacing: 1px;
    border-radius: 5px;
    border: solid 1px black;
    padding: 8px;
    margin-left: 5px;
    background: #4c4c4c; /* Old browsers */
    background: rgb(69,72,77); /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQ1NDg0ZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,  rgba(69,72,77,1) 0%, rgba(0,0,0,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(69,72,77,1)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-8 */

    
}

.select
{
    margin-top: .8em;
}

    
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>





<div class="well span7">
    

 
 <div class="simpleCart_shelfItem">
    <h2 class="item_name"> {$producto_nombre} </h2>
    <hr>
        
    <div>   
    <div class="imagen pull-left"><img src="{$producto_imagen}" >
    
    </div>
    {$producto_descripcion}
    </div>
        

    <br>

   <div class="compra span3">
    <p> <span class="item_price">Precio: ${$producto_precio}</span><br><br>
    


<!--<script>
    function displayVals() {
      var singleValues = $("#cantidad").val();
     

      return singleValues;
    }
 
    $("select").change(displayVals);
    displayVals();
 
    </script>
        <a onclick="simpleCart.empty()">dad</a>-->
        <!--<a class="item_add" href="javascript:;"><button class="btn btn-primary">Añadir</button></a>-->
        
        <a class="btn btn-primary" onclick="simpleCart.add({ name: '{$producto_nombre}' , price: '{$producto_precio}',  thumb:'{$producto_imagen}' ,id_prod: '{$producto_id}'});">Añadir</a>
        </div>
    <!--<a class="btn btn-primary" href="#" onclick="simpleCart.add('name={$producto_nombre}','price={$producto_precio}','image={$producto_imagen}');return false;"> Añadir</a>
        -->
    </p>
    </div>
    
    
    
</div>

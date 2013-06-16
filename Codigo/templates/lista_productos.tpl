<div class="well span7" >
    <legend><h1>{$lista}</h1></legend>
   {foreach item=producto from=$productos}
   {counter}o
   <div class ="span12">
    
   </div>
    <div class="span2">
        <a href="index.php?modulo=producto&action=consultarDato&dato={$producto.id}&atributo=id class='name'">
            <img src="{$producto.imagen}" width="120px" height="120px" /></a>
        <br>
            <span>$ {$producto.precio}</span>
        <a href="index.php?modulo=producto&action=consultarDato&dato={$producto.id}&atributo=id">Ver</a>   
    </div>
    {/foreach}
    
</div>
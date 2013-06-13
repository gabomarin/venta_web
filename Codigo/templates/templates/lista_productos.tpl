<div class="well span7" >
    <legend><h1>{$lista}</h1></legend>
   {foreach item=producto from=$productos}
    <div class="span2">
        <a href="index.php?modulo=producto&action=consultarDato&dato={$producto.id}&atributo=id class='name'">
            <img src="{$producto.imagen}" alt='' width='124' height='097' /></a>
        <br>
            <span>$ {$producto.precio}</span>
        <a href="index.php?modulo=producto&action=consultarDato&dato={$producto.id}&atributo=id">Ver</a>   
    </div>
    {/foreach}
    
</div>
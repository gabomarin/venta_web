{if $bandera == 1}

<div class="well span7">
    <h2>
        Has realizado tu compra
    </h2>
    
    <p class="hero-unit lead">
        <small>
            Tu compra ha sido realizada con exito, en breve te llegara un  correo con los detalles de tu compra
            y tu numero de orden. Cualquier duda no dudes en ponerte en contacto haciendo click
            <a href="index.php?modulo=estandar&action=contacto"> aqui</a>.
        </small>
    </p>
</div>


{elseif  $bandera==0}
<div class="well span7">
    <h2>
        Error al realizar la compra
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Lo sentimos, sucedió un error al realizar la compra, intenta de nuevo.
        </small>
    </p>
</div>

{elseif  $bandera==3}
<div class="well span7">
    <h2>
        Carro de compras Vacio
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Tu carro de compras esta vacion, favor de agregar productos.
        </small>
    </p>
</div>

{else}
<div class="well span7">
    <h2>
        No has iniciado sesion
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Por favor inicia sesion para poder realizar tu compra.
        </small>
</div>
    

{/if}

<div class="col s5">
    <nav class = "center-align cyan accent-4">Opciones</nav>
<div class="collection">
    {if $nav='Administrador'}
        <a href="?controller=Direcciones&method=Productos" class="collection-item">Registrar Productos</a>
        <a href="?controller=Direcciones&method=Inventario" class="collection-item"> Ver  Inventario</a>
        <a href="?controller=Direcciones&method=Categorías" class="collection-item">Nueva Categorias</a>
        <a href="?controller=Home&method=Inicio" class="collection-item">Salir</a>
    {/if}
 </div>   
</div>
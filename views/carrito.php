
<h1 class="text-center text-white " style="background-color:transparent">Carrito de Compras</h1>


<p class="mt-3  text-white">Este es el resumende tu carrito de compras </p>
<table class="table table-bordered mb-5 text-white">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>    
  <?php foreach($productos as $product){?>
    <tr>
    <th ><?php echo  $product['id_producto']; ?></th>
      <th ><?php echo  $product['nombre']; ?></th>
      <th ><?php echo  number_format($product['precio']); ?></th>
      <th ><?php echo  $product['cantidad']; ?></th>
      <th ><?php echo  number_format($product['total']); ?></th>
    </tr>
  <?php } ?>  
  </tbody>
</table>
<div class="my-4 text-right ">
    <a  href="?controlador=index&accion=pagos" type="button" class="btn btn-outline-danger toast-body w-50 ">Ir pagar </a>
</div>



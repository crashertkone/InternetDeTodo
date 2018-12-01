






<form method="POST" action="{{ route('products.store') }}"  role="form">
							{{ csrf_field() }}
							
<div class="container">

  <form action="action_page.php">

  	<label for="fname">id</label>
    <input type="text" name="id" id="id" class="form-control input-sm" placeholder="id">
</div>

  	<div class="form-group">
    <label for="fname">Nombre de producto</label>
    <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
</div>



   <div class="form-group"> 
    <label for="lname">precio de producto</label>
    <input type="text" name="pricing" id="pricing" class="form-control input-sm" placeholder="Precio">
</div>

     <div class="form-group text-right">
		<a href="{{url('/products')}}">Regresar al listado de productos </a> 
		<input type="submit" value="enviar" class="btn btn-success">
	</div>


  </form>
</div>
<form method="POST" action="{{ route('dates.store') }}"  role="form">
							{{ csrf_field() }}
							
<div class="container">

  <form action="action_page.php">

  	<label for="fname">id</label>
    <input type="text" name="id" id="id" class="form-control input-sm" placeholder="id">
</div>

  	<div class="form-group">
    <label for="fname">Dato slot 1</label>
    <input type="text" name="datos" id="datos" class="form-control input-sm" placeholder="dato">
</div>



   <div class="form-group"> 
    <label for="lname">Dato slot 2</label>
    <input type="text" name="dato1" id="dato1" class="form-control input-sm" placeholder="dato">
</div>

     <div class="form-group text-right">
		<a href="{{url('/date')}}">Regresar al listado de productos </a> 
		<input type="submit" value="enviar" class="btn btn-success">
	</div>


  </form>
</div>
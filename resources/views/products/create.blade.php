
<!--Generated from HTML Code Play-->
<!DOCTYPE html> 
<html> 
 
<head> 
 <meta charset="utf-8"> 
 <title>Graficos</title> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" type="text/css" href="http://barcode.htmlcodeplay.com/bootstrap/css/bootstrap.css"> 
 <!-- Optional Bootstrap theme --> 
 <link rel="stylesheet" href="http://barcode.htmlcodeplay.com/bootstrap/css/bootstrap-theme.css"> 
 
</head> 

 
<body> 
 
   


 <nav role="navigation" class="navbar navbar-default"> 
  <!-- Brand and toggle get grouped for better mobile display --> 
  <div class="navbar-header"> 
   <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
   <a href="#" class="navbar-brand"></a> 
  </div> 
  <!-- Collection of nav links and other content for toggling --> 
  <div id="navbarCollapse" class="collapse navbar-collapse"> 
   <ul class="nav navbar-nav"> 
    <li class="active"><a href="{{ url('/principal') }}">Principal</a></li> 
   </ul> 
   <ul class="nav navbar-nav navbar-right"> 
   
   </ul> 
  </div> 
 </nav> 
 
  


<div class="container">


<form method="POST" action="{{ route('products.store') }}"  role="form">
							{{ csrf_field() }}
							
<div class="container">

  <form class="form-horizontal">
  
  	<div class="form-group form-group-lg">  
    <label for="fname">Nombre de producto</label>
    <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
</div>


<div class="form-group form-group-lg">  
    <label for="lname">precio de producto</label>
    <input type="text" name="pricing" id="pricing" class="form-control input-sm" placeholder="Precio">
</div>

    <div class="form-group form-group-lg"> 

      <label for="fname">Ranura</label>
      <select name="slot" id="slot" class="form-control">
        
         <option value="1">Slot 1</option>
          <option value="2" selected='selected'>Slot 2</option>
      </select>
</div>


<div class="form-group text-right">
    <a href="{{url('/products')}}">Regresar al listado de productos </a> 
    <input type="submit" value="enviar" class="btn btn-success">
  </div>

</form>
</div>
</div>
</form>
</div>





 



     

 


 


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
 <script src="http://barcode.htmlcodeplay.com/bootstrap/js/bootstrap.min.js"></script> 
</body> 
 
</html>
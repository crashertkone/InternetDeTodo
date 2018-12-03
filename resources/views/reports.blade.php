<!DOCTYPE HTML>
<!--
  Prologue by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Reports </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">

    <!-- Header -->
      <div id="header">

        <div class="top">

          <!-- Logo -->
            <div id="logo">
              <span class="image avatar48"><img src="images/logo.png" alt="" /></span>
              <h1 id="title">FITNESS PANTRY</h1>
              <p></p>
            </div>

              <nav id="nav">
              <ul>
                <li><a href="{{ url('/principal') }}" id="top-link"><span class="icon fa-home">Principal</span></a></li>
                <li><a href="{{ url('/products') }}" id="portfolio-link"><span class="icon fa-th">Productos</span></a></li>
                <li><a href="{{ url('/reports') }}" id="portfolio-link"><span class="icon fa-th">Reportes</span></a></li>
                <li><a href="{{ url('/grapro') }}" id="portfolio-link"><span class="icon fa-th">Graficas Productos</span></a></li>
                <li><a href="{{ url('/grarepo') }}" id="portfolio-link"><span class="icon fa-th">Graficas Sensores</span></a></li>
                <li><a href="{{ url('/pictures') }}" id="about-link"><span class="icon fa-user">Reconocimiento</span></a></li>
                <li><a href="#{{ url('/pictures') }}" id="contact-link"><span class="icon fa-envelope">Contact</span></a></li>
              </ul>
            </nav>

        </div>

        <div class="bottom">

          <!-- Social Icons -->
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
              <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
              <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>

        </div>

      </div>

    <!-- Main -->
      <div id="main">

        <!-- Intro -->
          <section id="top" class="">
            <div class="container">

            
       
 <h2>Reporte de slots</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">     
              <thead>       
                <tr>
          <td>#</td>   
          <td>slot 1</td>   
          <td>slot 2</td>   
          <td>time</td>
        
      </tr>
     
        
      </tr>
    </thead>
    <tbody>
    @foreach ($dates as $date)
    <tr>
      <td>{{ $date->id }}</td>
      <td>{{ $date->datos }}</td>
      <td>{{ $date->dato1 }}</td>
      <td>{{ $date->created_at }}</td>


      
          </tr>
    @endforeach

              </tbody>
            </table>
          </div>
        </main>
      </div>
       <a href="{{ route('senreport.pdf') }}" class="btn btn-sm btn-primary">
            Descargar reportes en PDF

    </div>

   
     
    </div>

           



        <!-- Portfolio -->
         

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
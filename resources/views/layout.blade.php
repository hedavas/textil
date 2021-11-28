<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title> HD TEXTILES</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<!--     datatable
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
-->        

<!-- Con idioma
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
-->

<!-- datatable en pdf-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-foundation.min.css">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>

      .fondo {
          background-color: #E74C3C;
      }

      .fondotable {
          background-color: #7F8C8D;
      }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      main > .container {
    padding: 60px 15px 0;
    }

      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<header>

  <!-- Fixed navbar -->
<nav class="fondo navbar navbar-expand-md navbar-dark  mb-4">
  <div class="container-fluid">
    @if (auth()->check())
    <a class="navbar-brand" href="{{('/transaction/')}} ">HD TEXTILES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">--- * ---</a>
          </li>   
         </u> 

         @if (auth()->user()->roll_id === 1)

         <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{('/usuarios/')}} ">USUARIOS</a>
          </li>   
         </u> 

         <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{('/tela/')}} ">TELA</a>
          </li>


          <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{('/Qu/')}} ">CALIDAD</a>
          </li>   
         </ul> 

         <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{('/sucursal/')}} ">SUCURSAL</a>
          </li>   
         </ul> 

         @endif
          
          </ul> 
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="{{('/transaction/')}} ">TRANSACCION</a>
          </li>   
         </ul>    
         
         
         <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item dropdown ">
           <a class="dropdown-toggle nav-link active "  href="#" data-toggle="dropdown">REPORTES</a>

            <ul class="dropdown-menu">
              <li><a class="nav-link active fondo" aria-current="page" href="{{ url('/reporte/inventario') }}">Todo el Inventario </a></li>
              <li><a class="nav-link active fondo" aria-current="page" href="{{ url('/reporte/primeraCalidad') }}">Primera Calidad </a></li>
              <li><a class="nav-link active fondo" aria-current="page" href="{{ url('/reporte/telaDefectuosa') }}">Tela Defectuosa </a></li>
              
            </ul>
          </li>
        </ul>


         <ul class="navbar-nav me-auto mb-6 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>   
         </ul>
         <ul class="navbar-nav me-auto mb-6 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>   
         </ul>

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item dropdown ">
           <a class="dropdown-toggle nav-link active "  href="#" data-toggle="dropdown">
              {{ auth()->user()->name }}
            </a>

            <ul class="dropdown-menu">
              <li><a class="nav-link active fondo" aria-current="page" href="/logout">Cerrar Sesion </a></li>
              <li><a class="nav-link active fondo" aria-current="page" href="/usuarios/{{ auth()->id()}}/editar ">Mi cuenta</a></li>
            </ul>
          </li>
        </ul>

    </div>
    
  
  
    @endif

  @if (auth()->guest())

    <a class="navbar-brand " href="/">HD TEXTILES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-4 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>   
    </div>

  @endif

</nav>
</header>






<div class="container">
@yield('contenido')
</div>



<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">Derechos Reservados By HD TEXTILES @yield('Y')</span>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>

  $(document).ready(function() {
    $('#example').DataTable( {


      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
          
      ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },

        "lengthMenu" : [[5,10, 50, -1], [5, 10, 50, "All"]]

    } );
} );


  $(document).ready(function() {
    $('#example2').DataTable( {


      dom: 'Bfrtip',
      buttons: [
          '', '', '', '', ''
          
      ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },

        "lengthMenu" : [[5,10, 50, -1], [5, 10, 50, "All"]]

    } );
} );

  
</script>

 </body>
</html>




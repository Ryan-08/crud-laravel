<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="/style.css">
    <title>@yield('judul')</title>
  </head>
  <body class="bg-secondary">      

    <h2 class="text-center bg-dark text-white mx-auto m-0 p-5">CRUD IN LARAVEL</h2>                            
    <div class="row mx-auto justify-content-between p-3">
        <div class="col-2">          
          <a class="btn btn-block btn-dark" href="/">HOME</a> 
        </div>               
    </div>      

    <div class="main text-white">       
        @yield('konten')                      
    </div>   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/main.js"></script>    
    
  </body>
</html>
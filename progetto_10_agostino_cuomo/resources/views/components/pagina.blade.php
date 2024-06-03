<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/app.css">
     @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Esercizio 10</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('lista')}}">Lista</a>
              </li>
              <li class="nav-item">
                @auth
                <a class="nav-link active" href="{{route('formInserimento')}}">Form</a>
                
                @else 
              
                <a class="nav-link disable" href="">Devi registrarti prima</a>
                @endauth
              </li>
             
            </ul>
          </div>
  @auth
  <p>Ciao {{Auth::user()->email}}</p> 

  <form action="{{route('logout')}}" method="POST">
    @csrf
  <button class="btn btn-warning float-end">Logout</button>
</form>

  @else
  <a type="button" class="btn btn-warning float-end" href="{{route('login')}}">Login</a>
          <a type="button" class="btn btn-warning-emphasis float-end" href="{{route('register')}}">Registrati</a>
  @endauth


        
        </div>
      </nav>

{{$slot}}


    <script src="resources/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="/js/scripts.js"></script>
    </head>
    <body>
      <header>
        <navbar class="navbar navbar-expand-lg navbar-light">
         <div class="collapse navbar-collapse" id="navbar">
           <a href="/" class="navbar-brand">
             <img src="/img/punho.png" alt="Logo">
           </a>
           <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
            </li>  
            <li class="nav-item">
              <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>  
            <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
            </li>  
           </ul>
         </div>    
        </navbar>
      </header>  
      <div class="container-fluid">
       <div class="row">
        @if(session('msg'))
          <p class="msg">{{ session('msg') }}</p>
        @endif  
        @yield('content')   
       </div> 
      </div>
       <footer>
          <p>HDC Events &copy; 2023</p>
       </footer>
    </body>
</html>
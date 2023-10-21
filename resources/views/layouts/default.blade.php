<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>instaJBort - @yield('titulo')</title>

@vite('resources/css/app.css')

</head>

<body class="bg-gray-100">
  <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-black">
        InstaJBort
      </h1>

      <nav class="fles gap-2 items-center">
        
        @auth  <!-- Si esta autentificado sale este contenido -->
        <a class="font-bold text-gray-600 text-sm pr-4" href="{{route('login')}}">
          Hola:<span class="font-normal">{{auth()->user()->username}}</span>
        </a>
          <!-- Para cerrar sesion creamos un form para hacerlo de manera segura con la directiva csrf -->
        <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar sesion</button>
        </form>
        @endauth

        @guest <!-- Si no esta autentificado se ve este otro contenido -->
        <a class="font-bold uppercase text-gray-600 text-sm pr-4" href="{{route('login')}}">Entrar</a>
        <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Registrar</a>
        @endguest
        

      </nav>

    </div>
  </header>

  <main class="container mx-auto mt-10">
  <h2 class="font-black text-center text-3xl mb-10">
    @yield('titulo')
  </h2>
    @yield('contenido')
  </main>

  <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
    InstaJBort - Todos los derechos reservados &copy; {{now()->year}}
  </footer>
</body>

</html>
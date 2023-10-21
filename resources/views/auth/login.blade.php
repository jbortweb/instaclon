@extends("layouts.default")

@section('titulo')
Ingresa en instaBort
@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:items-center">

  <div class="md:w-6/12 p-6">
    <img src="{{asset('img/login.jpg')}}" alt="Imagen acceso usuarios">
  </div>

  <div class="md:w-4/12 p-6 bg-white rounded-lg shadow-xl">

    <form action="{{route('login')}}" method="POST" novalidate>
      @csrf
      
      @if(session('mensaje'))
        <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{session('mensaje')}}</p>
      @endif
      <div class="mb-5">
        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
          Email
        </label>
        <input
          id="email"
          name="email"
          type="email"
          placeholder="Tu Email"
          class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
          value="{{old('email')}}"
        >
      </div>
        @error('email')
        <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror
      <div class="mb-5">
        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
          Password
        </label>
        <input
          id="password"
          name="password"
          type="password"
          placeholder="Tu password"
          class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"        
        >
      </div>
        @error('password')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror

        <div>
          <input type="checkbox" name="remember">
          <label class="text-sm text-gray-500 ">Mantener mi sesion abierta</label>
        </div>
      <input
        type="submit"
        value="Acceso cuenta"
        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5"
        >
    </form>
  </div>

</div>


@endsection
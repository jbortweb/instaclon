@extends("layouts.default")

@section('titulo')
Registrate en instaBort
@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:items-center">

  <div class="md:w-6/12 p-6">
    <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuarios">
  </div>

  <div class="md:w-4/12 p-6 bg-white rounded-lg shadow-xl">

    <form action="{{route('register')}}" method="POST" novalidate>
      @csrf
      <div class="mb-5">
        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
          Nombre
        </label>
        <input
          id="name"
          name="name"
          type="text"
          placeholder="Tu nombre"
          class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
          value="{{old('name')}}"
        >
        @error('name')
        <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
          Nombre usuario
        </label>
        <input
          id="username"
          name="username"
          type="text"
          placeholder="Tu nombre de usuario"
          class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
          value="{{old('username')}}"
        >
      </div>
      @error('username')
        <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror
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
      <div class="mb-5">
        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
          Repetir password
        </label>
        <input
          id="password_confirmation"
          name="password_confirmation"
          type="password"
          placeholder="Repite tu password"
          class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
        >
      </div>
        @error('password')
            <p class="bg-red-500 text-white rounded-lg my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror
      <input
        type="submit"
        value="Crear cuenta"
        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
        >
    </form>
  </div>

</div>


@endsection
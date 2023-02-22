@extends('layouts.app')

@section('title','Verificar')

@section('content')
<h1 class="text-5xl text-center pt-24">pagina de verificacion</h1>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-300 
rounded-lg shadow-lg">
<h1 class="text-3xl text-center font-bold">Inicio</h1>

<form action="" class="mt-4" method="POST">
@csrf

  <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full
  text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="codigo" id="codigo" 
  name="codigo"">

  <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
  text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>

</form>
</div>


@endsection
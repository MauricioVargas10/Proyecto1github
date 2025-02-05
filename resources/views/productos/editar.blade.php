@extends('layout.plantilla')

@section('titulo', 'editar')

@section('contenido')

<header>
<div class=" mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<hi Class= "text-3xl font-bold tracking-tight text-gray-900" >Editar un registro</h1>
</div>
</header>


<!-- component -->
<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
		<div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
			<div class='max-w-md mx-auto space-y-6'>

				<form action="{{route('producto.update', $producto)}}" method="POST">
                @csrf
                @method('put')

					<h2 class="text-2xl font-bold ">Actualizar del producto{{$producto->id}}</h2>
					<p class="my-4 opacity-70">Modifique los datos que necesite</p>
					<hr class="my-6">
					<label class="uppercase text-sm font-bold opacity-70">Nombre</label>
					<input type="text" name="nombre" value="{{$producto->nombre}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
					<label class="uppercase text-sm font-bold opacity-70">Precio</label>
					<input type="text" name="precio" value="{{$producto->precio}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Descripsion</label>
					<input type="text" name="descripsion" value="{{$producto->descripsion}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Categoria</label>
					<input type="text" name="categoria" value="{{$producto->categoria}}" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
					<label class="uppercase text-sm font-bold opacity-70">Categoria_tabla</label>
					<select class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
						<option value="">Javascript</option>
						<option value="">Ruby</option>
						<option value="">Python</option>
						<option value="">PHP</option>
						<option value="">Java</option>
					</select>
					<input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Guardar cambios">
				</form>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded"><a href="{{route('producto.principal')}}">Cancelar</a></button>
			</div>
		</div>
	</div>


@endsection
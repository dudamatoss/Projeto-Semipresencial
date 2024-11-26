@extends('layouts.base')

@section('content')
@can('create', App\Models\Pokemon::class)
    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{ url('pokemon/create' )}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Pokemon</a>
        </div>
    </div>
@endcan

<div class="flex flex-wrap gap-20 justify-center mt-10">
@foreach($pokemon as $entity)

<center>

    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-4">
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                src="{{ asset($entity->image) }}" alt="{{$entity->name}}" />
            <h5 class="mb-1 text-xl font-medium text-gray-900">{{$entity->name}}</h5>
            <span class="text-sm text-gray-500">{{$entity->type}}</span>
            <span class="text-sm text-gray-500">{{$entity->power}}</span>
            @if(isset($entity->coach))
                    <span class="text-sm text-gray-500">{{ $entity->coach->name }}</span>
                @else
                    <span class="text-sm text-gray-500">Sem treinador</span>
                @endif
            <div class="flex mt-4 md:mt-6">
                <a href="{{ url('pokemon/' . $entity->id . '/edit') }}"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-dark border-pink-500 bg-pink-300 p-2 rounded-lg border-2 ">Editar</a>
                <form action="{{ url('pokemon/' . $entity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Remover</button>
                </form>
            </div>
        </div>
    </div>
</center>
@endforeach
</div>
@endsection
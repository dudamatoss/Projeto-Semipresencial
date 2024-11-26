@extends('layouts.base')

@section('content')
<center>
<form class=" max-w-sm mx-auto" action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" value="{{$pokemon->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
            <input type="text" name="type" id="type" value="{{$pokemon->type}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="power" class="block mb-2 text-sm font-medium text-gray-900">Power</label>
            <input type="text" name="power" id="power" value="{{$pokemon->power}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div>
        <img src="{{asset($pokemon->image)}}" alt="">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image:</label>
        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-5">
            <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900">Coach</label>
            <select name="coach_id" id="coach_id" required>
                <option value="">Select a coach</option>
                @foreach ($coaches as $coach)
                    @if($coach->id === $pokemon->coach->id)
                        <option value="{{ $coach->id }}" selected>{{ $coach->name }}</option>
                    @else
                        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br>
    <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit">Update Pokemon</button>
</form>
</center>
@endsection


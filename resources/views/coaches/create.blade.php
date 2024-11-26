@extends('layouts.base')

@section('content')

<center>
    <form class=" max-w-sm mx-auto" action="{{ url('coaches') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div>
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image:</label>
            <input type="file" name="image" id="image"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="p-5">
            <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit">Create Coach</button>
        </div>
    </form>
</center>
@endsection
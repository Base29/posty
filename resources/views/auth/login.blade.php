@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <div class="mb-6 flex justify-center">
            <span class="font-bold text-3xl">Login</span>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>
            <div class="mb-4">
                <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
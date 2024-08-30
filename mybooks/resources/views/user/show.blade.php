@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6">User Details</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Name:</label>
                <p class="text-gray-900">{{ $user->name }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Email:</label>
                <p class="text-gray-900">{{ $user->email }}</p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Role:</label>
                <p class="text-gray-900">{{ ucfirst($user->role) }}</p>
            </div>

            <div class="flex space-x-4">
                <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-700">Delete</button>
                </form>
                <a href="{{ route('users.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-700">Back to List</a>
            </div>
        </div>
    </div>
@endsection

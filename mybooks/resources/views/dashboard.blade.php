<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ Auth::user()->role === 'admin' ? __('Admin Dashboard') : __('User Dashboard') }}
            </h2>
        </div>
    </x-slot>
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Welcome Message -->
                    <h3 class="text-3xl font-bold mb-6">
                        {{ __("Welcome, ") . Auth::user()->name . "!" }}
                    </h3>

                    <!-- Conditional Content Based on Role -->
                    @if (Auth::user()->role === 'admin')
                        <!-- Admin Dashboard Widgets -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Manage Users -->
                            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                                <h3 class="text-lg font-semibold mb-3">Manage Users</h3>
                                <p class="mb-4 text-gray-700">View and manage all the users in the system.</p>
                                <a href="{{ route('users.index') }}" class="text-blue-600 hover:underline">View Users</a>
                            </div>

                            <!-- Manage Books -->
                            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                                <h3 class="text-lg font-semibold mb-3">Manage Books</h3>
                                <p class="mb-4 text-gray-700">View, add, update, and delete books.</p>
                                <a href="{{ route('books.show') }}" class="text-blue-600 hover:underline">Manage Books</a>
                            </div>
                        </div>
                    @else
                        <!-- User Dashboard Widgets -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Manage Books -->
                            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                                <h3 class="text-lg font-semibold mb-3">Manage Books</h3>
                                <p class="mb-4 text-gray-700">View and manage your favorite books.</p>
                                <a href="{{ route('books.index') }}" class="text-blue-600 hover:underline">View Books</a>
                            </div>

                            <!-- Wishlist -->
                            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                                <h3 class="text-lg font-semibold mb-3">Wishlist</h3>
                                <p class="mb-4 text-gray-700">Manage and view books added to your wishlist.</p>
                                <a href="{{ route('wishlist.index') }}" class="text-blue-600 hover:underline">View Wishlist</a>
                            </div>
                            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                                <h3 class="text-lg font-semibold mb-3">Blog</h3>
                                <p class="mb-4 text-gray-700">Read Our Blog . <br>It's Beneficial.</p>
                                <a href="{{ route('blog') }}" class="text-blue-600 hover:underline">View Blog</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>

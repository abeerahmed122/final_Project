@extends('components.layout')

@section('content')
    <div class="container my-5">
        <h2 class="text-center mb-4">Your Favorite Books Collection</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center">Book Cover</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Price</th>
                </tr>
                </thead>
                <tbody>
                @forelse($wishlistBooks as $book)
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('/' . $book->cover_image) }}" alt="{{ $book->title }}" style="width: 150px; height: 200px; object-fit: cover;">
                        </td>
                        <td class="align-middle text-center">{{ $book->title }}</td>
                        <td class="align-middle text-center">{{ $book->author }}</td>
                        <td class="align-middle text-center">{{ $book->price }} EGP</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Your wishlist is currently empty. Start adding your favorite books!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

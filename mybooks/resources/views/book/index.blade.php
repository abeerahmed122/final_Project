@extends('components.layout')

@section('content')
    <div class="container">
        <div class="text-center my-4">
            <h1>Welcome to Your Favorite Books Collection</h1>
            <p>Discover new titles and add them to your wishlist!</p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" style="font-size: 18px; font-family: 'Arial', sans-serif;">Book Cover</th>
                    <th class="text-center" style="font-size: 18px; font-family: 'Arial', sans-serif;">Title</th>
                    <th class="text-center" style="font-size: 18px; font-family: 'Arial', sans-serif;">Author</th>
                    <th class="text-center" style="font-size: 18px; font-family: 'Arial', sans-serif;">Price</th>
                    <th class="text-center" style="font-size: 18px; font-family: 'Arial', sans-serif;">Add to Wishlist</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="align-middle text-center">
                            <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" style="width: 100px; height: auto;">
                        </td>
                        <td class="align-middle text-center" style="font-size: 16px; font-family: 'Arial', sans-serif;">{{ $book->title }}</td>
                        <td class="align-middle text-center" style="font-size: 16px; font-family: 'Arial', sans-serif;">{{ $book->author }}</td>
                        <td class="align-middle text-center" style="font-size: 16px; font-family: 'Arial', sans-serif;">{{ $book->price }} EGP</td>
                        <td class="align-middle text-center">
                            <form action="{{ route('wishlist.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <button type="submit" class="btn btn-primary">Add to Wishlist</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- Simple Pagination -->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        @if ($books->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $books->previousPageUrl() }}" rel="prev">Previous</a>
                            </li>
                        @endif

                        @for ($i = 1; $i <= $books->lastPage(); $i++)
                            <li class="page-item {{ $books->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $books->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($books->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $books->nextPageUrl() }}" rel="next">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">Next</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

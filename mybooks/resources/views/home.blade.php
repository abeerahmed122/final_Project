@extends('components.layout')
@section('content')



    <section id="categories">
        <div class="container my-3 py-5">
            <div class="row my-5">
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <img src="images/book (1).png" style="width: 100px; height: 100px;">
                        <h5>Fiction Science</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <img src="images/books.png" style="width: 100px; height: 100px;">
                        <h5>Non Fiction</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <img src="images/book (2).png" style="width: 100px; height: 100px;">
                        <h5>Fiction</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <img src="images/book (3).png" style="width: 100px; height: 100px;">
                        <h5>Romantic</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 20px; text-align: center;">
            <h1>Welcome to the Book Borrowing Website</h1>
            <p class="mt-4">Register or log in to start borrowing your favorite books and explore our vast collection. Sign up now to get started!</p>
            <div class="mt-3">
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
            </div>
        </div>
    </section>
@endsection


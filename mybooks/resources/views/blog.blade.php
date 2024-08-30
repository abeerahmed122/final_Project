@extends('components.layout')

@section('title', 'Blog')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Our Blog</h1>
            <p class="lead">Explore articles about famous authors and reading tips.</p>
        </div>

        <div class="row">
            <!-- Ahmed Khaled Tawfik -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/author1.jpg') }}" class="card-img-top" alt="Ahmed Khaled Tawfik">
                    <div class="card-body">
                        <h5 class="card-title">Ahmed Khaled Tawfik</h5>
                        <p class="card-text">
                            Ahmed Khaled Tawfik was an Egyptian author and physician who is considered one of the pioneers of horror and science fiction literature in the Arab world. Known as the "Godfather of Generation Z," his books have captivated millions of readers across the Middle East. His most famous work, the "Metaphysics" series, blends supernatural elements with deep philosophical questions, making it a cultural phenomenon.
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Ahmed_Khaled_Tawfik" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Mostafa Mahmoud -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/mostafa.jpg') }}" class="card-img-top" alt="Mostafa Mahmoud">
                    <div class="card-body">
                        <h5 class="card-title">Mostafa Mahmoud</h5>
                        <p class="card-text">
                            Mostafa Mahmoud was an Egyptian doctor, philosopher, and author, renowned for his deep explorations of faith and science. His works, including the popular TV show "Science and Faith," challenged conventional thinking and offered a unique blend of scientific inquiry and spiritual reflection. His writings continue to inspire readers to explore the profound questions of existence.
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Mustafa_Mahmoud" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Mark Manson -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/author3.jpg') }}" class="card-img-top" alt="Mark Manson">
                    <div class="card-body">
                        <h5 class="card-title">Mark Manson</h5>
                        <p class="card-text">
                            Mark Manson is an American author, blogger, and entrepreneur known for his no-nonsense approach to personal development. His best-selling book, "The Subtle Art of Not Giving a F*ck," offers a refreshing take on self-help, encouraging readers to embrace their flaws and focus on what truly matters in life. Manson's candid and often humorous style has made him a favorite among millennials seeking authentic advice.
                        </p>
                        <a href="https://ar.wikipedia.org/wiki/%D9%85%D8%A7%D8%B1%D9%83_%D9%85%D8%A7%D9%86%D8%B3%D9%88%D9%86" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

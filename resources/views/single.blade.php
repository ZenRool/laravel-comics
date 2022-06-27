@extends("layouts.app")

@section("title")
    {{ $comic["title"] }}
@endsection

@section("main_content")
    <div class="single">
        <div class="blue-band"></div>
        <div class="container">
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
        </div>
    </div>
@endsection
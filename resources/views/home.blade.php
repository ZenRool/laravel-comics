@extends("layouts.app")

@section("title")
    Dc Comics Home Page
@endsection

@section("main_content")
    <div class="home_page">
        <div class="container">
            <div class="badge">
                Current Series
            </div>
            @include("components.comic-section");
        </div>
    </div>
@endsection

<section class="comics_section">
    @foreach($comic_array as $comic)
        @include('components.comic-card', $comic)
    @endforeach
</section>
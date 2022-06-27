<section class="comics_section">
    @foreach($comic_array as $key=>$comic)
        @include('components.comic-card', $comic)
    @endforeach
</section>
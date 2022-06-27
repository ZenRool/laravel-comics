<div class="comic_card">
    <a href="{{ url('/single-comic/' .$key) }}">
        <img src="{{ $thumb }}" alt="{{ $title }}">
        <p>
            {{ explode("#", $title)[0] }}
        </p>
    </a>
</div>
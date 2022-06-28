<a href="{{ url('/single-comic/' .$key) }}" class="comic_card">
    
                
        <div class="image">
            <img src="{{ $thumb }}" alt="{{ $title }}">
        </div>
             
        <p>
            {{ explode("#", $title)[0] }}
        </p>
    
</a>
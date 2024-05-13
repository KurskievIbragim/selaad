@foreach($words as $word)
    <div class="word">
        <p>{{$word->word_ing}}</p>
        <span>-</span>
        <p>{{$word->word_translate}}</p>
    </div>
@endforeach

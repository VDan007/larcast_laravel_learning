
<x-layout  >
    <article>
        
        <h1>
            {!!  $post->title  !!}

        </h1>
        
        <p class="category">
           by Author Name in Category: <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}  </a>
        </p>

        <div>
             {!! $post->body !!}
        </div>
        
    </article>
    <a href="/">Back to HOME</a>
    
</x-layout  >

<x-layout  >
    
      
            @foreach($posts as $post)
                <article>
                    <a href="/posts/{{$post->id }}">
                        <h1> {{$post->title }}</h1>
                    </a>
                    <p class="category">
                        Category: <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}  </a>
                    </p>
                    <div>
                        {{$post->excerpt}}
                    </div>
                </article>
            @endforeach  
       

       

</x-layout>    

     

   
   

        


    
<article>
  <hgroup>
    <h2>
      {{$title}}
    </h2>
    <p>
      @if(isset($desc))
      {{substr($desc,0,100)}}..
      @else
      ---
      @endif
    </p>
  </hgroup>
  <hr>
    <div class="grid">
      @if(isset($link))
          <a href="/{{$link}}" class="secondary" role="button">view</a>
        @endif
		@if(isset($slug) && isset($id))
        <form method="post" action="{{$id}}" class="reset"> 
          @csrf
          @method('DELETE')
          <button type="submit" class="secondary">delete</button>
        </form>
    @endif
    
		@if(isset($slug) && isset($id))
        <a href="{{$id}}/edit" class="secondary" role="button">edit</a>
      @endif
    </div>
</article>

<x-layout>
	<article>

		<nav>
			<ul>
				
				@foreach($data as $link)
				<li>
					<a href="{{$link->page->slug}}">{{$link->name}}</a>
				</li>
				@endforeach
				
			</ul>
		</nav>
	</article>
<hr>
  <article>
    <h1>Zavrsni v3</h1>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur nobis accusantium molestiae necessitatibus quis iste tenetur soluta aliquam ad nisi ea, delectus iure temporibus laboriosam culpa at quod? Pariatur eos facilis iste doloribus assumenda facere delectus placeat ullam, explicabo debitis!
  </article>
	<hr>
</x-layout>

<x-layout>
  @if ( $data['img'] != "" )
  <img src="{{$data['img']}}" alt=""/>
	@else
  <img src="/blank.jpg" alt=""/>
	@endif
  <hr>

  <article>
		<header>
			<b>{{$data['name']}}</b>
		</header>
		<p>
			{{$data['text']}}
		</p>
		<hr>
	</article>



</x-layout>

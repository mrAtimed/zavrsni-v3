<x-layout>
  <table>
    <thead class="bg">
      <th>IMG</th>
      <th>NAME</th>
      <th><small>DESCRIPTION</small></th>
      <th colspan="3"><small>CONTROLS</small></th>
    </thead>
    @foreach($data as $post)
    <tr>
      <td>
        <img src="{{
					$post['img'] ? env('APP_URL') .'/'.$post['img'] : env('APP_URL').'/blank.jpg'
					}}" alt="" class="ico" />
      </td>
      <td><b>{{$post['name']}}</b></td>
      <td>
				{!!substr($post['text'],0,90)!!}..
			</td>
      <td>
				<a href="/{{$post['slug']}}">/{{$post['slug']}}</a>
			</td>
      <td>
				<a href="{{$post['id']}}/edit/">edit</a>
			</td>
      <td>
				<a href="/{{$post['id']}}/">del</a>
			</td>
    </tr>
    @endforeach

  </table>



  {{-- <div class="grid gap">

			@foreach($data as $post)
			<x-article 
				title="{{$post['name']}}"
  desc="{{$post['text']}}"
  link="{{$post['slug']}}"
  slug="/p"
  id="{{$post['id']}}"
  >
  </x-article>

  @endforeach

  </div> --}}

</x-layout>

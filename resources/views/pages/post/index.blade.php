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
        <a href="/{{$post['slug']}}">/{{strtoupper($post['slug'])}}</a>
      </td>
      <td>
        <a href='/p/{{$post['id'] . "/edit" }}'>
					<ins>EDIT</ins>
      </td>
      <td>
        <form method="POST" class="reset" action="/r/{{$post['id']}}">
          @csrf
          @method('DELETE')
          <a href='{{'/p/'.$post['id']}}' onclick="event.preventDefault();this.closest('form').submit();">
            DELETE
          </a>
        </form>
      </td>
    </tr>
    @endforeach

  </table>
</x-layout>

<x-layout>
  <div class="bg">
    <a href="/r/create/" role="button">Add new</a>
  </div>
  <table>
    <thead class="bg">
      <th>ID</th>
      <th>NAME</th>
      <th colspan="2"><small>CONTROLS</small></th>
    </thead>
    @foreach($data as $role)
    <tr>
      <td>
        <b>
          {{$role['id']}}
        </b>
      </td>
      <td>
        <b>
          {{$role['name']}}
        </b>
      </td>
      <td>
				{{-- /////////////////////////////////////////// --}}
        @if($role['name']=="Admin")
        <s class="secondary">EDIT</s>
        @else
        <a href='{{'/r/'. $role['id'] . "/edit" }}'>
					<ins>EDIT</ins>
				</a>
        @endif
				{{-- /////////////////////////////////////////// --}}
      </td>
      <td>
        <form method="POST" class="reset" action="/r/{{$role['id']}}">
          @csrf
          @method('DELETE')
				{{-- /////////////////////////////////////////// --}}
				@if($role['name']=="Admin")
          <s class="secondary">DELETE</s>
          @else
          <a href='{{'/r/'.$role['id']}}' onclick="event.preventDefault();this.closest('form').submit();">
            DELETE
          </a>
				{{-- /////////////////////////////////////////// --}}
				@endif
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</x-layout>

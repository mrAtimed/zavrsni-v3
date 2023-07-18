<x-layout>
	<div class="bg">
    <article>

      <a href="/n/create/" role="button">Add new</a>
    </article>
  </div>
  <table>
    <thead class="bg">
      <th>NAME</th>
      <th>SLUG</th>
      <th colspan="2"><small>CONTROLS</small></th>
    </thead>
    @foreach($data as $link)
    <tr>
      <td>
        <b>
          {{$link->name}}
        </b>
      </td>
      <td>
        <b>
          {{$link->page->slug}}
        </b>
      </td>
			<td>
        <a href='/n/{{$link->id }}/edit'>
					<ins>EDIT</ins>
				</a>
      </td>
      <td>
        <form method="POST" class="reset" action="/n/{{$link->id }}">
          @csrf
          @method('DELETE')
          <a href='/n/{{$link->id }}' onclick="event.preventDefault();this.closest('form').submit();">
            DELETE
          </a>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</x-layout>
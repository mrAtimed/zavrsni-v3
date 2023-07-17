
<x-layout>
	<div class="bg">
		<article>

			<a href="/register/" role="button">Add new</a>
		</article>
	</div>
<table>
	<thead class="bg">
		<th>ID</th>
		<th>NAME</th>
		<th>ROLE</th>
		<th colspan="2"><small>CONTROLS</small></th>
	</thead>
	@foreach($data as $dat)
	<tr>
		<td>
			<b>
				{{$dat->id}}
			</b>
		</td>
		<td>
			{{$dat->name}}
		</td>
		<td>
			{{$dat->role->name}}
		</td>
		<td>
			@if($dat->id == 1)
			<del>EDIT</del>
			@else
			<a href='/u/{{$dat['id']}}/edit/'>
				<ins>EDIT</ins>
			</a>
			@endif
		</td>
		<td>
			@if($dat->id == 1)
			<del>DELETE</del>
			@else
			<form method="POST" class="reset" action="/u/{{$dat['id']}}">
				@csrf
				@method('DELETE')
				<a href='{{'/u/'.$dat['id']}}' onclick="event.preventDefault();this.closest('form').submit();">
					DELETE
				</a>
			</form>
			@endif
		</td>
	</tr>
	@endforeach
</table>





</x-layout>
<x-layout>
	<div class="bg">
		<a href="create	" role="button">Add new</a>
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
				{{-- {{$role['id']}} --}}
			</b>
		</td>
		<td>
			<b>
				{{-- {{$role['name']}} --}}
			</b>
		</td>
		<td>
			{{-- <a {{ $role['name']=="Admin" ? "disabled class=secondary" :'href='. $role['id'] }}>edit</a> --}}
		</td>
		<td>
			{{-- <a {{ $role['name']=="Admin" ? "disabled class=secondary" :'href='. $role['id'] }}>del</a> --}}
		</td>
	</tr>
	@endforeach
</table>

</x-layout>
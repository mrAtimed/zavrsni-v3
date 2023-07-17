
<x-layout>
	<div class="bg">
		<a href="create	" role="button">Add new</a>
	</div>
<table>
	
	<thead class="bg">
		<th>ID</th>
		<th>NAME</th>
		<th>ROLE</th>
		<th colspan="2"><small>CONTROLS</small></th>
	</thead>
	@foreach($data as $user)
	<tr>
		<td>
			{{$user['id']}}
		</td>
		<td>
			<b>
				{{$user['name']}}
			</b>
			( {{$user['email']}} )
		</td>
		<td>
				{{ $role = $roles[$user['role_id']]}};
				{{ print_r($role->getOriginal()p) }}
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
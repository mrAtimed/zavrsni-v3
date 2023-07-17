<x-layout>
<form method="POST" action="/u/{{$data['id']}}" >
	@csrf
	@method('PATCH')

	<label for="name">EDIT NAME:</label>
	<input type="text" name="name" id="name" value="{{$data['name']}}">
	<label for="name">EDIT EMAIL:</label>
	<input type="email" name="email" id="email" value="{{$data['email']}}">
	<label for="name">ROLE:</label>
	<select name="role" id="">
		<option>Select Role</option>
		@foreach($roles as $role)
		<option value="{{ $role->id }}" {{ $data->role_id == $role->id ? 'selected' : '' }}>
			{{ $role->name }}
		</option>
		@endforeach
	</select>

	<input type="submit" value="SAVE NEW">
</form>
</x-layout>
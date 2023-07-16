<x-layout>
<form method="POST" action="/r/{{$data['id']}}" >
	@csrf
	@method('PATCH')

	<label for="name">EDIT ROLE:</label>
	<input type="text" name="name" id="name" value="{{$data['name']}}">
	<input type="submit" value="SAVE NEW">
</form>
</x-layout>
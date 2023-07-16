<x-layout>
<form action="/r/" method="post">
	@csrf
	<label for="name">NEW ROLE:</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="CREATE NEW">
</form>
</x-layout>
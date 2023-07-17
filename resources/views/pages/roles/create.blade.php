<x-layout>
<dialog open>
	<article>
		<header>
			<br>
			<a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
			<b>CREATE NEW ROLE</b>
		</header>

		<form action="/r/" method="post">
			@csrf
			<label for="name">TITLE:</label>
			<input type="text" name="name" id="name">
			<input type="submit" value="CREATE NEW">
		</form>
	</article>
</dialog>	
</x-layout>
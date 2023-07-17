<x-layout>
	<dialog open>
		<article>
      <header>
        <br>
        <a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
        <b>EDIT ROLE NAME</b>
      </header>

			<form method="POST" action="/r/{{$data['id']}}" >
				@csrf
				@method('PATCH')
				
				<input type="text" name="name" id="name" value="{{$data['name']}}">
				<input type="submit" value="SAVE NEW">
			</form>
		</article>
		<dialog>
</x-layout>
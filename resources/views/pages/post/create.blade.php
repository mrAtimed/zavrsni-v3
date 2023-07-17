<x-layout>

	<dialog open>
		<article class="wide">
			<header>
				<br>
				<a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
				<b>Create new page</b>
			</header>
      <form method="POST" action="/p/">
        @csrf
        <input type="hidden" name="id" autofocus >
        <label for="name">Title</label>
        <input type="text" name="name" >
        <label for="slug">Slug</label>
        <input type="text" name="slug" >
        <label for="slug" >*Image</label>
        <input type="text"value="/placeholder.jpg" name="img" disabled>
        <label for="text">Html</label>
        <textarea name="text" rows="6"></textarea>
        <input type="submit" value="Save">
      </form>
    </article>
  </dialog>

</x-layout>

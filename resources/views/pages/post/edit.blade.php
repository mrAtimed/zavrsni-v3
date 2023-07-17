<x-layout>
  <dialog open>
    <article class="wide">
      <header>
        <br>
        <a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
        <b>EDIT PAGE</b>
      </header>

      <form method="POST" action="/p/{{$data['id']}}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{$data['id']}}">
        <label for="name">Title</label>
        <input type="text" name="name" value="{{$data['name']}}">
        <label for="slug">Slug</label>
        <input type="text" name="slug" value="{{$data['slug']}}">
        <label for="slug">*Image</label>
        <input type="text" name="img" value="{{$data['img']}}">
        <label for="text">Html</label>
        <textarea name="text" rows="6">{{$data['text']}}</textarea>
        <input type="submit" value="Save">
      </form>
    </article>
  </dialog>


</x-layout>

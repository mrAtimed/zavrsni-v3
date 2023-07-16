<x-layout>
  <article>

    <form method="POST" action="{{ route('role.update',['id' => $id]) }}">
      @method('PATCH')
      @csrf
      <input type="hidden" name="_method" value="PUT" />

      <input type="hidden" name="id" value="{{$data['id']}}">
      <label for="name">Editing:</label>
      <input type="text" name="name" value="{{$data['name']}}">
      <label for="slug">Slug:</label>
      <input type="text" name="slug" value="{{$data['slug']}}">
      <label for="slug">*Image:</label>
      <input type="text" name="img" value="{{$data['img']}}">
      <label for="text">Html:</label>
      <textarea name="text" rows="6">{{$data['text']}}</textarea>
      <input type="submit" value="Save">
    </form>
  </article>


</x-layout>

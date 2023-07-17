<x-layout>
  <form action="/register/" method="post">
    @csrf
    <label for="name">NEW USERNAME:</label>
    <input type="text" name="name" id="name">
    <label for="name">E-MAIL:</label>
    <input type="email" name="email" id="email">
    <label for="name">PASSWORD:</label>
    <input type="password" name="password" id="password">
    <label for="name">ROLE:</label>
    <select name="role" id="">
      <option>Select Role</option>

      @foreach($roles as $role)
      <option value="{{ $role->id }}">
        {{ $role->name }}
      </option>
      @endforeach
    </select>

    <input type="submit" value="CREATE NEW">
  </form>
</x-layout>

<x-layout>
  <dialog open>
    <article class="wide">
      <header >
        <br>
        <a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
        <b>Register</b>
      </header>

      <form method="POST" action="/register/">
        @csrf
        <label for="name">NAME</label>
        <input type="text" name="name" :value="old('name')" required>
        <label for="name">EMAIL</label>
        <input type="email" name="email" :value="old('email')" required>
        <label for="name">PASSWORD</label>
        <input type="password" name="password" id="password" required>
        <label for="name">REPEAT PASSWORD</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>


        <div class="grid">
          <a href="/login/">
            {{ __('Already registered?') }}
          </a>
          <input type="submit" value="Register">
        </div>
      </form>
    </article>
    <dialog>
</x-layout>

<x-layout>
  <dialog open>
    <article>
      <header>
        <br>
        <a href="{{ url()->previous() }}" aria-label="Close" class="close"></a>
        <b>Log in</b>
      </header>
      <form action="/login/" method="POST">
				
        @csrf

        <label for="email" data-tooltip="hrvoje.krhac@gmail.com">E-mail</label>
        <input type="email" name="email" id="email" required="required" autofocus="autofous" placeholder="e-mail">
        <label for="email" data-tooltip="password">Password</label>
        <input type="password" name="password" id="password" required="required" placeholder="********">

        <input type="checkbox" name="remember_me" id="remember_me">
        <label for="remember_me">Remember me..</label>
        <hr>
        <input type="submit" value="LOG IN">
      </form>
    </article>
  </dialog>
</x-layout>

<div class="bg sticky">
  <div class="container">
    <nav>
      <ul>
        <li>
            <strong>WIP</strong>
        </li>
      </ul>
      <ul>
        @guest
        <li><a href="/login"class="secondary">Log in</a></li>
        @endguest
        @auth
        <li >
          <a href="/dashboard" class="secondary">
          Dashboard</a>
        </li>
        <li>
          <form method="POST" action="/logout/" class="reset">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="secondary">
              Log Out
            </a>
          </form>
        </li>
        @endauth
      </ul>
    </nav>

  </div>
	<hr>
</div>
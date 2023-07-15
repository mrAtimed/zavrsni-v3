<div class="bg sticky">
  <div class="container">
    <nav>
      <ul>
        <li>
          @guest
          <a href="/"><strong>Zavrsni</strong></a>
          @endguest
          @auth
          <a href="/dashboard" class="contrast outline" role="button"><strong >Dashboard</strong></a>
              
          @endauth
        </li>
      </ul>
      <ul>
        @guest
        <li><a href="/login"class="secondary">Log in</a></li>
        @endguest
        @auth
        <li><a href="/u/" >Users</a></li>
        <li><a href="/r/" >Roles</a></li>
        <li><a href="/p/" >Pages</a></li>
        </li>
        <li>
          <form method="POST" action="/logout/" class="reset" >
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="secondary outline" role="button">
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
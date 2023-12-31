<div class="bg sticky">
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="/"><strong>Zavrsni</strong></a>
        </li>
      </ul>
      <ul>
        @guest
        <li><a href="/register/">Register</a></li>
        <li><a href="/login" role="button">Log in</a></li>
        {{$slot}}
        @endguest
        @auth
        <li><a href="/u/" >Users</a></li>
        <li><a href="/r/" >Roles</a></li>
        <li><a href="/p/" >Pages</a></li>
        <li><a href="/n/" >Nav</a></li>
        </li>
        <li>
          <form method="POST" action="/logout/" class="reset" >
            @csrf
            
            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="contrast outline" role="button">
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
<x-layout>

  <article>
    <hgroup>
      <h2>Logged in</h2>
      <p>
        <b>
          
          {{Auth::user()->name;}}
        </b><br>
        {{Auth::user()->email;}}
      </p>
    </hgroup>
    <progress></progress>
  </article>
</x-layout>

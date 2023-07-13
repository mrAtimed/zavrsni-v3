<hr>
<footer class="bg">
  <div class="container">
    <div class="grid">

      <small>
        <b>{{ config('app.name') }}</b> - {{app()->version()}}
      </small>
      @if (isset($slot))
      <small>
        {{$slot}}
      </small>
    </div>
    @endif
  </div>
</footer>

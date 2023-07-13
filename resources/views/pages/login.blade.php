<x-layout>

	<article>
		<form action="/login/" method="POST">
			@csrf

			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" required="required" autofocus="autofous">
			<label for="email">Password</label>
			<input type="password" name="password" id="password" required="required" autofocus="autofous">

			<input type="checkbox" name="remember_me" id="remember_me">
			<label for="remember_me">Remember me..</label>
			<hr>
			<input type="submit" value="LOG IN">
		</form>
	</article>
</x-layout>
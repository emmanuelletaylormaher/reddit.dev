<nav class="navbar navbar-inverse bg-faded">
		<a class="navbar-brand" href="/">fake reddit</a>
		<a class="navbar-brand" href="/posts">posts</a>
	@if(Auth::check())
		<a class="navbar-brand" href="/auth/register">register</a>
		<a class="navbar-brand" href="/auth/login">login</a>
	@else
		<a class="navbar-brand" href="/posts/create">create post</a>
		<a class="navbar-brand" href="/auth/logout">logout</a>
	@endif
		<form class= "navbar-form form-inline">
			<input class="form-control mr-sm-2" type="text" placeholder="search">
			<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>

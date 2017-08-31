<nav class="navbar navbar-inverse bg-faded">
	<a class="navbar-brand" href="/">fake reddit</a>

	<ul class="nav navbar-nav navbar-right">
		<li><a class="navbar-brand" href="{{action('PostsController@index')}}">posts</a></li>
	</ul>

	@if(Auth::check())
	<ul class="nav navbar-nav navbar-right">
		<li><a class="navbar-brand" href="{{action('PostsController@create')}}">create post</a></li>
		<li><a class="navbar-brand" href="{{action('Auth\AuthController@getLogout')}}">logout</a></li>	
	</ul>
	@else
	<ul class="nav navbar-nav navbar-right">
		<li><a class="navbar-brand" href="{{action('Auth\AuthController@getRegister')}}">register</a></li>
		<li><a class="navbar-brand" href="{{action('Auth\AuthController@getLogin')}}">login</a></li>
	</ul>
	@endif

	<form class= "navbar-form form-inline">
		<input class="form-control mr-sm-2" type="text" placeholder="search">
		<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>

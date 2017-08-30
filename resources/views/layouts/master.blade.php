<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	@include('layouts.partials._navbar')
	@if (session()->has('successMessage'))
    	<div class="alert alert-success">{{ session('successMessage') }}</div>
	@endif

    @yield('content')
    @yield('links')
</body>
</html>
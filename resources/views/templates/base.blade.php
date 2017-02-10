<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="THE TEST: A database stores information about its members. Each member can be associated with 1 or more school. You should build a demo that allows someone to add a new member with the fields 'Name', 'Email Address' and 'School' (selected from a list). The demo should display all members for a selected school">

	<title>School Enrolment App</title>
	
	{{-- Bootstrap CSS --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/App.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			@include('templates.sidebar')

			<div class="col-md-8 content">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>
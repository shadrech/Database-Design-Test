@extends('templates.base')

@section('content')
	<h1>Add School</h1>
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="content-area">
				<form action="/schools/create" method="POST">
					<input type="text" name="name" placeholder="Name of Institution">
					<button role="submit">Submit</button>
				</form>

				@include('templates.formErrors')
			</div>
		</div>
	</div>
@endsection
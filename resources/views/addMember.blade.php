@extends('templates.base')

@section('content')
	<h1>Add Member</h1>
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="content-area">
				<form action="/members/create" method="POST">
					<input type="text" name="name" placeholder="Name">
					<input type="email" name="email" placeholder="Email">
					<select name="school">
						@foreach($schools as $s)
							<option value="{{ $s->id }}">{{ $s->name }}</option>
						@endforeach
					</select>
					<button role="submit">Submit</button>
				</form>
				
				@include('templates.formErrors')
			</div>
		</div>
	</div>
@endsection
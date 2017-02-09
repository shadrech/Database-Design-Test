@extends('templates.base')

@section('content')
	<h1>Members</h1>
	
	<div class="row">
		@foreach($members as $m)
			<div class="col-md-6">
				<div class="content-area">
					<form action="/members" method="POST">
						<input type="hidden" name="id" value="{{ $m->id }}">
						<input type="hidden" name="_METHOD" value="DELETE">
						<button role="submit" class="delete" disabled="disabled">X</button>
					</form>

					<h3>{{ $m->name }}</h3>
					<h4>{{ $m->email }}</h4>

					<p>Schools enrolled:</p>
					<ul>
						@foreach($m->enrolments as $e)
							<li>{{ $e->school->name }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endforeach
	</div>
@endsection
@extends('templates.base')

@section('content')
	<h1>Schools</h1>
	
	<div class="row">
		@foreach($schools as $s)
			<div class="col-md-6">
				<div class="content-area">
					<h3>{{ $s->name }}</h3>

					<p>Attendees:</p>
					<ul>
						@foreach($s->enrolments as $e)
							<li>{{ $e->member->name }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endforeach
	</div>
@endsection
@extends('layout/main')
@section('content')
	<!-- main -->
	<div class="container">
			@if (isset($message))
				<div style="text-align:center;max-width: 800px;margin: 150px auto;" class="alert alert-success">
					{{ $message }}
				</div>
			@endif
			@if (isset($error))
				<div style="text-align:center;max-width: 800px;margin: 150px auto;" class="alert alert-danger">
					<ul>
						<li>{{ $error }}</li>
					</ul>
				</div>
			@endif
	</div>
@endsection
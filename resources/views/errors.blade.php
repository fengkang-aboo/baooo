@extends('layout/main')
@section('content')
	<!-- main -->
	<div class="container errorswrp">
		<div class="row box">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="alert alert-danger">
					<ul>
						<li>{{$message or ''}}</li>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
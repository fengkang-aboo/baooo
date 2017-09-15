@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="bigimg">
			<img src="{{asset('img/inner.png')}}">
		</div>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/33')}}"><img class="" src="{{asset('img/inner5_1.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/34')}}"><img class="" src="{{asset('img/inner5_2.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/35')}}"><img class="" src="{{asset('img/inner5_3.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32" style="margin-bottom: 100px;">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/36')}}"><img class="" src="{{asset('img/inner5_4.png')}}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	var indexVue = new Vue({
		el:"#indexpage",
		data:{
			c1show:false,
		},
		methods:{
			showc1:function() {
				this.c1show = !this.c1show;
			}
		}
	});
	</script>
@endsection

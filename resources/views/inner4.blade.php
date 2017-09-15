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
						<a href="{{url('show/22')}}"><img class="" src="{{asset('img/inner4_1.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/23')}}"><img class="" src="{{asset('img/inner4_2.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/24')}}"><img class="" src="{{asset('img/inner4_3.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/25')}}"><img class="" src="{{asset('img/inner4_4.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/26')}}"><img class="" src="{{asset('img/inner4_5.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/27')}}"><img class="" src="{{asset('img/inner4_6.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/28')}}"><img class="" src="{{asset('img/inner4_7.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/29')}}"><img class="" src="{{asset('img/inner4_8.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/30')}}"><img class="" src="{{asset('img/inner4_9.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32" style="margin-bottom: 100px;">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/31')}}"><img class="" src="{{asset('img/inner4_10.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/32')}}"><img class="" src="{{asset('img/inner4_11.png')}}" alt=""></a>
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

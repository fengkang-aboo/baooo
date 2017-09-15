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
						<a href="{{url('show/37')}}"><img class="" src="{{asset('img/inner6_1.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/38')}}"><img class="" src="{{asset('img/inner6_2.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/39')}}"><img class="" src="{{asset('img/inner6_3.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/40')}}"><img class="" src="{{asset('img/inner6_4.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/41')}}"><img class="" src="{{asset('img/inner6_5.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/42')}}"><img class="" src="{{asset('img/inner6_6.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/43')}}"><img class="" src="{{asset('img/inner6_7.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/44')}}"><img class="" src="{{asset('img/inner6_8.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/45')}}"><img class="" src="{{asset('img/inner6_9.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32" style="margin-bottom: 100px;">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/46')}}"><img class="" src="{{asset('img/inner6_10.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/47')}}"><img class="" src="{{asset('img/inner6_11.png')}}" alt=""></a>
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

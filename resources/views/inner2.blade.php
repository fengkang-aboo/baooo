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
						<a href="{{url('show/4')}}"><img class="" src="{{asset('img/inner2_1.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/5')}}"><img class="" src="{{asset('img/inner2_2.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/6')}}"><img class="" src="{{asset('img/inner2_3.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/7')}}"><img class="" src="{{asset('img/inner2_4.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/8')}}"><img class="" src="{{asset('img/inner2_5.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/9')}}"><img class="" src="{{asset('img/inner2_6.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/10')}}"><img class="" src="{{asset('img/inner2_7.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/11')}}"><img class="" src="{{asset('img/inner2_8.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/12')}}"><img class="" src="{{asset('img/inner2_9.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/13')}}"><img class="" src="{{asset('img/inner2_10.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/14')}}"><img class="" src="{{asset('img/inner2_11.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/15')}}"><img class="" src="{{asset('img/inner2_12.png')}}" alt=""></a>
					</div>
				</div>
			</div>

			<div class="row mt-32" style="margin-bottom: 100px;">
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/16')}}"><img class="" src="{{asset('img/inner2_13.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/17')}}"><img class="" src="{{asset('img/inner2_14.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<a href="{{url('show/18')}}"><img class="" src="{{asset('img/inner2_15.png')}}" alt=""></a>
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

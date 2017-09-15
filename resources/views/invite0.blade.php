@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/invite0_0.png')}}" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">人才招聘</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_1.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/1')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_2.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/2')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_3.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/3')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_4.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/4')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_5.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/5')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mcontent">
						<img class="" src="{{asset('img/invite0_6.png')}}" alt="">
					</div>
					<div class="txt-align-c">
						<a href="{{url('invite/6')}}"><div class="mbtm_more">查看职位</div></a>
					</div>
				</div>
				<div class="row mb-40">
					<div class="col-md-12 txt-align-c mh1 mb-30">人力资源地图</div>
					<div class="mcontent">
						<img style="margin: 0 auto" src="{{asset('img/invite0_15.png')}}" alt="">
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

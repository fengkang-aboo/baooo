@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			 <div class="row">
				<div class="col-md-12 txt-align-c mh2 mb-30">掌上售楼处</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/img23.jpg')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh2 mb-30">H5创意工作台</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/img24.jpg')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh2 mb-30">微信公众号运营</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/img25.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="txt-align-c">
						<a href="{{url('service/2')}}"><div class="mbtm_more red">返回工具平台</div></a>
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

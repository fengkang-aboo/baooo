@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak style="background-color: #fdf9f2">
		<div class="index_banner mb-10">
			<div class="swiper-container">
				<div class="list swiper-wrapper">
					<div class="item swiper-slide"><img src="{{asset('img/music_00.png')}}" alt=""></div>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row mt-32">
			<div class="row mt-32" style="position: relative;">
				<a style="display: block;position: absolute;top: -9px;right: 41px;z-index: 999" href="http://blackarcjoymusic.com/" target="_blank"><img style="margin:0 auto;" src="{{asset('img/blackarc_1.png')}}" alt=""></a>
				<div class="col-md-12 txt-align-c mb-30"><img style="margin:0 auto;" src="{{asset('img/music_01.png')}}" alt=""></div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">卓儿亮点</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="" src="{{asset('img/music_11.png')}}" alt="">
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

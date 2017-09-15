@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="big" style="position: relative;">
			<img style="width: 100%;" src="{{asset('img/think1.png')}}">
		</div>
		<div class="container">
			<div class="row mt-32" style="position: relative;">
				<div class="col-md-12">
					<img style="margin-bottom: 100px;" src="{{asset('img/think2.png')}}">
						<a style="display: block;position: absolute;top: 37px;right: 85px;z-index: 999" href="http://zhiku.baooo.cn:2017" target="_blank"><img style="margin:0 auto;" src="{{asset('img/blackarc_1.png')}}" alt=""></a>
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

@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			 <div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">渠道分销BAO 1.0</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/img26.jpg')}}" alt="">
					<div class="mcontent">
						<p>分销BAO是从客户录入、自动报备、等渠道管理的全面解决方案，解决了开发商从圈层引流拓客到客户转化再到渠道结佣的信息自动化难题，实现全面移动化渠道和销售转化管理，在方便快捷的基础上实现快速销售转化。</p>
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

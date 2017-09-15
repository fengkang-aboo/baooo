@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row" style="position: relative;">
				<div class="col-md-12 txt-align-c mh1 mb-30">DSP程序化购买广告投放平台</div>
				<a style="display: block;position: absolute;right: 10px;top: 28px" href="http://dsp.baooo.cn/login" target="_blank"><img style="margin:0 auto;" src="{{asset('img/blackarc_1.png')}}" alt=""></a>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent">
						<p>全自动智能化DSP是大数据营销工具，覆盖PC、移动、视频过百亿的程序化广告媒体资源，拥有精准的人群定向能力。DSP不仅仅只是一个媒体通道，还是一个大数据应用平台。</p>
					</div>
				</div>
			</div>
			<div class="row mcontent mt-32 mb-15">
				<div class="col-md-6">
					<div class="bg-gray p20">
						<b>媒体通道</b>
						<p>DSP一方面做为媒体的通道，对PC/移动/视频等新媒体资源采购。</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bg-gray p20">
						<b>大数据应用平台</b>
						<p>DSP也是一个数据平台，是媒体、设备、人群的数据池。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">一站式智能程序化投放系统</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/service4_4.png')}}" alt="">
						<img class="mb-30" src="{{asset('img/service4_2.png')}}" alt="">
						<p>全自动智能化DSP包含人群分析引擎、个性化推荐引擎、全网跨屏LBS定向引擎、智能动态出价引擎，全自动智能化帮助广告主实现对目标人群的投放，提升广告效果。</p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/service4_3.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">新媒体文化投放BAO</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/img17.jpg')}}" alt="">
						<p>新媒体文化投放宝是应目前互动营销传播的需求，将文化艺术旅行生活品类的高质量的互动媒介，如微信公众大号、微博大V、生活美食艺术旅行类APP等移动互联网媒体，以及娱乐行销的电影电视栏目植入进行有效组合，并根据客户互动传播任务的需求，实现效果最大化的立体覆盖，实现品牌及项目的精准传播。</p>
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

@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
<!-- 			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">联系我们</div>
			</div> -->
			<div class="row mt-32">
				<div class="col-md-12"><img src="{{asset('img/contact0.png')}}" alt=""></div>
			</div>
			<div class="row">
				<div class="col-md-12" style="position: relative;">
					<img src="{{asset('img/contact1.png')}}" alt="">
					<div style="position: absolute;top: 62px;left: 212px;color: #000;">
						<p style="font-weight: 700;line-height: 26px">黑弧数码文化传媒股份有限公司</p>
						<p style="line-height: 26px;">新生意电话：400-675-9688</p>
						<p style="line-height: 26px;">客户服务满意度邮箱：</p>
						<p style="line-height: 26px;">service@blackarcgroup.com</p>
						<p style="line-height: 26px;">官方网址：www.baooo.cn</p>
					</div>
					<div style="position: absolute;top: 81px;left: 686px;color: #000;">
						<p style="font-weight: 700;line-height: 26px">黑弧奥美广告传媒有限公司</p>
						<p style="line-height: 26px;">电话：400-675-9688</p>
						<p style="line-height: 26px;">官方网址：</p>
						<p style="line-height: 26px;">www.blackarc-ogilvy.com:2017</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="position: relative;">
					<img src="{{asset('img/contact2.png')}}" alt="">
					<div style="position: absolute;top: 93px;left: 175px;color: #000;">
						<p style="font-weight: 700;line-height: 26px">黑弧悦音乐文化（北京）有限公司</p>
						<p style="line-height: 26px;">电话：010-53511030</p>
						<p style="line-height: 26px;">官方网址：www.blackarcjoymusic.com</p>
					</div>
					<div style="position: absolute;top: 81px;left: 686px;color: #000;">
						<p style="font-weight: 700;line-height: 26px">黑弧文艺社</p>
						<p style="line-height: 26px;">北京电话：010-53511056</p>
						<p style="line-height: 26px;">深圳电话：0755-86095981</p>
						<p style="line-height: 26px;">官方网址：lab.baooo.cn</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">各地office联络</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">上海</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/shanghai.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>上海黑弧数码传媒股份有限公司</b>
						<p>地址：上海市徐汇区龙腾大道2937号1-3、1-5室</p>
						<p>电话：021-33315523</p>
						<p>邮箱：jaiyu.peng@blackarcgroup.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">北京</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/beijing.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>上海黑弧数码传媒股份有限公司北京分公司</b>
						<p>地址：北京市朝阳区百子湾路32号二十二院艺术区6号楼20号</p>
						<p>电话：010-53511988;&nbsp;&nbsp;010-58263699</p>
						<p>邮箱：lijun.zhu@blackarcgroup.com；</p>
						<p>yunxia.hao@blackarcgroup.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">广州</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/guangzhou.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>上海黑弧数码传媒股份有限公司广州分公司</b>
						<p>地址：广州市天河区员村四横路128号红专厂A6</p>
						<p>电话：020-89852356</p>
						<p>邮箱：ye.lanxiang@blackarcgroup.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">深圳</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/shenzhen.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b> 上海黑弧数码传媒有限公司深圳分公司</b>
						<p>地址：深圳市南山区华侨城创意文化园F1栋105A-2</p>
						<p>电话：0755-86095981</p>
						<p>邮箱：lei.liu@blackarcgroup.com</p>
					</div>
				</div>
			</div>
<!-- 			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">苏州</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/suzhou.html')}}"></iframe>
					</div>
				</div>
			</div> -->
<!-- 			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>上海黑弧数码传媒股份有限公司苏州分公司</b>
						<p>地址：苏州市沈浒路535号雅戈尔国际中心311室</p>
						<p>电话：021-33315523</p>
						<p>邮箱：jaiyu.peng@blackarcgroup.com</p>
					</div>
				</div>
			</div> -->
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">各地文艺社</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">北京</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/beijing2.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>北京黑弧文艺社有限公司</b>
						<p>地址：北京市朝阳区百子湾路32号二十二院艺术区6号楼20号</p>
						<p>电话：010-53511056</p>
						<p>邮箱：lijun.zhu@blackarcgroup.com；</p>
						<p>yunxia.hao@blackarcgroup.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent mb-30">
						<p style="text-align:center;font-weight: bolder;color:black;font-size: 20px">深圳</p>
					</div>
					<div class="mcontent mb-30">
						<iframe width="960" height="380" frameborder="0" scrolling="no" src="{{asset('maps/shenzhen2.html')}}"></iframe>
					</div>
				</div>
			</div>
			<div class="row mcontent mb-30">
				<div class="col-md-12">
					<div class="bg-black txt-white txt-align-c p20">
						<b>深圳市黑弧文艺社艺术生活传媒有限公司</b>
						<p>地址：深圳市南山区华侨城创意文化园F1栋105A-2</p>
						<p>电话：0755-86095981</p>
						<p>邮箱：lei.liu@blackarcgroup.com</p>
					</div>
				</div>
			</div>
			<div class="row mb-30 mt-32">
				<div class="col-md-12">
					<img style="display:block;margin: 0 auto;" class="mb-30" src="{{asset('img/contact5.png')}}" alt="">
					<div class="mcontent">
						<p style="text-align:center;font-weight: bolder;color:black;">微信公众号</p>
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

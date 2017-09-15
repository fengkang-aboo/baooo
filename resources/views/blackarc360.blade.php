@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30" style="position: relative;">
					<img style="margin:0 auto;" src="{{asset('img/blackarc_0.png')}}" alt="">
					<a style="display: block;position: absolute;top: 40px;right:10px;" href="http://www.blackarc-ogilvy.com:2017/" target="_blank"><img style="margin:0 auto;" src="{{asset('img/blackarc_1.png')}}" alt=""></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<p class="mb-20" style="font-size:20px;color:black;">黑弧奥美是谁？</p>
						<p>黑弧奥美房地产整合行销传播机构成立于2007年，多年地产品牌经验，服务百家知名地产企业，成功推广了300多个地产项目，是建立国际化运作管理模式的集团广告公司。</p>
						<p>以360复合角度及视野，协助您最大化地管理传播效益的与奥美合并后，我们引入在全球运用了上百年、成功管理众多世界级品牌的工具——360°品牌管理，即将针对性的运用在中国地产行业，从公关、营销、品牌等全方位创造体验。</p>
						<p>黑弧奥美房地产整合行销传播集团合并于2006年9月，总部位于中国深圳，下辖华北、华东、华南、西南四大区域。</p>
						<p>集团的主要控股是全球最大的传播集团WPP（纳斯达克：WPPGY）所辖奥美整合行销传播集团与成立于1996年，拥有众多知名品牌伙伴，十三年本土地产管理经验，及无数杰出案例的黑弧广告传媒两家企业。</p>
						<p>现成为中国唯一具有国际背景的，以360°复合角度及视野，协助企业最大化管理传播绩效的专业房地产行销传播解决方案的提供者。</p>
						<p>集团在全国四大区域全面布局，各大区内分别构建一个完整的360°整合行销平台，为全国品牌地产伙伴提供贴身在地服务。</p>
						<p>以品牌战略高度，统领现有沟通手段，以黑弧奥美广告传媒为基础的同时，应对趋势，洞察需求，以精准实效为目标，</p>
						<p>于2009年合资组建：黑弧奥美房地产数码互动公司、黑弧奥美房地产公关顾问公司、黑弧奥美房地产传播渠道管理公司、黑弧奥美房地产环境互动公司、黑弧奥美房地产数据库行销顾问公司。</p>
						<p>2015年6月，黑弧奥美宣布暂停营业，股权正在重组中，期待新的启动。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<img style="margin:30px auto 0;" src="{{asset('img/black360_1.png')}}" alt="">
					<img style="margin:30px auto 0;" src="{{asset('img/black360_2.png')}}" alt="">
					<!-- <img style="margin:30px auto 0;" src="{{asset('img/black360_3.png')}}" alt=""> -->
					<img style="margin:30px auto 0;" src="{{asset('img/black360_4.png')}}" alt="">
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

@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="index_banner mb-10">
			<div class="swiper-container">
				<div class="list swiper-wrapper">
					<div class="item swiper-slide"><img src="{{asset('img/literature_9.png')}}" alt=""></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mt-32">
				<table>
					<tr>
						<td class="col-4" width="300" style="border:none">
							<img style="margin: 0 auto" src="{{asset('img/literature_10.png')}}" alt="">
						</td>
						<td class="col-8" style="border:none">
							<div class="mcontent" style="position: relative;">
								<b style="color:black;font-size:20px;">黑弧文艺社</b>
								<a style="display: block;position: absolute;top: -5px;right: 7px;z-index: 999" href="http://www.joyfamliy.com" target="_blank"><img style="margin:0 auto;" src="{{asset('img/blackarc_1.png')}}" alt=""></a>
								<p>&nbsp;</p>
								<p>黑弧文艺社艺术生活传媒通过社区的文化艺术内容运营及服务，与中国最大量的社区家庭建立“连接”，打造群分时代下泛社区O2O平台，开发商的社区会所资源利用的渠道化，文化艺术生活化内容需求植入的渠道化，泛社区家庭用户社群化、数据化、媒体化、终端化。</p>
								<p>&nbsp;</p>
								<p>群分时代下极具行业壁垒针对社区家庭的泛社区O2O的文化艺术生活化平台，一个线上线下以“艺术生活化”极致感受体验的空间，同时也是一个集中艺术、音乐、戏剧、阅读、美食、生活艺术、艺术生活为内容的体验集合地，它以80到90后家庭为单位的主力人群，这群人崇尚人文关怀喜欢文化艺术融入生活的生活模式，相信文化艺术根植的DNA对于身心灵成长的价值，并愿与伴侣和孩子共享文化艺术融入生活，并坚信人文关怀，文化艺术的种子植入自身，家庭及孩子的共生价值。</p>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">价值消费</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/literature_0.png')}}" alt="">
					<div class="mcontent">
						<p>黑弧集团依托长期服务的开发商,在国内一线城市商业地产和文旅地产中布局，利用一线城市中众多中、高端社区内闲置的空间，经国内外顶级专家设计，建造成嵌套在固定场所中的活动空间，将这种“固定+活动”组合的空间定义为“社区文艺社”。</p>
						<p>文艺社的价值消费是以运营社区内每个家庭的文化艺术内容和服务为核心，与中国最大量的中、高档社区家庭建立“连接”。主要以80-90后家庭为单位的主力人群，将文艺社建设成为离每个家庭最近的“社区文化会客厅”和“社区教育培训空间”。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">文化艺术</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/literature_1.png')}}" alt="">
<!-- 						<img class="mb-30" src="{{asset('img/literature_2.png')}}" alt="">
 -->					<div class="mcontent">
						<p>城市社群家庭的日常生活和社交离不开文化艺术元素，文艺社的线下运营核心就是以家庭为单位，集音乐、美术、表演、阅读、展览、儿童艺术培训为内容的体验馆，突出文艺生活及美食的即时消费。</p>
						<p>文艺社秉承“艺术生活化、生活艺术化”的理念，形成具有行业壁垒的泛社区O2O文化艺术生活化平台。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">社区体验</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/literature_3.png')}}" alt="">
					<div class="mcontent">
						<p>文艺社由社区内固定的建筑空间和嵌套在内的七个独立“盒子”组装而成。将会为社区内的每个家庭带来文化艺术方面的美好体验。</p>
						<p>七个装有轮子的“盒子”可以被拉到社区内的各个角落，成为社区居民休闲活动的时尚空间市集。七个“盒子市集”分别为：图书盒子、卓儿音乐学堂盒子、手作盒子、画室盒子、瑜伽盒子、美食盒子、文艺剧场盒子及展览空间。</p>
					</div>
				</div>
				<div class="col-md-12 mt-32">
					<img class="mb-10" src="{{asset('img/literature_11.png')}}" alt="">
					<div class="col-md-4">
						<div class="mcontent txt-align-c">
							各类课程预约、活动预约
						</div>
					</div>
					<div class="col-md-4">
						<div class="mcontent txt-align-c">
							通过视频、音频、朗读会、书展的形式呈现
						</div>
					</div>
					<div class="col-md-4">
						<div class="mcontent txt-align-c">
							盒子内商品的售卖
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-32">
					<img class="mb-30" src="{{asset('img/literature_4.png')}}" alt="">
					<div class="mcontent">
						<p>固定空间为迷你音乐厅和社区美术馆的综合体，是社区内居民艺术实践和各类IP发布会的空间。迷你音乐厅内会设置100个左右的固定座椅，具备社区小剧场功能，可以为社区内的家庭提供实验话剧、儿童剧、艺术电影（社区院线）、音乐演艺现场、音乐大师班培训等群众文化活动。社区美术馆能够举办基于社区居民的小型艺术展览，也将具有发布及交易的画廊功能。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">精准数据</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/literature_5.png')}}" alt="">
					<div class="mcontent">
						<p>文艺社的发展将以建立黑弧群大数据银行为终极目标，这将是黑弧集团根本和战略性的盈利根基，是基于价值消费为核心，以社区为单位，以社区群体文化内容体验为基础，以智能价值计算法为驱动，建立国内首家基于社区家庭的精准大数据平台。</p>
						<p>通过社区文化艺术及媒体内容运营，在智能算法引擎为驱动的大数据分析挖掘前提下，产生更加精准的用户消费倾向预测，从而服务未来中国家庭的消费升级和广告主精准的品牌传播。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">招商管理</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="mb-30" src="{{asset('img/literature_6.png')}}" alt="">
					<div class="mcontent">
						<p>文艺社以社区家庭客户会员制的方式进行运营，通过众创众筹形式滚动发展，是国内首家以社区家庭为单位的分层会员制俱乐部，首创国内泛社区的文化艺术生活化全场景体验基地和艺术实践基地。</p>
						<p>文艺社的运营可以以地区和社区为运营单位与黑弧集团进行接洽，申请业务代理。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">全国布局</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p style="text-align:center;font-weight: bolder;color:black;">北京</p>
					</div>
					<img class="mb-30" src="{{asset('img/literature_7.png')}}" alt="">
				</div>
				<!-- <div class="col-md-12">
					<img class="mb-30" src="{{asset('img/contact4.png')}}" alt="">
				</div> -->
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
					<div class="mcontent">
						<p style="text-align:center;font-weight: bolder;color:black;">深圳</p>
					</div>
					<img class="mb-30" src="{{asset('img/literature_8.png')}}" alt="">
				</div>
				<!-- <div class="col-md-12">
					<img class="mb-30" src="{{asset('img/contact4.png')}}" alt="">
				</div> -->
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

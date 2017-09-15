@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="index_banner mb-10" style="background: #fff">
<!-- 		<style type="text/css">
			.banner1_1{background: url({{asset('img/banner1-1.png')}}) center no-repeat;
					width:362px;height:334px;position: absolute;top:50%;left:50%;margin:-167px 0 0 -181px;}
			.banner1_2{background: url({{asset('img/banner1-2.png')}}) center no-repeat;
					transform-origin: 0% 0%;-webkit-transform-origin: 0% 0%;
					width:498px;height:479px;position: absolute;top:0;left:50%;margin:-0px 0 0 -185px;}

			.banner2_1{
					width:225px;height:337px;position: absolute;top:50%;left:50%;margin:-188.5px 0 0 -132.5px;
					text-align: center;color: #fff;
				}
			.banner2_1>p{
				line-height: 25px;
			}
			.banner2_2{background: url({{asset('img/banner2_1.png')}}) center no-repeat;
					transform-origin: 0% 0%;-webkit-transform-origin: 100% 0%;width:583px;height:500px;position: absolute;top:0;left:50%;margin:-0px 0 0 -98px;}
			.banner2_3{background: url({{asset('img/banner2_2.png')}}) center no-repeat;
					transform-origin: 0% 0%;-webkit-transform-origin: 0% 0%;width:583px;height:500px;position: absolute;top:0;left:50%;margin:-0px 0 0 -543px;}

			.banner3_1{background: url(http://www.baooo.cn/img/banner1-1.png) center no-repeat;
				width:362px;height:334px;position: absolute;top:50%;left:55%;margin:-167px 0 0 -181px;}
			.banner3_2{background: url(http://www.baooo.cn/img/banner1-2.png) center no-repeat;
				transform-origin: 0% 0%;-webkit-transform-origin: 0% 0%;width:498px;height:479px;position: absolute;top:0;left:55%;margin:-0px 0 0 -185px;}
			.banner3_3{width:325px;height:437px;position: absolute;top:50%;left:55%;margin:-50px 0 0 -550px;text-align: left;color: #fff;}
			.banner3_3>p{
				line-height: 40px;font-size: 24px}
		</style> -->
			<div class="swiper-container">
				<div class="list swiper-wrapper">
					<div class="item swiper-slide">
						<img src="{{asset('img/banner1.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner2.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner3.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner4.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner5.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner6.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner7.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner8.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner9.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner10.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner11.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner12.jpg')}}" alt=""> 
					</div>
					<div class="item swiper-slide">
						<img src="{{asset('img/banner13.jpg')}}" alt=""> 
					</div>

				</div>
				<div class="swiper-pagination"></div>
				<div class="ctrl clearfix">
					<div class="up"></div>
					<div class="down"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-6">
					<div class="mcontent" style="padding: 0 10px">
					<p style="color:black;font-size:20px;text-align: center;font-weight: 700;">黑弧悦文化创意产业投资集团</p>
						<p>黑弧文化创意产业集团创办于1996年，控股运营多家文化传媒企业，其中，囊括数字行销以及广告传媒版块知名品牌：黑弧奥美广告传媒、黑弧数码文化传媒。</p>
						<p>基于20年文化传媒领域的深耕，以及对消费者需求及洞察的深入理解。黑弧.悦文化创意产业集团在2017年开始的三年计划中围绕以社群经济“文艺生活化，生活文艺化”重度垂直领域的深耕战略为引领：@{{this.c1show?'':'...'}}
						<b style="font-weight: normal;" v-show="c1show">投资运营以社群精准数据银行为核心，以泛社区中高端消费人群生活方式、跨界音乐.文化.艺术为方向，建立以“文艺社”O2O社区文化艺术生活平台及文化艺术IP的实践基地；以移动互联网模式，深度发展以互联网+音乐.文化.艺术.生活美学.美食的垂直内容IP及平台的深度运营，黑弧文化创意产业投资由黑弧悦音乐文化发展、黑弧文艺社艺术生活传媒、黑弧文化创意产业投资，以及控股黑弧数码文化传媒股份有限公司和黑弧奥美广告传媒有限公司。</b></p>
						<p v-show="c1show">同时，深度耕耘的社群经济，社群数据银行以及文化艺术内容版块，又将为黑弧数码传媒及黑弧奥美广告传媒提供内容，数据以及未来投放平台，以期实现黑弧悦文化闭环的生态联动。</p>
						<div class="row">
							<div class="col-md-12 txt-align-c">
								<div class="mbtm_more" style="margin: 15px auto;" @click="this.showc1()">@{{this.c1show?'折叠全文':'展开全文'}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mcontent" style="padding: 0 10px">
						<p style="color:black;font-size:20px;text-align: center;font-weight: 700;">黑弧数码文化传媒股份有限公司</p>
						<p>公司成立于2010年，作为在“文化内容产出＋创意传播＋数字行销”领域实效行销的数码传媒服务商，专注于“以家为核心的中国高端价值耐用品”这一重度垂直领域。目前公司主营业务是为房地产企业提供整合行销方案，具体包括为房地产企业提供传播行销服务、案场体验行销服务、圈层公关行销服务、数据库行销服务和文化创意内容行销服务等服务。在该重度垂直领域中房地产企业所拥有的社区物业进行整合行销（特指营@{{this.c2show?'':'...'}}<b style="font-weight: normal;" v-show="c2show">销体系中广告策划推动及数字行销和创意传播的综合系统），主要业务范畴为品牌策划及体验传播，数码传播（包含互动传播策略，社会化营销，搜索引擎营销，手机及多媒体营销策略），客户关系管理（潜客挖掘，忠诚度维护，会员俱乐部运营策略等），以及案场体验行销，圈层体验行销，数据行销，文化内容体验行销等作为主要服务内容。</b></p>
						<p v-show="c2show">公司成立至今，诸多产品案例凭借丰富的创造力在数码互动全案服务领域中积累了一定的影响力，其中2011年和万科集团共同打造“优乐社区”、“史上最牛维修工”等案例，荣获全球实效类别最高奖项“艾菲奖”大中华区“高端产品类别”的中国区金奖以及小预算数字行销的铜奖。</p>
						<p v-show="c2show">未来黑弧数码将布局社区数字数据传媒平台，借助黑弧数码服务中国房地产商整合行销领域20年经验和资源，以及对参与创造的社区以及购房家庭的深度理解，透过“黑弧牛team＋文化社媒投放宝”平台持续服务于地产项目的售前售中售后的整合行销服务，持续利用地产商创建社区的闲置会所资源和文旅文商地产项目对文化内容以及客户引流的刚性需求，以地产售后内容产品的形式，同步深耕植入以泛社区中高端消费家庭的生活方式，以艺术生活化，生活艺术化为内容打造“悦文化，越生活”O2O体验品牌。基于价值消费为核心，以社区为单位，以文化内容体验为基础，以智能价值计算法为驱动的，在精准用户画像的数据价值消费平台上，而衍生的社群经济和精准数据媒体的通路平台，成为以“社区家庭用户端为核心领域”的数码实效行销及数码新媒体平台的领导品牌。</p>
						<p v-show="c2show">公司自2010年创立以来，长期固定服务的客户涵盖万科集团、保利集团、中信集团、招商地产、华润集团，华侨城集团，九龙仓，新世界地产等众多国内及香港知名的品牌上市企业，在房地产广告业内享有较高知名度，得到客户的信任和青睐。</p>
						<div class="row">
							<div class="col-md-12 txt-align-c">
								<div class="mbtm_more" style="margin: 15px auto;" @click="this.showc2()">@{{this.c2show?'折叠全文':'展开全文'}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mb-30">
					<img style="margin:0 auto;" src="{{asset('img/index_1.png')}}" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c">
					<img style="margin:0 auto;" src="{{asset('img/index_2.png')}}" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p style="font-weight: bold;margin-top: 30px">黑弧奥美广告传媒有限公司</p>
						<p>黑弧奥美房地产整合行销传播机构成立于2007年，多年地产品牌经验，服务百家知名地产企业，成功推广了300多个地产项目，是建立国际化运作管理模式的集团广告公司。与奥美合并后，我们引入在全球运用了上百年、成功管理众多世界级品牌的工具——360°品牌管理，即将针对性的运用在中国地产行业，从公关、营销、品牌等全方位创造体验。</p>
						<p>黑弧奥美房地产整合行销传播集团合并于2006年9月，总部位于中国深圳，下辖华北、华东、华南、西南四大区域。集团的主要控股是全球最大的传播集团WPP（纳斯达克：WPPGY）所辖奥美整合行销传播集团与成立于1996年，拥有众多知名品牌伙伴，十三年本土地产管理经验，及无数杰出案例的黑弧广告传媒两家企业。现成为中国唯一具有国际背景的，以360°复合角度及视野，协助企业最大化管理传播绩效的专业房地产行销传播解决方案的提供者。</p>
						<p>集团在全国四大区域全面布局，各大区内分别构建一个完整的360°整合行销平台，为全国品牌地产伙伴提供贴身在地服务。</p>
						<p>以品牌战略高度，统领现有沟通手段，以黑弧奥美广告传媒为基础的同时，应对趋势，洞察需求，以精准实效为目标，于2009年合资组建：黑弧奥美房地产数码互动公司、黑弧奥美房地产公关顾问公司、黑弧奥美房地产传播渠道管理公司、黑弧奥美房地产环境互动公司、黑弧奥美房地产数据库行销顾问公司。</p>
						<p>2015年6月，黑弧奥美宣布暂停营业，股权正在重组中，期待新的启动。</p>
						<p style="font-weight: bold;margin-top: 30px">黑弧悦音乐文化（北京）有限公司</p>
						<p>黑弧悦音乐文化（北京）有限公司着力打造国内最大的少儿社区音乐教育网络平台。通过整合高端音乐资源，以中国音乐母语教育模式完成中国元素原创音乐研究，分别以社区音乐学校及音乐活动会所充分调动国内顶尖的音乐资源。</p>
						<p>在社区音乐学校中运用先进的教学理念，打造一系列科学、丰富、有趣的音乐课程，并由国内外知名大师亲自授课，利用互联网＋的传播方式，整合线上线下资源，通过“与大师面对面”，变革儿童音乐教育现行模式。</p>
						<p>同时在社区音乐活动会所以培养儿童音乐乐趣为出发点，提高全民音乐素养，组织生动有趣又意义深远的线下音乐活动。通过以社区为单位，组织小型音乐会，音乐剧排练汇演的方式，强化乐童的演出经验，增强乐童的音乐学习兴趣并丰富社区的文化生活，提升社区生活的文化质量。</p>
						<p>作为黑弧悦音乐文化公司第一个产品，卓儿音乐学堂以持续创造音乐素养及技能教育的IP教程视频为核心，给“相信音乐能为孩子带来丰盈人生”的5岁到12岁乐童家庭，提供一个首家集IP内容、国家级音乐大师和中国音协专业学会论证资质的优质老师、考级参赛APP一键服务、线下互动音乐教室及乐童参演平台的在线的悦教平台。</p>
						<p>卓儿音乐学堂以“音乐丰盈人生”的悦教价值观为使命，不止授鱼更重要的是授渔，培养更多的孩子真正地爱上音乐，享受音乐所带来丰盈的人生。</p>
						<p>卓儿音乐学堂致力于成为一个提供“音乐悦教”全程悦教的IP内容、平台服务、独立产品的重度垂直机构，成为持续创造以全网全屏播放为目标的IP内容平台和媒体平台，以及音乐悦教服务平台所搭建的社群为核心的共享经济平台。</p>
						<p style="font-weight: bold;margin-top: 30px">北京黑弧文艺社有限公司</p>
						<p>黑弧文艺社艺术生活传媒通过社区的文化艺术内容运营及服务，与中国最大量的社区家庭建立“连接”，打造群分时代下泛社区O2O平台，开发商的社区会所资源利用的渠道化，文化艺术生活化内容需求植入的渠道化，泛社区家庭用户社群化、数据化、媒体化、终端化。</p>
						<p>群分时代下极具行业壁垒针对社区家庭的泛社区O2O的文化艺术生活化平台，一个线上线下以“艺术生活化”极致感受体验的空间，同时也是一个集中艺术、音乐、戏剧、阅读、美食、生活艺术、艺术生活为内容的体验集合地，它以80到90后家庭为单位的主力人群，这群人崇尚人文关怀喜欢文化艺术融入生活的生活模式，相信文化艺术根植的DNA对于身心灵成长的价值，并愿与伴侣和孩子共享文化艺术融入生活，并坚信人文关怀，文化艺术的种子植入自身，家庭及孩子的共生价值。</p>
					</div>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 txt-align-c mh1 mb-30">集团愿景</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<img style="margin:0 auto;" src="{{asset('img/index_4.png')}}" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<p>中国首家基于价值消费为核心，</p>
						<p>以社区为单位，以文化内容体验为基础，以智能价值计算法为驱动的，</p>
						<p>在具精准用户画像的数据价值消费平台上，而衍生的社群经济和精准数据媒体的通路平台。</p>
					</div>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 txt-align-c mh1 mb-30">主要业务全国布局</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mcontent">
						<img class="" src="{{asset('img/index_5.png')}}" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="mcontent">
						<p style="margin-left: 30px;">四大区域全面辐射全国地产项目<br />全面实施360管理传播绩效</p>
						<p style="margin-left: 30px;">华北<br />北京／大连／沈阳／青岛／天津</p>
						<p style="margin-left: 30px;">华东<br />上海／苏州／杭州／无锡／南京</p>
						<p style="margin-left: 30px;">华南<br />广州／深圳</p>
						<p style="margin-left: 30px;">西南<br />成都／昆明</p>
					</div>
				</div>
			</div>
			<div class="row mt-32 mb-40">
				<div class="col-md-6">
					<div class="mcontent">
						<img class="" src="{{asset('img/index_6.png')}}" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="mcontent">
						<p style="margin-left: 30px;margin-top: 50px">中国内地唯一具有全国布局及全国服务能力的房地产专业行销机构，同时也是最大规模的专业行销机构。目前在北上广深、成都、苏州、西安、天津等地设有分支机构。每年接触超过700个不同的房地产项目及服务超过100个项目。在重点城市的前20强的房地产品牌，黒弧数码的市场占有率超过70%。</p>
						<p style="margin-left: 30px;">&nbsp;&nbsp;</p>
						<p style="margin-left: 30px;">业务实际覆盖：北京、上海、广州、深圳、成都、昆明、重庆、西安、苏州、无锡、常州、南京、徐州、石家庄、保定、廊坊、天津、惠州、海南、贵阳等数十个中心城市……</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(function(){
		window.indexBannerSwiper = new Swiper('.index_banner .swiper-container', {
			autoplay: 5500,
			pagination : '.swiper-pagination',
			loop:true,
			grabCursor:true,
			speed:1000,
			paginationClickable:true
			// onSlideChangeEnd(swiper){
			// 	var index=indexBannerSwiper.activeIndex;
			// 	if(index==0){
			// 		animate1();
			// 	}else if(index==1){
			// 		animate2();
			// 	}else if(index==2){
			// 		animate3();
			// 	}
			// },
			// onSlideChangeStart(swiper){
			// 	TweenMax.killAll();
			// 	initBannerAnimate();
			// }
		});
		$('.index_banner .ctrl .up').click(function(){
			if(indexBannerSwiper.isBeginning){
				indexBannerSwiper.slideTo(indexBannerSwiper.slides.length-1);
			}else{
				indexBannerSwiper.slidePrev();
			}
			indexBannerSwiper.startAutoplay();
		});
		$('.index_banner .ctrl .down').click(function(){
			if(indexBannerSwiper.isEnd){
				indexBannerSwiper.slideTo(0);
			}else{
				indexBannerSwiper.slideNext();
			}
			indexBannerSwiper.startAutoplay();
		});


		// function initBannerAnimate(){
		// 	TweenMax.to('.banner1_1',0, { alpha: 0,scale:1,ease:Back.easeOut});
		// 	TweenMax.to('.banner1_2',0, { alpha: 0,scale:1,ease:Expo.easeOut});

		// 	TweenMax.to('.banner2_2,.banner2_3',0, { alpha: 0,scale:1,ease:Expo.easeOut});
		// 	TweenMax.to('.banner2_1>p',0, { alpha: 0,scale:1,y:200,ease:Back.easeOut})

		// 	TweenMax.to('.banner3_1',0, { alpha: 0,scale:1,ease:Expo.easeOut});
		// 	TweenMax.to('.banner3_2',0, { alpha: 0,scale:1,ease:Expo.easeOut});
		// 	TweenMax.to('.banner3_3',0, { alpha: 0,scale:1,ease:Back.easeOut})

		// }
		// initBannerAnimate();
		// function animate1(){
		// 	TweenMax.to('.banner1_1',1.5, { alpha: 1,scale:1,delay:.5,ease:Back.easeOut});
		// 	TweenMax.to('.banner1_2',1, { alpha: 1,scale:1,delay:1.5,ease:Expo.easeOut});
		// }
		// function animate2(){
		// 	TweenMax.to('.banner2_2,.banner2_3',.8, { alpha: 1,scale:1,ease:Linear.easeOut,onComplete:function(){
		// 		TweenMax.to('.banner2_2',1.5, { alpha: 1,scale:1,rotation:-8,yoyo:true,repeat:-1,ease:Linear.easeOut})
		// 		TweenMax.to('.banner2_3',1.5, { alpha: 1,scale:1,rotation:8,yoyo:true,repeat:-1,ease:Linear.easeOut})
				
		// 			for(var i=0;i<$('.banner2_1>p').length;i++){
		// 				TweenMax.to('.banner2_1>p:nth('+i+')',1, { alpha: 1,scale:1,y:0,delay:1*i,ease:Linear.easeOut})
		// 			}
		// 		}})
		// }
		// function animate3(){
		// 	TweenMax.to('.banner3_1',1, { alpha: 1,scale:1,delay:.5,ease:Back.easeOut});
		// 	TweenMax.to('.banner3_2',.8, { alpha: 1,scale:1,delay:1.8,ease:Expo.easeOut});
		// 	TweenMax.to('.banner3_3',.8, { alpha: 1,scale:1,delay:2.3,ease:Expo.easeOut});
		// }
		// animate1();

		// var slideWidth=$(window).width();
		// var mix=slideWidth/1920;
		// if(mix<1){
		// 	$('.banner1_1,.banner1_2,.banner2_1,.banner2_2,.banner2_3,.banner3_1,.banner3_2,.banner3_3').css({
		// 		'-webkit-transform':'scale('+mix+')',
		// 		'transform':'scale('+mix+')'
		// 	});
		// }
	});
	var indexVue = new Vue({
		el:"#indexpage",
		data:{
			c1show:false,
			c2show:false,

		},
		methods:{
			showc1:function() {
				this.c1show = !this.c1show;
			},
			showc2:function() {
				this.c2show = !this.c2show;
			}
		}
	});
	</script>
@endsection

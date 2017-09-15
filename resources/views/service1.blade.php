@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">360°品牌服务系统</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_6.png')}}" alt="">
						<p style="margin-top: 20px">360度品牌管理强调在“品牌与消费者的每一个接触点”上实行传播管理。 公司的品牌管理之道，是一个完整的作业过程，它确保所有的活动都能反映并忠于品牌，以及积极地去管理产品与消费者的关系。地产品牌360度传播视角，是公司长久以来通过上千案例积累下来的地产广告全方位推广模式。从土地、产品、消费者、品牌、形象、营销等6个大面，为客户实现精准定位，展现全方位最有实效的产品推广方案。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="font-size:20px;color: black;">创意传播 + 数字行销服务商</b>
						<p>黑弧整合6大业务技能，联动大数据</p>
						<p>深耕三大业务板块的创意传播</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_1.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="font-size:20px;color: black;">黑弧行业深耕一：房地产、住宅、社区</b>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_2.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="font-size:20px;color: black;">黑弧行业深耕二：银行、金融产品</b>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_3.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="font-size:20px;color: black;">黑弧行业深耕三：“家”核心产品及品牌</b>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p>汽车、家居、生活美学，教育…..类别品牌<br />以房地产高端购房客户及社区业主为依托，在B2B的服务过程中实现数据的积累并在社区业务中不断丰富，通过运营大数据，提供以社区家庭用户以“家”为核心的品牌及产品服务，品牌及渠道在区的深度深入推广，以精准实效的行销传播形式达成最大化的行销效能。</p>
					</div>
				</div>
			</div>

						<div class="row mt-32">
							<div class="col-md-12 txt-align-c mh1 mb-30">客户关系管理</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="mb-30" src="{{asset('img/service3_0.png')}}" alt="">
								<div class="mcontent">
									<p>为客户提供基于活动的用户互动行为分析与跟踪，基于用户行为和用户价值的特征刻画分群，对不同价值和行为用户群的营销建议等，从目标客户选择到营销效果评估，有效支撑在房地产互动营销中的各项数据服务，实现营销活动的最优化结果。
			</p>
								</div>
							</div>
						</div>
						<div class="row mt-32">
							<div class="col-md-12">
								<div class="mcontent">
									<img style="display:block;margin: 0 auto;" class="mb-30" src="{{asset('img/service3_1.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="row mt-32">
							<div class="w450 fl mb-30 mcontent">
								<img class="mb-20" src="{{asset('img/service3_2.png')}}" alt="">
								<p>新产品迭代开发：通过分析用户行为，定位目标用户人群，通过用户画像等手段找到用户需求，开发新产品。</p>
							</div>
							<div class="w450 fr mb-30 mcontent">
								<img class="mb-20" src="{{asset('img/service3_3.png')}}" alt="">
								<p>精准营销：产品已经有啦，是不是要分析分析用户的行为，找找我们的潜在用户，针对特定群体来进行营销。</p>
							</div>
						</div>
						<div class="row mb-30">
							<div class="w450 fl mb-30 mcontent">
								<img class="mb-20" src="{{asset('img/service3_4.png')}}" alt="">
								<p></p>
							</div>
							<div class="w450 fr mb-30 mcontent">
								<img class="mb-20" src="{{asset('img/service3_5.png')}}" alt="">
								<p></p>
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

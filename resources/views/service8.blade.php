@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">思维工具系统</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service5_10.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">蝶变2.0思考体系</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_4.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row mb-36">
				<div class="col-md-12">
					<div class="mcontent">
						<p>蝶变2.0是一套为广告创意设计者提供疏导创意思维的策略工具，解决市场定位及传播全过程的总览，通过全面对客户需求进行了解定位后，深度发掘客户的特质，并以此为导引，分析产品的市场和消费者群像，进行产品深度分析，深度挖掘出创意产品的时效性。在接触全新项目前期或者中期介入的项目均使用，适合体量较大，开发周期较长的项目使用。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">定位三角形</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_6.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">CRM管理系统</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<p>我们的CRM管理系统，最大化发掘客户潜力</p>
							<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_1.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">Fusion Stages</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<img class="mb-30" style="margin: 0 auto 30px;" src="{{asset('img/service8_5.png')}}" alt="">
							<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_2.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">数码生态系统</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_3.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">360传播</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<p>360°传播是新的一种整合。</p>
							<p>让不同的传播方式和渠道发挥共同作用，强化传播的有效性和经济效益。</p>
							<img class="mb-30 mt-32" style="margin: auto;" src="{{asset('img/service8_7.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">行销地产360</div>
				</div>
				<div class="row">
					<div class="col-md-12 txt-align-c mb-30">
						<div class="mcontent">
							<img class="mb-30" style="margin: auto;" src="{{asset('img/service8_8.png')}}" alt="">
						</div>
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




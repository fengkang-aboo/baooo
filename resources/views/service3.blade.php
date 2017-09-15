@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
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

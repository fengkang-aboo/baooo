@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mb-30 mt-32">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_1.png')}}" alt="">
						<div style="position: absolute;top: 100px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">价值</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	将珍视黑弧的有缘人连接在一起<br />帮他们实现自我价值
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_2.png')}}" alt="">
						<div style="position: absolute;top: 100px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">摘星计划</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	伸手摘星，点亮梦想<br />2017黑弧数码摘星计划-开放申请<br />黑弧数码2017年度校园招聘
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_4.png')}}" alt="">
						<div style="position: absolute;top: 100px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">新兵计划</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	新人培训<br />
							  	企业文化的传播与<br />
							  	专业知识的普及<br />
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_5.png')}}" alt="">
						<div style="position: absolute;top: 100px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">橄榄计划</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	总监预备役
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_6.png')}}" alt="">
						<div style="position: absolute;top: 130px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">大树计划</div>
							  <div class="col-md-12 txt-align-c mb-30">
								总经理级预备役							 
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite9_3.png')}}" alt="">
						<div style="position: absolute;top: 130px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">人才库</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	我们锁定行业及社会上的优秀人才<br />欢迎你的加入
							  </div>
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

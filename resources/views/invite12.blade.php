@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite12_1.png')}}" alt="">
						<div style="position: absolute;top: 100px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">岗位培训</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	在新的岗位上<br />
							  	会有清晰的上岗培训<br />
							  	有专业的学长带你成长
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-32">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite12_2.png')}}" alt="">
						<div style="position: absolute;top: 80px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">梯队培训</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	摘星计划--校园招聘<br />
							  	新兵计划--新人培训<br />
							  	橄榄计划--总监预备役<br />
							  	大树计划--总经理级预备役
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-32">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite12_3.png')}}" alt="">
						<div style="position: absolute;top: 80px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">黑弧大学堂</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	对于每一位员工来说<br />
							  	黑弧还是一个让你的专业<br />
							  	不断进阶的大学堂<br />
							  	公司提供各类专业培训
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12 mt-32">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite12_4.png')}}" alt="">
						<div style="position: absolute;top: 70px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">人力行政体系</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	从你加入的那一刻起<br />
							  	我们会努力使我们的<br />
							  	整套人力行政体系更专业<br />
							  	也希望你能有更好的体验
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

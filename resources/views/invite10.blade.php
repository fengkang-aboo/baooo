@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite10_1.png')}}" alt="">
						<div style="position: absolute;top: 100px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">面试邀请</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	面试时间 ／ 面试地点 ／<br />交通工具 ／ 面试流程
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite10_2.png')}}" alt="">
						<div style="position: absolute;top: 50px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">面试攻关</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	笔试：<br />
							  	不同专业设置相应笔试题目<br />
							  	面试：<br />
							  	人力/部门主管/总经理室或许<br />
							  	会有3轮面谈<br />
							  	也可能参加当月的大面试
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite10_3.png')}}" alt="">
						<div style="position: absolute;top: 100px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">入职前准备</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	薪资沟通<br />
							  	背景调查<br />
							  	体检<br />
							  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite10_4.png')}}" alt="">
						<div style="position: absolute;top: 160px;left: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">薪资、职级体系</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c" style="position: relative;">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/invite10_5.png')}}" alt="">
						<div style="position: absolute;top: 30px;right: 0px;width:345px">
							  <div class="col-md-12 txt-align-c mh1 mb-30">入职信</div>
							  <div class="col-md-12 txt-align-c mb-30">
							  	欢迎您加入黑弧……<br />
							  	您的职位：<br />
							  	工作地点：<br />
							  	您的到职日期： <br />
							  	您的薪酬组成：<br />
							  	……<br />
							  	您的假期：<br />
							  	您需准的入职资料
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

@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">社区文化艺术</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mb-30">
					<div class="mcontent">
						<b style="letter-spacing: 2px;font-size:18px;">[北京]</b>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<b>甜品师</b>
						<p>工作职责</p>
						<p>1、热爱烘焙行业，接受北京和深圳的出差工作安排，前期负责北京店的筹备开业，能教授教学西点、蛋糕、面包培训交流；</p>
						<p>2、对工作认真负责，热爱本职工作，有团队合作精神，为人踏实，积极肯干；</p>
						<p>3、能熟练制作各种西式糕点，包括面包、蛋糕、饼干、西式甜点蛋糕等各类西点；</p>
						<p>4、有较强的创新意识，能认真钻研业务，不断提高西点制作的技术水平。</p>
						<b>厨房主厨</b>
						<p>工作职责</p>
						<p>1、有五星级酒店和知名西餐厅工作经验，懂食品营养学；</p>
						<p>2、负责北京及深圳店的筹备开业，接受出差工作安排；</p>
						<p>3、负责每月新品开发，员工培训，厨房人员日常行政管理，操作规范和标准流程管理；</p>
						<p>4、对厨房出品、质量、食材成本、损耗，能源损耗直接负责。妥善处理客人投诉，作出相应调整；</p>
						<p>5、有良好表达能力，能教授兴趣厨艺班者优先。了解精品西餐流行趋势，结合时令开发食材和菜品，有创业精神能承受压力。</p>
					@{{this.c1show?'':'...'}}</div>
					<div  v-show="c1show" class="mcontent">
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c">
					<div class="mbtm_more" @click="this.showc1()">@{{this.c1show?'折叠全文':'展开全文'}}</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	var indexVue = new Vue({
		el:"#indexpage",
		data:{
			c1show:false,
			c2show:false,
			c3show:false,
			c4show:false
		},
		methods:{
			showc1:function() {
				this.c1show = !this.c1show;
			},
			showc2:function() {
				this.c2show = !this.c2show;
			},
			showc3:function(){
				this.c3show = !this.c3show;
			},
			showc4:function(){
				this.c4show = !this.c4show;
			}
		}
	});
	</script>
@endsection

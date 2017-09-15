@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">科技运营支撑</div>
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
						<b>PHP高级开发工程师</b>
						<p>岗位职责</p>
						<p>1、公司核心互联网金融项目的研发工作；</p>
						<p>2、参与系统设计方面的工作，并撰写技术文档；</p>
						<p>3、新技术的研究，汇报，实施以及培训工作；</p>
						<p>4、移动互联网产品服务端程序设计与开发；</p>
						<P>5、服务端系统性能优化,后台与各项目接口的设计与开发；</P>
						<P>6、参与项目的开发管理工作。</P>
						<p>岗位要求</p>
						<p>1、具有3年以上独立PHP开发经验；</p>
						<p>2、熟悉mysql，包括数据库设计,速度优化；</p>
						<p>3、熟悉PHP常用框架，thinkphp, Yii ，Lavarel等；</p>
						<p>4、具有独立处理前端页面的能力，html ,css ，JavaScript熟练；</p>
						<P>5、具有较强的团队意识，高度的责任感，对工作积极严谨，勇于承担压力；</P>
						<P>6、有良好的沟通和学习能力、有较强的团队协作能力以及快速解决问题的能力。</P>
						<b>UI</b>
						<p>岗位职责</p>
						<p>1、负责APP、小程序、网站页面的设计、切图，优化网站页面，并为公司新产品与新功能提供创意及设计方案；</p>
						<p>2、跟产品沟通，配合产品及开发人员进行网站、app的策划制作；</p>
						<p>3、参与产品的交互模型构建和模块功能设计 ；</p>
						<p>4、公司交付的其他设计相关工作。</p>
						<p>岗位要求</p>
						<p>1、艺术设计专业背景，本科以上学历； </p>
						<p>2、3-4年以上工作经验，品牌公司背景优先 ；</p>
						<p>3、能对产品设计需求良好的理解能力 ；</p>
						<p>4、精通Axure、viso熟练使用photoshop、Sketch、PowerPoint 、AI
熟练掌握div+css布局,了解目前一些先进的web前端技术（javascript、jquery等）；</p>
						<P>5、熟练使用网页设计与网页制作软件，以及一些第三方软件和相关工具软件（PS,DW，FLASH等）；</P>
						<P>6、能够独立完成网站设计+前端代码编写，有实际上线作品；</P>
						<p>7、有手机页面的设计和切图的作品，有较强的沟通能力和团队协助能力，会移动端的优先。</p>
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

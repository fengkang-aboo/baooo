@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">文化概要</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<p>Here’s what David Ogilvy had to say on the subject.</p>
						<p>“我们注意到充满活力及乐趣的广告公司似乎更能产生大创意......</p>
						<p>如果你确实不能从广告工作中得到乐趣的话，那么请试着从事能让你身心愉快的其他工作，因为我们大家都只活一次。”</p>
						<p class="mb-30">——大卫▪奥格威</p>
					</div>
					<div class="mcontent">
						<img class="mb-30" src="{{asset('img/img28.jpg')}}" alt="">
						<p class="mb-40">快乐的工作、快乐的生活、快乐你生命的每一刻。我们用快乐去感染自己和伙伴。我们因为快乐而有所不同，在黑弧数码，你应该相信快乐会带给你更多的工作乐趣，也会让你成为团队中最受欢迎的成员。</p>
						<img class="mb-30" src="{{asset('img/img29.jpg')}}" alt="">
						<p class="mb-40">它能让我们赢得自己最大的价值，赢得客户最大的尊重。我们相信专业无处不在，你不光是体现你现在的专业，但更要了解你如何透过相关专业的提升而令你更专业。黑弧数码是房地产全传播的专业服务商，以有效管理传播效益并肩客户行销团队，全面提升行销业绩为己任，懂地产，懂产品，懂行销，懂市场，懂客户，懂买家，懂360°全传播是我们专业每一步的体现，“懂行销的传播专家”是黑弧数码对每一个专业人的基准要求。</p>
						<img class="mb-30" src="{{asset('img/img30.jpg')}}" alt="">
						<p class="mb-40">我们鼓励有团队明星，但不主张个人英雄主义，坚信的只有团队力量。追求团队的密切合作，与团队每一位成员共同成长。我们相信，身边的每一位伙伴都很棒！</p>
						<img class="mb-30" src="{{asset('img/img31.jpg')}}" alt="">
						<p class="mb-40">我们用专业为客户取得最大的价值，为我们的企业创造最大的价值，同时也在为我们自己创造价值。随时惊醒自己对于团队的价值所在，警醒我们为客户创造的价值所在，当我们懂得自省有无最大化创造价值时，我们才会超越当下创造更大的价值。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">知识力量</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p>黑弧利用20年的行业经验和营销专业知识并借助科技平台，为广告主提供标准全案服务和自媒体数码互动服务，经过被量化的策略提案沟通会议等作业过程，最终输出成大众传播及数据互动作品。通过该服务帮助广告主，面向消费树立品牌传递信息并引导用户的消费行为。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">摘星计划</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p>黑弧利用20年的行业经验和营销专业知识并借助科技平台，为广告主提供标准全案服务和自媒体数码互动服务，经过被量化的策略提案沟通会议等作业过程，最终输出成大众传播及数据互动作品。通过该服务帮助广告主，面向消费树立品牌传递信息并引导用户的消费行为。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">大树计划</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="mcontent">
						<p>黑弧利用20年的行业经验和营销专业知识并借助科技平台，为广告主提供标准全案服务和自媒体数码互动服务，经过被量化的策略提案沟通会议等作业过程，最终输出成大众传播及数据互动作品。通过该服务帮助广告主，面向消费树立品牌传递信息并引导用户的消费行为。</p>
					</div>
				</div>
			</div>
			<div class="row mt-32">
				<div class="col-md-12 txt-align-c mh1 mb-30">黑弧智库</div>
			</div>
			<div class="row mb-300">
				<div class="col-md-12">
					<div class="mcontent">
						<p>黑弧利用20年的行业经验和营销专业知识并借助科技平台，为广告主提供标准全案服务和自媒体数码互动服务，经过被量化的策略提案沟通会议等作业过程，最终输出成大众传播及数据互动作品。通过该服务帮助广告主，面向消费树立品牌传递信息并引导用户的消费行为。</p>
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

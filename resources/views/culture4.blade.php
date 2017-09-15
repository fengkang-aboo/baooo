@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">知识力量</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-30 mcontent">
					<div id="id_video_container_9031868223056838822" style="width:100%;height:748px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223056838822","app_id":"1253974651","width":1024,"height":768,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223056838822", option ); })() </script>
					<p>知品中心培训视频</p>
				</div>
			</div>

			<div class="row">
					<div class="col-md-12 txt-align-c mh1 mb-30">出版刊物</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-3">
					<div class="mcontent">
						<img class="" src="{{asset('img/culture_13.png')}}" alt="">
						<p>2011《红与黑》</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mcontent">
						<img class="" src="{{asset('img/culture_14.png')}}" alt="">
						<p>2010《黑奥观点》</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mcontent">
						<img class="" src="{{asset('img/culture_15.png')}}" alt="">
						<p>2009《致胜360》</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="mcontent">
						<img class="" src="{{asset('img/culture_16.png')}}" alt="">
						<p>2007“大剪刀”大画册</p>
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

@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
<!-- 		<div class="row">
			<div class="col-md-12 txt-align-c mh1 mb-30">黑弧电影制片厂出品</div>
		</div> -->
		<div class="row" style="padding-top: 30px">
			<div class="col-md-6 mb-30 mcontent">
				<div id="id_video_container_9031868223033996064" style="width:470px;height:376px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223033996064","app_id":"1253974651","width":720,"height":576,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223033996064", option ); })() </script>
				<p>黑弧2011年-让广告飞</p>
			</div>
			<div class="col-md-6 mb-30 mcontent">
				<div id="id_video_container_9031868223033996202" style="width:470px;height:376px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223033996202","app_id":"1253974651","width":720,"height":576,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223033996202", option ); })() </script>
				<p>黑弧2011年-客户来了</p>
			</div>
			<div class="col-md-6 mb-30 mcontent">
				<div id="id_video_container_9031868223033995775" style="width:470px;height:376px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223033995775","app_id":"1253974651","width":720,"height":576,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223033995775", option ); })() </script>
				<p>黑弧2008年-叫春</p>
			</div>
			<div class="col-md-6 mb-30 mcontent">
				<div id="id_video_container_9031868223033995640" style="width:470px;height:376px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223033995640","app_id":"1253974651","width":720,"height":576,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223033995640", option ); })() </script>
				<p>黑弧2005年</p>
			</div>
			<div class="col-md-6 mb-30 mcontent">
				<div id="id_video_container_9031868223033995570" style="width:470px;height:376px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223033995570","app_id":"1253974651","width":720,"height":576,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223033995570", option ); })() </script>
				<p>黑弧2004年</p>
			</div>
			<div class="col-md-6 mb-30 mcontent">
				<img style="" class="" src="{{asset('img/culture_17.png')}}" alt="">
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

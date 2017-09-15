@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak style="background-color: #fff">
		<div class="container">
            <div class="container">

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">保利香雪山沟通传播策略</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219291560" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219291560","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219291560", option ); })() </script>
                    </div>
                </div>

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">保利香雪山创意城市别墅推广建议案</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219291558" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219291558","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219291558", option ); })() </script>
                    </div>
                </div>

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">保利西海岸传播策略</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219290906" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219290906","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219290906", option ); })() </script>
                    </div>
                </div>

                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">保利西海岸年终结案</div>
                </div>
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219291553" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219291553","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219291553", option ); })() </script>
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

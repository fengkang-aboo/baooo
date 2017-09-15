@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak style="background-color: #fff">
		<div class="container">
            <div class="container">
                <div class="row mt-32">
                    <div class="col-md-12 txt-align-c mh1 mb-30">我的日子 苏州</div>
                </div>
                <div class="row">
                    <div class="col-md-12 txt-align-c mb-30">
                        <div id="id_video_container_9031868223219542603" style="width:1000px;height:562px;"></div><script src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"></script> <script type="text/javascript"> (function(){ var option ={"auto_play":"0","file_id":"9031868223219542603","app_id":"1253974651","width":1000,"height":562,"https":1}; /*调用播放器进行播放*/ new qcVideo.Player( /*代码中的id_video_container将会作为播放器放置的容器使用,可自行替换*/ "id_video_container_9031868223219542603", option ); })() </script>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-md-12">
                        <div class="mcontent txt-align-l">
                            <p>案例背景：</p>
                            <p>2012年，金辉地产在南苏州越溪拍得2012-G-105地块，总建筑面积35320平方米。</p>
                            <p>面临挑战：</p>
                            <p>进驻苏州时间短，拥有项目少，品牌知名度低。地价高，体量少，营销费用少。</p>
                            <p>解决方案：</p>
                            <p>Step1  传播之圈内，项目知名度的迅速提升，从房地产圈内入手是一个最好的切入口。</p>
                            <p>Step2  传播之圈外，实现了圈内知名度的最大化，接下来的任务就是把项目推向每一位消费者。</p>
                            <p>Step3  活动收官，实现了品牌知名度的提升，最后还要将客户引向现场。“以爱之名”的主题party，成功将客流引向活动现场，现场来客超过1200组，广告战役完美收官。</p>
                            <p>传播结果：</p>
                            <p>推广时间，6个月。推广费用，总投入的1%。销售目标，200套房子。</p>
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

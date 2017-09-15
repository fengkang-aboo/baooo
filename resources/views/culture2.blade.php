@extends('layout/main')
@section('content')
	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">

			<div class="row" style="padding-top: 30px">
				<div class="col-md-12" style="position: relative;">
					<img style="margin: 0 auto" src="{{asset('img/invote0_7.png')}}" alt="">
	
						<a style="position: absolute;top: 50%;left: 50%;margin: 255px 0 0 -80px" href="http://weixin.blackarcgroup.com/20170413bak/blackarc0104.pdf"><img style="margin:150px auto;" class="" src="{{asset('img/invite0_14.png')}}" alt=""></a>
					
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

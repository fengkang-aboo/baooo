@extends('layout/main')
@section('content')

	<!-- main -->
	<div id="indexpage" v-cloak>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">上海公司</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_8.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">北京公司</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_5.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">广州公司</div>
			</div>
			<div class="row mb-30">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_9.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 txt-align-c mh1 mb-30">深圳公司</div>
			</div>
			<div class="row mb-40">
				<div class="col-md-12">
					<div class="mcontent txt-align-c">
						<img class="mb-30" style="margin: auto;" src="{{asset('img/service1_10.png')}}" alt="">
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

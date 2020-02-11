<div class="row">
	<div class="col-xl-8">
		<div class="m-portlet m-portlet--full-height m-portlet--skin-light m-portlet--fit ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Performance Chart
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<div class="m-widget21" style="min-height: 420px">
					<div class="row">
						<div class="col">
							@forelse($categories as $category)
							<div class="m-widget21__item m--pull-left">
								<span class="m-widget21__icon">
									<a href="#" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="fa flaticon-squares m--font-light"></i>
									</a>
								</span>
								<div class="m-widget21__info">
									<span class="m-widget21__title">
										{{ucfirst($category->title)}}
									</span><br>
									
								</div>
							</div>
							@empty
							@endforelse
						</div>
						{{-- <div class="col m--align-left">
							<div class="m-widget21__item m--pull-left">
								<span class="m-widget21__icon">
									<a href="#" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="fa flaticon-coins m--font-light m--font-light"></i>
									</a>
								</span>
								<div class="m-widget21__info">
									<span class="m-widget21__title">
										Profit
									</span><br>
									<span class="m-widget21__sub">
										Expenses, Loses, Profits
									</span>
								</div>
							</div>
						</div> --}}
					</div>
					<div class="m-widget21__chart m-portlet-fit--sides" style="height:310px;">
						<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
							<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
								<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
							</div>
							<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
								<div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
							</div>
						</div>
						<canvas id="ctx" width="688" class="chartjs-render-monitor" style="display: block; width: 459px;"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4">
		<!--begin:: Widgets/Top Products-->
		<div class="m-portlet m-portlet--full-height m-portlet--fit ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							List of Admins
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Widget5-->
				<div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
					@forelse($users as $user)
					<div class="m-widget4__item">
						<div class="m-widget4__img m-widget4__img--logo">
							<img src="{{asset('images/user.png')}}" alt="">

						</div>
						<div class="m-widget4__info">
							<span class="m-widget4__title">
								{{ucfirst($user->name)}} &nbsp;&nbsp;
								<span class="m-widget4__number m--font-brand">
									{{$user->ticketUpdated->count()}} / {{$ticket->count()}}
								</span>
							</span>
							
						</div>
						
					</div>
					@empty
					@endforelse
					
				</div>

				<!--end::Widget 5-->
			</div>
		</div>

		<!--end:: Widgets/Top Products-->
	</div>
</div>

@section('js')
<script type="text/javascript">
	let data ={
						labels: {!!$categories->pluck('title')!!},
						 datasets: [{
						 			label:'Performance',
					        barPercentage: 0.5,
					        barThickness: 6,
					        maxBarThickness: 8,
					        minBarLength: 2,
					        data: [4,2,1,3],
					        backgroundColor: ['rgb(255, 99, 132)','rgb(0, 255, 67)','rgb(255, 255, 0)','rgb(255, 255, 128)'],
					    }]
					  };
	var myLineChart = new Chart(ctx, {
	    type: 'bar',
	    data: data,
	    options: {
							    scales: {
							        xAxes: [{
							            gridLines: {
							                offsetGridLines: true
							            }
							        }]
							    }
							}
	});
	
</script>
@endsection
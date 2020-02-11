<div class="row ">
	<div class="col-sm-12 col-md-12 col-lg-4">
		<div class="m-portlet m-portlet m-portlet--border-bottom-brand ">
			<div class="m-portlet__body">
				<div class="m-widget26">
					<div class="m-widget26__number">
						<span class="m-widget17__icon">
							<i class="flaticon-time m--font-danger"></i>
						</span>
						{{$ticket->count()}}
						<small>Total Tickets</small>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
	<div class="col-sm-12 col-md-12 col-lg-4">
		<div class="m-portlet m-portlet m-portlet--border-bottom-danger ">
			<div class="m-portlet__body">
				<div class="m-widget26">
					<div class="m-widget26__number">
						<span class="m-widget26__icon">
						</span>
							<i class="flaticon-pie-chart m--font-danger"></i>
						{{$ticket->where('status','<>','Closed')->count()}}
						<small>Open Tickets</small>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-4">
		<div class="m-portlet m-portlet m-portlet--border-bottom-success ">
			<div class="m-portlet__body">
				<div class="m-widget26">
					<div class="m-widget26__number">
						<span class="m-widget17__icon">
							<i class="flaticon-paper-plane m--font-info"></i>
						</span>
						{{$ticket->where('status','Closed')->count()}}
						
						<small>Closed Tickets</small>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
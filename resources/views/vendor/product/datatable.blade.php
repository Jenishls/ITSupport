<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					{{ucfirst($data->name) }}
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="{{route('createVendor')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>AMC</span>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
{{-- {{dd($data->bill) }} --}}

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bills
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="{{route('createBill',['id'=>$data->id])}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Bill</span>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="m-portlet__body">
		<table class="table table-striped- table-bordered table-hover table-checkable" id="bill_table">
			<thead>
				<tr>
					<th class="sorting">ID</th>
					<th class="sorting">Name</th>
					<th class="sorting">File</th>
					<th class="sorting">Status</th>
					<th class="sorting" width="15%">Action</th>
				</tr>
			</thead>
			<tbody>

				@forelse($data->bill as $bill)
					<tr>
						<td>{{$bill->id}}</td>
						<td>
							<a href="{{route('showBill',[$bill->id])}}">{{ucfirst($bill->name)}}</a>
						</td>
						<td>
							<a href="{{route('showBill',[$bill->id])}}">{{$bill->file}}</a>
						</td>
						<td>
							<a href="{{route('showBill',[$bill->id])}}">{{$bill->file}}</a>
						</td>
						<td>
							<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
								<a href="{{route('editBill',[$bill->id])}}">
									<button type="button" class="btn m-btn m-btn--pill m-btn--air m-btn--gradient-from-metal m-btn--gradient-to-accent"><i class="la la-edit"></i></button>
								</a>
								<a href="{{route('deleteBill',[$bill->id])}}">
									<button type="button" class="btn m-btn m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger"><i class="la la-trash-o"></i></button>
								</a>
							</div>
						</td>
					</tr>
				@empty
				
					<div class="alert alert-danger" role="alert">
					<strong>Data not found </strong> 
				</div>
				
				@endforelse
			</tbody>
		</table>
	</div>


	@section('js')
	$('#ticket_table').DataTable();
	@endsection

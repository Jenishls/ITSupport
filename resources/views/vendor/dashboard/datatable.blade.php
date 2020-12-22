<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Vendors
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="{{route('createVendor')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Create Vendor</span>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="m-portlet__body">
		<table class="table table-striped- table-bordered table-hover table-checkable" id="ticket_table">
			<thead>
				<tr>
					<th class="sorting">ID</th>
					<th class="sorting">Name</th>
					<th class="sorting">PAN</th>
					<th class="sorting" width="15%">Action</th>
				</tr>
			</thead>
			<tbody>

				@forelse($datas as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>
							<a href="{{route('showVendor',[$data->id])}}">{{ucfirst($data->name)}}</a>
						</td>
						<td>
							<a href="{{route('showVendor',[$data->id])}}">{{$data->pan}}</a>
						</td>
						<td>
							
							<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
								<a href="{{route('editVendor',[$data->id])}}">
									<button type="button" class="btn m-btn m-btn--pill m-btn--air m-btn--gradient-from-metal m-btn--gradient-to-accent"><i class="la la-edit"></i></button>
								</a>
								<a href="{{route('deleteVendor',[$data->id])}}">
									<button type="button" class="btn m-btn m-btn--pill m-btn--air m-btn--gradient-from-focus m-btn--gradient-to-danger"><i class="la la-trash-o"></i></button>
								</a>
							</div>
						</td>
					</tr>
				@empty
				<tr>
					No Data Found
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

	@section('js')
	$('#ticket_table').DataTable();
	@endsection

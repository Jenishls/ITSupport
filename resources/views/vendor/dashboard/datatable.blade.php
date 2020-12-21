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
					<a href="{{route('vendorCreate')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
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
			</tr>
			</thead>
			<tbody>

				@forelse($datas as $data)
					<tr>
						<td><a href="vendor/{{$data->id}}">{{$data->id}}</a></td>
						<td>
							{{ucfirst($data->name)}}
						</td>
						<td>
							{{$data->pan}}
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

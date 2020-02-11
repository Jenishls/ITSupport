<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					@if(auth()->user()->isAdmin == 0)
					My tickets
					@else
					Tickets
					@endif
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="{{route('ticketCreate')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Create ticket</span>
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
					<th class="sorting">TicketID</th>
					<th class="sorting">BranchCode</th>
					<th>Created By</th>
					<th class="sorting">Title</th>
					<th class="sorting">Category</th>
					<th class="sorting">Priority</th>
					<th class="sorting">Status</th>
					{{-- <th class="sorting">Actions</th> --}}
				</tr>
			</thead>
			<tbody>
				@if(!auth()->user()->isAdmin())
					<?php $datas = $datas->where('created_by',auth()->user()->id)?>
				@endif
				@forelse($datas as $data)
					<tr>
						<td><a href="ticket/{{$data->id}}">{{$data->id}}</a></td>
						<td>
							{{$data->createdBy->branch_code}}
						</td>
						<td>
							{{ucfirst($data->createdBy->name)}}
						</td>
						<td><a href="ticket/{{$data->id}}">{{ucfirst($data->title)}}</a></td>
						<td>{{$data->category->title}}</td>
						<td><span class="m-badge 
						 @switch($data->priority)
						 	@case('Normal')
						 		m-badge--primary 
						 		@break
						 	@case('Low')
						 		m-badge--metal 
						 		@break
						 	@case('Medium')
						 		m-badge--warning 
						 		@break
						 	@case('High')
						 		m-badge--danger 
						 		@break
						 @endswitch
						 m-badge--wide">{{$data->priority}}</span></td>
						<td><span class="m-badge 
						 @switch($data->status)
						 	@case('New')
						 		m-badge--info 
						 		@break
						 	@case('On Process')
						 		m-badge--warning 
						 		@break
						 	@case('Closed')
						 		m-badge--secondary 
						 		@break
						 @endswitch
						 m-badge--wide">{{$data->status}}</span></td>
						{{-- <td >ss</td> --}}
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

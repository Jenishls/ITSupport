@extends('layouts.inner')
@section('inner')

	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					List of Users
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="{{route('createUser')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Create User</span>
						</span>
					</a>
				</li>
				<li class="m-portlet__nav-item"></li>
			</ul>
		</div>
	</div>

	<div class="m-portlet__body">
		<table class="table table-striped- table-bordered table-hover table-checkable" id="user_table">
			<thead>
				<tr>
					<th class="sorting">BranchCode</th>
					<th class="sorting">Name</th>
					<th class="sorting">Email</th>
					<th class="sorting">Level</th>
					<th class="sorting">Designation</th>
					<th class="sorting">Privilege</th>
				</tr>
			</thead>
			<tbody>
				@forelse($lists as $user)
					<tr>
						<td>{{$user->branch_code}}</td>
						<td><a href="{{$user->id}}">
							{{ucfirst($user->name)}}
						</a></td>
						<td>{{$user->email}}</td>
						<td>{{ucfirst($user->level)}}</td>
						<td>{{ucfirst($user->designation)}}</td>
						<td>
							<span class="m-badge 
							@if($user->isAdmin == 1)
							m-badge--danger
							@else
							m-badge--primary
							@endif
							m-badge--wide">
							@if($user->isAdmin == 1)
							Admin
							@else
							Normal User
							@endif
							</span>
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
	$('#user_table').DataTable();
	@endsection

@endsection
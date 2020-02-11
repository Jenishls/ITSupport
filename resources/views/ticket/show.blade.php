@extends('layouts.inner')
@section('inner')
<div class="m-portlet m-portlet--tabs 
@switch($ticket->priority)
						 	@case('Normal')
						 		m-portlet--primary 
						 		@break
						 	@case('Low')
						 		m-portlet--metal 
						 		@break
						 	@case('Medium')
						 		m-portlet--warning 
						 		@break
						 	@case('High')
						 		m-portlet--danger
						 		@break
						 @endswitch

m-portlet--head-solid-bg m-portlet--bordered">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					{{ucfirst($ticket->title)}}
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand  m-tabs-line--right m-tabs-line-danger" role="tablist">
				@if($ticket->status != 'Closed' )
				<li class="nav-item m-tabs__item">
					<form method="POST" action="/ticket/complete">
						@csrf
						<input type="hidden" name="updated_by" value="{{auth()->user()->id}}">
						<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
						<button type="submit" class="btn btn-success" style="margin-top: 15px">Mark as completed</button>
					</form>
				</li>
				@if($ticket->status != 'Process')
				<li class="nav-item m-tabs__item">
					<form method="POST" action="/ticket/process">
						@csrf
						<input type="hidden" name="updated_by" value="{{auth()->user()->id}}">
						<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
						<button type="submit" class="btn btn-warning" style="margin-top: 15px">On-Process</button>
					</form>
				</li>
				@endif
				@else
				<li class="nav-item m-tabs__item">
					<button type="submit" class="btn btn-danger" style="margin-top: 10px">Ticket Closed</button>
				</li>
				@endif

			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="m_tabs_10_1" role="tabpanel">
				<div class="row">
					<div class="col-6">
						<ul class="m-nav">
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-user"></i>
									<span class="m-nav__link-text">Owner : {{ucfirst($ticket->createdBy->name)}}</span>
								</a>
							</li>
							<li class="m-nav__item m-nav__item--active">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-share"></i>
									<span class="m-nav__link-title">
										<span class="m-nav__link-wrap">
											<span class="m-nav__link-text">Status : {{ucfirst($ticket->status)}}</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-list"></i>
									<span class="m-nav__link-text">Priority : {{ucfirst($ticket->priority)}}</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-6">
						<ul class="m-nav">
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-interface-8"></i>
									<span class="m-nav__link-text">Category: {{ucfirst($ticket->category->title)}}</span>
								</a>
							</li>
							<li class="m-nav__item m-nav__item--active">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-time-1"></i>
									<span class="m-nav__link-title">
										<span class="m-nav__link-wrap">
											<span class="m-nav__link-text">Created at: {{ucfirst($ticket->created_at->diffForHumans())}}</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<i class="m-nav__link-icon flaticon-time-1"></i>
									<span class="m-nav__link-text">Updated at : {{ucfirst($ticket->updated_at->diffForHumans())}}</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="m-portlet ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Comments
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">

		@forelse ($ticket->comment as $comment)
		<div class="m-widget3">
			<div class="m-widget3__item">
				<div class="m-widget3__header">
					<div class="m-widget3__user-img">
						<img class="m-widget3__img" src="{{asset('images/user.png')}}" alt="">
					</div>
					<div class="m-widget3__info">
						<span class="m-widget3__username">
							{{ucfirst($comment->createdBy->name)}}
						</span><br>
						<span class="m-widget3__time">
							{{ucfirst($comment->created_at->diffForHumans() )}}
						</span>
					</div>
					
				</div>
				<div class="m-widget3__body">
					<p class="m-widget3__text">
						{{$comment->body}}
					</p>
				</div>
			</div>
		</div>
		@empty
		<h5>No Comments to display</h5>
		@endforelse	
	</div>
	</div>
@if($ticket->status != "Closed")
<div class="m-portlet">
	<div class="m-portlet__body"> 
		<form method="POST" action="/comment" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
		<input type="hidden" name="ticket_id" value="{{$ticket->id}}">
		{{-- <div class="summernote"></div> --}}
		<textarea rows="3" class="form-control" name="body">  </textarea>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions" style="padding-left: 0px ">
				<button type="submit" class="btn btn-primary">Comment</button>
			</div>
		</div>
	</div>
</div>
@endif
@endsection
{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}
{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}
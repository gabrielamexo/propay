@extends('layouts.master')

@section('title')
View & Update - View & Update a new memeber
@endsection

@section('page_name')
View & Update
@endsection

@section('page_description')
View & Update a new memeber 
@endsection

@section('sidebar')

<li class="nlightblue"><a href="{{route('add')}}"><i class="icon-list"></i> Add</a></li>
<li class="nlightblue"><a href="{{route('list')}}"><i class="icon-table"></i> List</a></li>

@endsection


@section('content')


<div class="col-md-5"> 
	<form class="form-horizontal" action="{{route('update')}}" method="POST">
		<input type="hidden" name="{{'_token'}}" value="{{csrf_token()}}" />
		<input type="hidden" name="key" value="{{$member->id}}" />
			<!-- First Name -->
			<div class="form-group">
				<label class="control-label col-lg-3" for="name">First Name</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="first_name" name="first_name" value="{{$member->first_name}}" />
				</div>
			</div> 
			<!-- Surname -->
			<div class="form-group">
				<label class="control-label col-lg-3" for="name">Surame</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="surname"  name="surname" value="{{$member->surname}}" />
				</div>
			</div> 	
			<!-- Mobile -->
			<div class="form-group">
				<label class="control-label col-lg-3" for="name">Mobile</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="mobile" name="mobile" value="{{$member->mobile}}" />
				</div>
			</div> 				  
			<!-- Email -->
			<div class="form-group">
				<label class="control-label col-lg-3" for="email">Email</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="email"  name="email" value="{{$member->email}}" />
				</div>
			</div>
			<!-- Select box -->
			<div class="form-group">
				<label class="control-label col-lg-3">Language</label>
				<div class="col-lg-9">                               
					<select class="form-control" id='language'  name="language">
						<option>{{$member->language}}</option>
						<option value="English">English</option>
						<option value="Afrikaans">Afrikaans</option>
						<option value="Spanish">Spanish</option>
						<option value="French">French</option>
						<option value="Swahili">Swahili</option>
					</select>  
				</div>
			</div>  
			<!-- Date of Birth -->
			<div class="form-group">
				<label class="control-label col-lg-3">Date Of Birth</label>
				<div class="col-lg-9">
					<input data-format="yyyy-MM-dd" class="form-control" type="text" id="date_of_birth"  name="date_of_birth"  value="{{$member->date_of_birth}}" />
					<span class="add-on">&nbsp;<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					</span>
				</div>			
			</div> 

		<!-- Accept box and button s-->
		<div class="form-group">
			<div class="col-lg-9 col-lg-offset-3">
				<button type="submit" class="btn btn-info">Update</button>
			</div>
		</div>
		<br />
	</form>
</div>





@endsection

@section('extra_bottom')


<!-- JS -->
<script src="{{URL::to('src/css')}}/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{URL::to('src/css')}}/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->

@endsection
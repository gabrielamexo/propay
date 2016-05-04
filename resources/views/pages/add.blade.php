@extends('layouts.master')

@section('title')
Add - Add a new memeber
@endsection

@section('page_name')
Add
@endsection

@section('page_description')
Add a new memeber 
@endsection

@section('sidebar')

<li class="nlightblue"><a href="{{route('add')}}"><i class="icon-list"></i> Add</a></li>
<li class="nlightblue"><a href="{{route('list')}}"><i class="icon-table"></i> List</a></li>

@endsection


@section('content')


<div class="col-md-5"> 
	<form class="form-horizontal" action="{{route('create')}}" method="POST">
		<input type="hidden" name="{{'_token'}}" value="{{csrf_token()}}" />
			<!-- First Name -->
			<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
				<label class="control-label col-lg-3" for="name">First Name</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
					@if ($errors->has('first_name'))
						<span class="help-block">
						<strong>{{ $errors->first('first_name') }}</strong>
						</span>
					@endif
				</div>
			</div> 
			<!-- Surname -->
			<div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
				<label class="control-label col-lg-3" for="name">Surame</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="surname"  name="surname" value="{{ old('surname') }}">
					@if ($errors->has('surname'))
						<span class="help-block">
						<strong>{{ $errors->first('surname') }}</strong>
						</span>
					@endif					
				</div>
			</div> 	
			<!-- Mobile -->
			<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
				<label class="control-label col-lg-3" for="name">Mobile</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}">
					@if ($errors->has('mobile'))
						<span class="help-block">
						<strong>{{ $errors->first('mobile') }}</strong>
						</span>
					@endif						
				</div>
			</div> 				  
			<!-- Email -->
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label class="control-label col-lg-3" for="email">Email</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" id="email"  name="email" value="{{ old('email') }}">
					@if ($errors->has('email'))
						<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif					
				</div>
			</div>
			<!-- Select box -->
			<div class="form-group">
				<label class="control-label col-lg-3">Language</label>
				<div class="col-lg-9">                               
					<select class="form-control" id='language'  name="language">
						<option value="English">English</option>
						<option value="Afrikaans">Afrikaans</option>
						<option value="Spanish">Spanish</option>
						<option value="French">French</option>
						<option value="Swahili">Swahili</option>
					</select>  
				</div>
			</div>  
			<!-- Date of Birth -->
			<div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
				<label class="control-label col-lg-3">Date Of Birth</label>
				<div class="col-lg-9">
					<input data-format="yyyy-MM-dd" class="form-control" type="text" id="date_of_birth"  name="date_of_birth"  placeholder="eg 1981-03-19" value="{{ old('date_of_birth') }}">
					@if ($errors->has('date_of_birth'))
						<span class="help-block">
						<strong>{{ $errors->first('date_of_birth') }}</strong>
						</span>
					@endif					
					<span class="add-on">&nbsp;<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					</span>
				</div>			
			</div> 

		<!-- Accept box and button s-->
		<div class="form-group">
			<div class="col-lg-9 col-lg-offset-3">
				<button type="submit" class="btn btn-info">Add</button>
				<button type="reset" class="btn btn-success">Reset</button>
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
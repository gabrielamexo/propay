@extends('layouts.master')

@section('title')
List - list all Members
@endsection

@section('page_name')
List
@endsection

@section('page_description')
List all Members 
@endsection

@section('sidebar')

<li class="nlightblue"><a href="{{route('add')}}"><i class="icon-list"></i> Add</a></li>
<li class="nlightblue"><a href="{{route('list')}}"><i class="icon-table"></i> List</a></li>

@endsection


@section('content')


           <div class="col-md-12">

               <div class="widget worange">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

                    <table class="table table-bordered ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Language</th>
                          <th>Date Of Birth</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; ?>
                      @foreach($members as $member)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$member->first_name." ".$member->surname}}</td>
                          <td>{{$member->mobile}}</td>
                          <td>{{$member->email}}</td>
                          <td>{{$member->language}}</td>
                          <td>{{$member->date_of_birth}}</td>
                          <td>
                              <a href="{{url('/view/'.$member->id)}}" class="btn btn-sm btn-warning"><i class="icon-pencil"></i></a> 
                              <a href="{{url('/delete/'.$member->id)}}" class="btn btn-sm btn-danger"><i class="icon-remove"></i></a>                 
                          </td>
                        </tr>
                        <?php $i++; ?>
                      @endforeach

                      </tbody>
                    </table>


                  </div>
                    <div class="widget-foot">             
                    
                      <div class="clearfix"></div> 

                    </div>
                </div>
              </div>
@endsection

@section('extra_bottom')
<script src="js/jquery.toggle.buttons.js"></script> <!-- Bootstrap Toggle -->
@endsection
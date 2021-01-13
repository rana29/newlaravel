@extends('backend.layouts.master')

@section('content')

                              <!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">User</a></li>
            <li><a href="javascript:avoid(0)">Manage-user</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12 col-md-12 col-md-offset-">
     @include('backend.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Manage slider</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('slider.create')}}">Add slider</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>Title</th>
                                <th>Sub_title</th>
                                <th>Image</th>
                                <td>Action</td>
                                
                                </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $key =>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->subtitle}}</td>
                                <td><img src="{{asset('slider/'.$row->image)}}" style="width:50px"></td>



                               <td>

                                    @if($row->Status==0)


                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-arrow-down"></i></a>



                                    @else
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-arrow-up"></i></a>

                                    @endif
                                    
                               <a href="{{route('slider.edit',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


                                                   <!--  <a href="" data-tog="modal" class="btn btn-success btn-xs">
                                                       <i class="fa fa-trash"> </i></a> --> 
                                 <!--  <a href="#rana{{$row->id}}" data-toggle="modal" class="btn btn-success btn-xs "><i class="fa fa-pencil"></i></a> -->


                                    <a href="{{route('slider.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a>


                                    </td>


                                    </tr>

                                                  

                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
      @endsection
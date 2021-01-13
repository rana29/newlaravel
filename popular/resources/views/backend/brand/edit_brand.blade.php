@extends('backend.layouts.master')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Brand</a></li>
                            <li><a href="javascript:avoid(0)">Update-Brand</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                <div class="row animated fadeInUp">
                    
                    <div class="row"> 

                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                             @include('backend.error_message')
                            <div class="panel b-primary bt-md">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-xs-6"><h4 class="text-success">Update brand</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary "  href="{{route('brand.manage')}}">Manage brand</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post"  action="{{route('brand.update',$brand->id)}}">
                                                @csrf

                                                <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">Brand_name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$brand->Brand_name}}" name="Brand_name" id="email2" placeholder="update brand">
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                       <!--   <button  type="submit" class="btn btn-primary " id="edit">Update</button> -->
                                                       <a href="" id="edit" class="btn btn-success">Update brand</a> 
                                                    </div>
                                                </div>


                                               
                                            </form>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection

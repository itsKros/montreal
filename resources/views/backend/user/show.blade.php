@extends('layouts.backend.master')

@section('content')
<div class="page-wrapper" style="min-height: 294px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    @if ($user->status == 0)
                    <form action="{{route('user.status_approve', ['user'=>$user->id])}}" method="POST" style="float: left;">
                        {{ csrf_field() }}
                        {{-- {{ method_field('POST') }} --}}
                        <input type="submit" class="btn btn-primary" value="Approve"/>
                    </form>
                    @elseif ($user->status == 1)
                    <form action="{{route('user.status_disapprove', ['user'=>$user->id])}}" method="POST" style="float: left;">
                        {{ csrf_field() }}
                        {{-- {{ method_field('POST') }} --}}
                        <input type="submit" class="btn btn-success" value="Disapprove"/>
                    </form>
                    @endif
                    <a href="{{route('users.index')}}" class="btn btn-danger" style="float:right;">Go Back</a></h3>
            </div>
        </div>
        @include('frontend.msgs.messages')
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            
            <div class="col-lg-3">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> 
                            <img src="{{asset('uploads/avatars') .'/'. $user->avatar}}" alt="{{$user->name}}">
                        </div>
                        <div class="el-card-content">
                            <p>
                                @if ($user->status == 1)
                                    <span class="label label-primary">Approved</span>
                                @elseif ($user->status == 0)
                                    <span class="label label-danger">Not approved</span>
                                @endif
                            </p>
                            <h3 class="box-title">{{$user->name}}</h3> <small>{{$user->email}}</small>
                            <br> 
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                            <form action="{{route('userprofiledetailchange',['user' => $user->id])}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>Featured Image</h4>
                                        <img src="{{asset('uploads/featuredimages') .'/'. $user->featuredimage}}" alt="{{$user->name}}" class="userfeatured img-responsive"/>
                                        <input type="file" class="form-control" id="featuredimage" name="featuredimage"">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>Description</h4>
                                        <div class="desc">
                                            <textarea class="form-control form-control-line" name="modeldetail" id="modeldetail">{{$user->modeldetail}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="height:30px;"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="height" class="control-label">Height</label>
                                            <input type="text" class="form-control" id="height" name="height" placeholder="Enter height" value="{{$user->height}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="weight" class="control-label">Weight</label>
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{$user->weight}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="age" class="control-label">Age</label>
                                            <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{$user->age}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="haircolor" class="control-label">Hair Color</label>
                                            <input type="text" class="form-control" id="haircolor" name="haircolor" placeholder="Enter Hair Color" value="{{$user->hair_color}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="eyecolor" class="control-label">Eyes Color</label>
                                            <input type="text" class="form-control" id="eyecolor" name="eyecolor" placeholder="Enter Eye Color" value="{{$user->eye_color}}">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="submit" class="btn btn-primary kbtn" value="Udpate">
                                    </div>
                                </div>
                            </form>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Gallery</h4>
                            </div> 
                        
                            @if(count($galleryitems) > 0)
                                @foreach($galleryitems as $galleryitem)
                                    @if(file_exists(file_exists( asset('uploads/galleries') .'/'. $galleryitem->galleryitem )))
                                        <div class="col-md-3">
                                            <div class="gall-thumb">
                                                <form action="{{route('gallerydestroy', ['id'=>$galleryitem->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-times"></i></i></button>
                                                </form>
                                                <img src="{{asset('uploads/galleries') .'/'. $galleryitem->galleryitem}}" alt="" class="img-responsive thumb"/>
                                            </div>
                                        </div>
                                    @else
                                    <div class="col-md-3">
                                        No gallery items
                                    </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-md-3">
                                    No gallery images
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
   

           
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'modeldetail' );

</script>

@endsection
           
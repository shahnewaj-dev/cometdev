@extends('admin.layouts.app')

@section('content')

    <!-- Main Wrapper -->
    <div class="main-wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.menu')

    <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->


                <div class="row">
                    <div class="col-lg-12">
                        @include('validate')
                        <a class="btn btn-sm btn-info" href="{{ route('admin.post') }}">back</a>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Post Rows</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-header">
                                                <h4 class="card-title">Post Form</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Post Format</label>
                                                        <div class="col-lg-9">
                                                            <select class="form-control" name="post_format" id="format">
                                                                <option value="">-select-</option>
                                                                <option value="Featured Image">Featured Image</option>
                                                                <option value="Gallery Image">Gallery Image</option>
                                                                <option value="Video">Video</option>
                                                                <option value="Audio">Audio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Post Title</label>
                                                        <div class="col-lg-9">
                                                            <input name="title" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Tags</label>
                                                        <div class="col-lg-9">
                                                            <select name="tag[]" style="width: 100%;" id="tag_select" multiple="multiple">
                                                                @foreach($all_tag as $tag)
                                                                    <option  value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                                @endforeach
                                                                </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-3">Category</label>
                                                        <div class="col-md-9">
                                                            @foreach($all_cat as $d)
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="{{ $d->id }}" name="cat[]"> {{ $d->name }}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="img">
                                                        <div class="form-group row ">
                                                            <label class="col-lg-3 col-form-label">Featured Image</label>
                                                            <div class="col-lg-9">
                                                                <img style="width: 400px;" id="image_loader" src="" alt=""><br><br>
                                                                <label for="photo_icon"><img style="width: 100px;cursor:pointer;" src="{{ URL::to('admin/assets/img/icon.png') }}" alt=""></label>
                                                                <input name="image" style="display: none;" id="photo_icon" type="file" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gal">
                                                        <div class="form-group row ">
                                                            <label class="col-lg-3 col-form-label">Gallery Image</label>
                                                            <div class="col-lg-9">
                                                                <div class="img-gal"></div>
                                                                <label for="photo_icon_g"><img style="width: 100px;cursor:pointer;" src="{{ URL::to('admin/assets/img/icon.png') }}" alt=""></label>
                                                                <input name="gal_img[]" multiple="multiple" style="display: none;" id="photo_icon_g" type="file" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="video">
                                                       <div class="form-group row ">
                                                           <label class="col-lg-3 col-form-label">Post Video</label>
                                                           <div class="col-lg-9">
                                                               <input name="video" type="text" class="form-control">
                                                           </div>
                                                       </div>
                                                   </div>
                                                    <div class="audio">
                                                        <div class="form-group row ">
                                                            <label class="col-lg-3 col-form-label">Post Audio</label>
                                                            <div class="col-lg-9">
                                                                <input name="audio" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Content</label>
                                                        <div class="col-lg-9">
                                                            <textarea name="text" id="content"></textarea>
                                                        </div>

                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->



    {{--tag modal--}}




@endsection

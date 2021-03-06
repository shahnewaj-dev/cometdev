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
                        <a class="btn btn-sm btn-info" href="{{ route('tag.index') }}">back</a>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit tag Rows</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ route('tag.update',$tag->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="#">Name</label>
                                            <input name="name" class="form-control" value="{{ $tag->name }}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-sm btn-primary" value="add" type="submit">
                                        </div>
                                    </form>
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



    {{--tag edit modal--}}




    {{--tag edit modal--}}





@endsection

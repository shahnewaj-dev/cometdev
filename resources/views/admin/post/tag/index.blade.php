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
                        <a id="tag_btn" class="btn btn-sm btn-primary" data-toggle="modal" href="#tag-modal-show">Add new tag</a>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tag Rows</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Tag</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach( $data as $d )

                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->slug }}</td>
                                                <td>{{ date('d F, Y',strtotime($d->created_at)) }}</td>
                                                <td>{{ $d->status }}</td>
                                                <td>

                                                    <a class="btn btn-sm btn-warning"  href="{{ route('tag.edit',$d->id) }}">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('tag.delete',$d->id) }}">Delete</a>
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
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->



    {{--tag edit modal--}}



    <div id="tag-modal-show" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form  method="POST" action="{{ route('tag.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="#">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-sm btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


{{--tag edit modal--}}





@endsection

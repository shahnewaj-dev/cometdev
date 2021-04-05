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
                            <h3 class="page-title">Welcome {{ Auth::user()->name }} </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Post(published)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="msg"></div>
                        @include('validate')
                        <a  class="btn btn-sm btn-primary" href="{{ route('admin.create') }}">Add new post</a>
                        <br><br>
                        <a class="badge badge-info" href="{{ route('admin.post') }}">Published{{ $published }}</a>
                        <a class="badge badge-danger" href="{{ route('post.trash') }}">Trash {{ $trash }}</a>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Post Rows</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Post title</th>
                                            <th>Post type</th>
                                            <th>Featured</th>
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_data as $d)
                                            @php
                                            $j = json_decode($d->featured);
                                            @endphp
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $j->post_type }}</td>

                                            <td>

                                                <img style="width: 20%;" src="{{ URL::to('') }}/admin/assets/img/sajib/{{ $j->featured_img }}" alt="">

                                            </td>

                                            <td>john@example.com</td>
                                            <td>

                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="{{ route('post.trash.update',$d->id) }}">Trash</a>
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





@endsection

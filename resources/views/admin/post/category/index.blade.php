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
                            <h3 class="page-title">Welcome </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Category</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="msg"></div>
                        @include('validate')
                        <a id="category-modal-btn" class="btn btn-sm btn-primary" href="#">Add new category</a>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Categories Rows</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Post title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="all_category">
{{--                                        <tr>--}}
{{--                                            <td>1</td>--}}
{{--                                            <td>Doe</td>--}}
{{--                                            <td>john@example.com</td>--}}
{{--                                            <td>john@example.com</td>--}}
{{--                                            <td>john@example.com</td>--}}
{{--                                            <td>--}}
{{--                                                <a class="btn btn-sm btn-info" href="#">view</a>--}}
{{--                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>--}}
{{--                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}

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

{{--    category modal--}}

    <div id="category-modal-show" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form  method="POST" action="{{ route('category.store') }}">
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

{{--category edit modal--}}

    <div id="category-modal-edit" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="update_form" method="POST" action="{{ route('category.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="#">Name</label>
                            <input name="name" type="text" class="form-control">
                            <input name="update_id" type="hidden">

                        </div>
                        <div class="form-group">
                            <input class="btn btn-sm btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection

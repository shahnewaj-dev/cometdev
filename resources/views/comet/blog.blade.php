@extends('comet.layouts.app')

@section('main-content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-posts">
                        @foreach($all_data as $data)
                            @php
                                $gal = json_decode($data->featured)

                            @endphp

                            @if($gal->post_type=='Gallery Image')
                        <div class="post-media">
                            <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                                <ul class="slides">


                                        @foreach($gal->gall_image as $single_image)

                                    <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                        <img src="{{ URL::to('') }}/admin/assets/img/sajib/{{ $single_image }}" alt="" draggable="false">
                                    </li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>
                            @endif

                            @if($gal-> post_type =='Video')
                                <div class="post-media">

                                    <div class="media-video">
                                        <iframe src="{{ $gal->post_video }}" frameborder="0"></iframe>
                                    </div>

                                </div>
                            @endif




                        <article class="post-single">
                            <div class="post-info">
                                <h2><a href="#">{!! htmlspecialchars_decode($data->name) !!}</a></h2>
                                <h6 class="upper"><span>By</span><a href="#"> {{ $data->user->name }}</a><span class="dot"></span><span>{{ date('d F,Y',strtotime($data->created_at)) }}</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
                            </div>
                            @if($gal->post_type=='Featured Image')
                            <div class="post-media">
                                <a href="#">
                                    <img src="{{ URL::to('') }}/admin/assets/img/sajib/{{ $gal->featured_img }}" alt="">
                                </a>
                            </div>
                            @endif
                            <div class="post-body">
                                {!! Str::of(htmlspecialchars_decode($data->content))->words(60) !!}
                                <p><a href="#" class="btn btn-color btn-sm">Read More</a>
                                </p>
                            </div>
                        </article>
                        <!-- end of article-->
                        @endforeach



                    </div>
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
                        </li>
                    </ul>
                    <!-- end of pagination-->
                </div>
                @include('comet.layouts.side-bar')

            </div>
            <!-- end of row-->
        </div>
        <!-- end of container-->
    </section>


@endsection

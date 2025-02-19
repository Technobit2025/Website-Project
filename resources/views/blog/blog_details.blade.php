@extends('layouts.simple.master')

@section('title', 'Blog Details')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Blog Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-single">
                            <div class="blog-box blog-details"><img class="img-fluid w-100"
                                    src="{{ asset('assets/images/blog/blog-single.jpg') }}" alt="blog-main">
                                <div class="blog-details">
                                    <ul class="blog-social">
                                        <li>25 July 2024</li>
                                        <li><i class="icofont icofont-user"></i>William Jennings</li>
                                        <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                        <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                    <h5>Using a camera's lens to record moments in time is the art form known as
                                        photography.</h5>
                                    <div class="single-blog-content-top">
                                        <p>To produce aesthetically striking photos, it entails the deft use of light,
                                            composition, and subject matter. Technology breakthroughs have made photography
                                            more widely available to the public, enabling people to express their creativity
                                            and share their own viewpoints with a global audience.They use meticulous
                                            attention to details like colour balance, depth of focus, and framing to produce
                                            aesthetically stunning photos that arouse feelings and convey tales.</p>
                                        <p>There are many diverse genres within the area of photography, such as fashion,
                                            landscape, portrait, and documentary photography, each needing a unique blend of
                                            technical abilities and creative vision. Expert photographers have a thorough
                                            grasp of their gear and know how to get the best results by experimenting with
                                            different lenses, lighting setups, and post-processing software.</p>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-box pb-0">
                                <h5>Comment</h5>
                                <hr>
                                <ul>
                                    <li>
                                        <div class="d-flex align-self-center"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/comment.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Selena Levy<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>To create aesthetically striking photos, one must have a strong grasp of
                                                    composition and lighting in addition to technical proficiency and
                                                    creative vision. A professional photographer has to have an excellent
                                                    eye for detail and be able to tell stories and convey emotions via their
                                                    images.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <div class="d-flex"><img class="align-self-center"
                                                        src="{{ asset('assets/images/blog/9.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h6 class="mt-0">Yara Bravo<span> ( Designer )</span></h6>
                                                            </div>
                                                        </div>
                                                        <p>They meticulously plan each shot, considering factors such as
                                                            lighting, angles, and props to convey the desired message
                                                            effectively. Commercial photographers are adept at using their
                                                            technical expertise to highlight the unique features and
                                                            qualities of their subjects, often manipulating lighting and
                                                            post-processing techniques to achieve the desired aesthetic.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Fox Rios<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>In addition to technical expertise and artistic vision, one needs a firm
                                                    command of composition and lighting to produce visually arresting
                                                    images. A professional photographer needs to be incredibly
                                                    detail-oriented and capable of telling narratives and evoking strong
                                                    feelings through their photos.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/12.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Jay Dudley<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>They meticulously plan each shot, considering factors such as lighting,
                                                    angles, and props to convey the desired message effectively. Commercial
                                                    photographers are adept at using their technical expertise to highlight
                                                    the unique features and qualities of their subjects, often manipulating
                                                    lighting and post-processing techniques to achieve the desired
                                                    aesthetic.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="align-self-center"
                                                src="{{ asset('assets/images/blog/14.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="mt-0">Joe Pena<span> ( Designer )</span></h6>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="comment-social float-start float-md-end">
                                                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Web design is a broad field, thus there are many topics to discuss and
                                                    factors to take into account. It suggests that the look, layout, overall
                                                    ambience, content, user experience, and accessibility have all been
                                                    successfully integrated. To satisfy the timeline and the clients'
                                                    expectations, hundreds of different yet related jobs must be completed.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cmt-box p-0">
                                        <label class="form-label" for="exampleFormControlTextarea1">Post A Comment</label>
                                        <div class="common-f-start gap-1">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Comment Here.."></textarea><i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection

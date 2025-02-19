@extends('layouts.simple.master')

@section('title', 'Rating')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Rating</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Rating</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Star Rating</h5>
                        <p class="f-m-light mt-1">Use<code> main-star-rating</code> class to set default
                            rating.</p>
                    </div>
                    <div class="card-body">
                        <div class="main-star-rating">
                            <div class="common-flex star-box justify-content-center"><i
                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
                                    class="fa-solid fa-star active"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Stroke Star Rating</h5>
                        <p class="f-m-light mt-1">Use<code> star-box1</code> class to set stroke rating.</p>
                    </div>
                    <div class="card-body">
                        <div class="main-star-rating">
                            <div class="common-flex star-box1 justify-content-center"><i
                                    class="fa-regular fa-star active"></i><i class="fa-regular fa-star active"></i><i
                                    class="fa-regular fa-star active"></i><i class="fa-regular fa-star active"></i><i
                                    class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Star with Message Rating</h5>
                        <p class="f-m-light mt-1">Use<code> msg-emojis-wrapper</code> class to set star with
                            message rating.</p>
                    </div>
                    <div class="card-body">
                        <div class="msg-emojis-wrapper">
                            <div class="star-widget"><input id="rate-5" type="radio" name="rating"><label
                                    class="fa fa-star" for="rate-5"></label><input id="rate-4" type="radio"
                                    name="rating"><label class="fa fa-star" for="rate-4"></label><input id="rate-3"
                                    type="radio" name="rating"><label class="fa fa-star" for="rate-3"></label><input
                                    id="rate-2" type="radio" name="rating"><label class="fa fa-star"
                                    for="rate-2"></label><input id="rate-1" type="radio" name="rating"><label
                                    class="fa fa-star" for="rate-1"></label>
                                <form action="#">
                                    <header></header>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Reset Rating</h5>
                        <p class="f-m-light mt-1">Use<code> reset-rating</code> class to set and reset
                            rating.</p>
                    </div>
                    <div class="card-body reset-rating-wrapper">
                        <div class="ratingCard">
                            <div class="reset-rating"><input id="rating-5" type="radio" name="rating"><label
                                    class="fa fa-star" for="rating-5"></label><input id="rating-4" type="radio"
                                    name="rating"><label class="fa fa-star" for="rating-4"></label><input id="rating-3"
                                    type="radio" name="rating"><label class="fa fa-star" for="rating-3"></label><input
                                    id="rating-2" type="radio" name="rating"><label class="fa fa-star"
                                    for="rating-2"></label><input id="rating-1" type="radio" name="rating"><label
                                    class="fa fa-star" for="rating-1"></label><input id="rating-0" type="radio"
                                    name="rating"></div>
                            <div class="buttonContainer"><button class="reset-btn btn btn-primary">Reset</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Slider Emoji Rating</h5>
                        <p class="f-m-light mt-1">Use<code> stars</code> class to set slider emoji ratings.
                        </p>
                    </div>
                    <div class="card-body rating-stars-2">
                        <div class="emoji-rating"><input id="star-1" type="radio" name="rate"><input
                                id="star-2" type="radio" name="rate"><input id="star-3" type="radio"
                                name="rate"><input id="star-4" type="radio" name="rate"><input
                                id="star-5" type="radio" name="rate">
                            <div class="common-align flex-column">
                                <div class="outer-emoji">
                                    <ul class="emojis">
                                        <li class="slide-emoji"><i class="icofont icofont-emo-angry"></i>
                                        </li>
                                        <li><i class="icofont icofont-emo-expressionless"></i></li>
                                        <li><i class="icofont icofont-emo-slightly-smile"></i></li>
                                        <li><i class="icofont icofont-emo-heart-eyes"></i></li>
                                        <li><i class="icofont icofont-emo-laughing"></i></li>
                                    </ul>
                                </div>
                                <div class="stars"><label class="star-1 fa fa-star" for="star-1"></label><label
                                        class="star-2 fa fa-star" for="star-2"></label><label class="star-3 fa fa-star"
                                        for="star-3"></label><label class="star-4 fa fa-star"
                                        for="star-4"></label><label class="star-5 fa fa-star" for="star-5"></label>
                                </div>
                            </div>
                            <div class="main-emoji-text"><span class="emoji-msg"></span><span
                                    class="emoji-number"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Range Rating</h5>
                        <p class="f-m-light mt-1">Use<code> emoji__face</code> class to set all expression
                            of emoji.</p>
                    </div>
                    <div class="card-body rating_expression">
                        <form class="emoji"><label class="emoji__label" for="face-rating">Rate your
                                experience? </label>
                            <div class="emoji__face" role="img" aria-label="Straight face">
                                <div class="emoji__face-right-eye" data-right=""></div>
                                <div class="emoji__face-left-eye" data-left=""></div>
                                <div class="emoji__face-mouth-lower" data-mouth-lower=""></div>
                                <div class="emoji__face-mouth-upper" data-mouth-upper=""></div>
                            </div><input class="emoji__input emoji_slider" id="face-rating" type="range"
                                value="2.5" min="0" max="5" step="0.1">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Half Star Rating</h5>
                        <p class="f-m-light mt-1">Use<code> half-star-rating</code> class to set a half
                            rating for any star.</p>
                    </div>
                    <div class="card-body half-star-rating">
                        <div class="row">
                            <div class="col-12">
                                <div class="starrate" id="starrate" data-val="2.5" data-max="5"><span
                                        class="ctrl"></span><span class="cont"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                            class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span></div>
                            </div>
                            <div class="col-12 rating-result" id="rating-result">2.5</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Animated Rating</h5>
                        <p class="f-m-light mt-1">Use <code>angry, sad, ok, good, happy</code> classes to
                            set emoji ratings.</p>
                    </div>
                    <div class="card-body">
                        <div class="rating-container">
                            <ul class="feedback">
                                <li class="angry me-0">
                                    <div><svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg></div>
                                </li>
                                <li class="sad me-0">
                                    <div><svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg></div>
                                </li>
                                <li class="ok me-0">
                                    <div></div>
                                </li>
                                <li class="good active me-0">
                                    <div><svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="mouth">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                                        </svg></div>
                                </li>
                                <li class="happy me-0">
                                    <div><svg class="eye left">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg><svg class="eye right">
                                            <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                                        </svg></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Animated Heart Rating</h5>
                        <p class="f-m-light mt-1">Use<code> rating-system3</code> class to set heart with
                            message rating.</p>
                    </div>
                    <div class="card-body">
                        <div class="heart-rating">
                            <div class="rating-system3"><input id="star5_3" type="radio" name="rate3"><label
                                    for="star5_3"></label><input id="star4_3" type="radio" name="rate3"><label
                                    for="star4_3"></label><input id="star3_3" type="radio" name="rate3"><label
                                    for="star3_3"></label><input id="star2_3" type="radio" name="rate3"><label
                                    for="star2_3"></label><input id="star1_3" type="radio" name="rate3"><label
                                    class="ms-1" for="star1_3"></label>
                                <div class="rating-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection

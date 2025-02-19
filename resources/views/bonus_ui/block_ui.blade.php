@extends('layouts.simple.master')

@section('title', 'Block UI')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Block Ui</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Block Ui</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card height-equal">
                        <div class="card-header">
                            <h4 class="mb-0">Block Loading</h4>
                            <p class="f-m-light mt-1">Use <code>block-wrapper</code> class, to load a block
                                and for different loaders use
                                <code> block-button-* [block-btn-1,2,3] </code> classes.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="block-main-wrapper">
                                <div class="block-wrapper"><img class="card-img-top1 img-fluid"
                                        src="{{ asset('assets/images/other-images/profile-style-img3.png') }}"
                                        alt="nature">
                                    <div class="p-t-10">
                                        <h5 class="card-title">Sunrise Mountain</h5>
                                        <p class="card-text c-light">" Ascending sunrise mountain will take
                                            you on an incredible adventure with breath-taking views around
                                            every corner. Savour the beauty of the natural world and find
                                            tranquilly at the top of this magnificent peak."</p>
                                    </div>
                                </div>
                                <div class="common-flex"><button class="button btn btn-primary block-btn-1">Block Loader
                                        1</button><button class="button btn btn-primary block-btn-2">Block
                                        Loader 2 </button><button class="button btn btn-primary block-btn-3">Block Loader
                                        3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card height-equal card-block-wrapper">
                        <div class="card-header block-header">
                            <h4 class="mb-0">Card Loading</h4>
                            <p class="f-m-light mt-1">Use <code>card-block-wrapper</code> class, to load a
                                card and for different loaders use
                                <code> block-button-* [block-btn-4,5,6] </code> classes.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="block-wrapper">
                                <div class="card-block-wrapper"><img class="card-img-top2 img-fluid"
                                        src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="nature">
                                    <div class="p-10">
                                        <h5 class="card-title">Discover the Majesty!</h5>
                                        <p class="card-text c-light">"With our assortment of mountain
                                            stones, take a trip through untamed environments and historic
                                            structures. Each item infuses your area with the unadulterated
                                            beauty of nature while telling a tale of perseverance and time.
                                            Strength and tranquilly contained in these classic pieces."</p>
                                    </div>
                                </div>
                                <div class="common-flex"><button class="button btn btn-primary block-btn-4">Card Loader
                                        1</button><button class="button btn btn-primary block-btn-5">Card
                                        Loader 2</button><button class="button btn btn-primary block-btn-6">Card Loader
                                        3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card height-equal">
                        <div class="card-header block-header">
                            <h4 class="mb-0">Form Loading</h4>
                            <p class="f-m-light mt-1">Use <code>block-wrapper</code> class, to load a form
                                and for different loaders use
                                <code> block-button-* [block-btn-7,8,9] </code> classes.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="form-main-wrapper">
                                <div class="form-block-wrapper">
                                    <div class="card-wrapper border rounded-3 pay-info light-card">
                                        <form class="row g-3 needs-validation" novalidate="">
                                            <div class="col-md-12"> <label class="form-label" for="placeholdername">Card
                                                    Holder</label><input class="form-control" id="placeholdername"
                                                    type="text" required="" placeholder="Enter card holder name">
                                            </div>
                                            <div class="col-md-4"><label class="form-label" for="holdernumber">Card
                                                    Number</label><input class="form-control" id="holdernumber"
                                                    type="number" required="" placeholder="xxxx xxxx xxxx xxxx">
                                                <div class="invalid-feedback">Please enter your valid number
                                                </div>
                                                <div class="valid-feedback"> Looks's Good!</div>
                                            </div>
                                            <div class="col-md-4"><label class="form-label"
                                                    for="expirationdates">Expiration(MM/YY)</label><input
                                                    class="form-control" id="expirationdates" type="number" required=""
                                                    placeholder="xx/xx">
                                                <div class="invalid-feedback">Please enter your valid number
                                                </div>
                                                <div class="valid-feedback"> Looks's Good!</div>
                                            </div>
                                            <div class="col-md-4"><label class="form-label"
                                                    for="cvvNumber-c">CVV</label><input class="form-control"
                                                    id="cvvNumber-c" type="number" required="">
                                                <div class="invalid-feedback">Please enter your valid number
                                                </div>
                                                <div class="valid-feedback"> Looks's Good!</div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check"><input class="form-check-input checkbox-primary"
                                                        id="invalidCheck-c" type="checkbox" value=""
                                                        required=""><label class="form-check-label"
                                                        for="invalidCheck-c">All the above information is
                                                        correct</label>
                                                    <div class="invalid-feedback">You must agree before
                                                        submitting.</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="common-flex"><button class="button btn btn-primary block-btn-7">Form Loader
                                        1</button><button class="button btn btn-primary block-btn-8">Form
                                        Loader 2</button><button class="button btn btn-primary block-btn-9">Form Loader
                                        3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/blockui/custom-blockui.js') }}"></script>
    <script src="{{ asset('assets/js/blockui/custom-freeze.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection

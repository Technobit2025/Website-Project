@extends('layouts.simple.master')

@section('title', 'Checkbox and Radio')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Checkbox & Radio</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active"> Checkbox & Radio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Checkbox</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for checkbox.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Default Checks</h6>
                                    <div class="form-check"><input class="form-check-input" id="flexCheckDefault"
                                            type="checkbox" value=""><label class="form-check-label"
                                            for="flexCheckDefault">Default
                                            checkbox</label></div>
                                    <div class="form-check"><input class="form-check-input" id="flexCheckChecked"
                                            type="checkbox" value="" checked=""><label class="form-check-label"
                                            for="flexCheckChecked">Checked
                                            checkbox</label></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Disabled Checks</h6>
                                    <div class="form-check"><input class="form-check-input" id="flexCheckDisabled"
                                            type="checkbox" value="" disabled=""><label class="form-check-label"
                                            for="flexCheckDisabled">Disabled checkbox</label></div>
                                    <div class="form-check"><input class="form-check-input" id="flexCheckCheckedDisabled"
                                            type="checkbox" value="" checked="" disabled=""><label
                                            class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked
                                            checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Right Checks </h6>
                                    <div class="form-check form-check-reverse"><input class="form-check-input"
                                            id="reverseCheck1" type="checkbox" value=""><label
                                            class="form-check-label" for="reverseCheck1">Reverse checkbox</label></div>
                                    <div class="form-check form-check-reverse"><input class="form-check-input"
                                            id="reverseCheck2" type="checkbox" value="" disabled=""
                                            checked=""><label class="form-check-label" for="reverseCheck2">Disabled
                                            reverse checkbox</label></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Indeterminate </h6>
                                    <div class="form-check"><input class="form-check-input" id="flexCheckIndeterminate"
                                            type="checkbox" value=""><label class="form-check-label"
                                            for="flexCheckIndeterminate">Indeterminate checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Checkbox</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for checkbox and filled checkbox used
                            <code>checkbox-solid-*</code> and bordered checkbox used
                            <code>checkbox-*</code>.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Bordered Checkbox </h6>
                                    <div class="form-check checkbox checkbox-primary mb-0"><input class="form-check-input"
                                            id="checkbox-primary-1" type="checkbox" checked=""><label
                                            class="form-check-label" for="checkbox-primary-1">Primary -
                                            checkbox-primary</label>
                                    </div>
                                    <div class="form-check checkbox checkbox-secondary mb-0"><input
                                            class="form-check-input" id="checkbox-secondary" type="checkbox"><label
                                            class="form-check-label" for="checkbox-secondary">Secondary -
                                            checkbox-secondary </label>
                                    </div>
                                    <div class="form-check checkbox checkbox-success mb-0"><input class="form-check-input"
                                            id="checkbox-primary" type="checkbox"><label class="form-check-label"
                                            for="checkbox-primary">Success - checkbox-success</label></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Icon Checkbox </h6>
                                    <div class="form-check checkbox checkbox-primary ps-0 main-icon-checkbox">
                                        <ul class="checkbox-wrapper">
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon"><i
                                                        class="fa-solid fa-sliders"></i><span>Sliders</span></label>
                                            </li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon1"
                                                    type="checkbox" checked=""><label class="form-check-label"
                                                    for="checkbox-icon1"><i class="fa-solid fa-user"></i><span>User
                                                    </span></label></li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon2"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon2"><i class="fa-solid fa-tags">
                                                    </i><span>Tags</span></label></li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon3"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon3"><i class="fa-brands fa-android"></i><span>Android
                                                    </span></label></li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon4"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon4"><i
                                                        class="fa-solid fa-eye-slash"></i><span>Hidden</span></label>
                                            </li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon5"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon5"><i
                                                        class="fa-solid fa-folder-open"></i><span>Folder</span></label>
                                            </li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon6"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon6"><i
                                                        class="fa-solid fa-paper-plane"></i><span>Send</span></label>
                                            </li>
                                            <li> <input class="form-check-input checkbox-shadow" id="checkbox-icon7"
                                                    type="checkbox"><label class="form-check-label"
                                                    for="checkbox-icon7"><i
                                                        class="fa-solid fa-cloud-arrow-up"></i><span>Upload</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Filled Checkbox </h6>
                                    <div class="form-check checkbox checkbox-solid-warning"><input
                                            class="form-check-input" id="solid4" type="checkbox"
                                            checked=""><label class="form-check-label" for="solid4">Warning
                                            - checkbox-solid-warning </label></div>
                                    <div class="form-check checkbox checkbox-solid-danger"><input class="form-check-input"
                                            id="solid5" type="checkbox"><label class="form-check-label"
                                            for="solid5">Danger -
                                            checkbox-solid-danger </label></div>
                                    <div class="form-check checkbox checkbox-solid-info"><input class="form-check-input"
                                            id="solid6" type="checkbox"><label class="form-check-label"
                                            for="solid6">Info - checkbox-solid-info
                                        </label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Radio Buttons</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for radio buttons.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Custom Radios </h6>
                                    <div class="form-check"><input class="form-check-input" id="flexRadioDefault1"
                                            type="radio" name="flexRadioDefault"><label class="form-check-label"
                                            for="flexRadioDefault1">Default radio</label></div>
                                    <div class="form-check"><input class="form-check-input" id="flexRadioDefault2"
                                            type="radio" name="flexRadioDefault" checked=""><label
                                            class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Disabled Radios </h6>
                                    <div class="form-check"><input class="form-check-input" id="flexRadioDisabled"
                                            type="radio" name="flexRadioDisabled" disabled=""><label
                                            class="form-check-label" for="flexRadioDisabled">Disabled radio</label></div>
                                    <div class="form-check"><input class="form-check-input" id="flexRadioCheckedDisabled"
                                            type="radio" name="flexRadioDisabled" checked="" disabled=""><label
                                            class="form-check-label" for="flexRadioCheckedDisabled">Disabled
                                            checked radio</label></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Right Radios </h6>
                                    <div class="form-check form-check-reverse"><input class="form-check-input"
                                            id="flexRadioDefault3" type="radio" name="flexRadioDefault"><label
                                            class="form-check-label" for="flexRadioDefault3">Default radio</label></div>
                                    <div class="form-check form-check-reverse"><input class="form-check-input"
                                            id="flexRadioCheckedDisabled1" type="radio" name="flexRadioDisabled"
                                            checked="" disabled=""><label class="form-check-label"
                                            for="flexRadioCheckedDisabled1">Disabled checked radio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Images with Checkbox</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for image checkbox.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="main-img-checkbox">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Custom</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-check-1" type="checkbox"><label class="form-check-label mb-0"
                                                for="img-check-1"> <img src="{{ asset('assets/images/switch/1.jpg') }}"
                                                    alt="coffee-beans"></label></div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Checked Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-check-2" type="checkbox" checked=""><label
                                                class="form-check-label mb-0" for="img-check-2"> <img
                                                    src="{{ asset('assets/images/switch/2.jpg') }}"
                                                    alt="tree"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Disable Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-check-3" type="checkbox" disabled=""><label
                                                class="form-check-label mb-0" for="img-check-3"> <img
                                                    src="{{ asset('assets/images/switch/3.jpg') }}"
                                                    alt="flowers"></label></div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Disable Checked Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-check-4" type="checkbox" disabled="" checked=""><label
                                                class="form-check-label mb-0" for="img-check-4"> <img
                                                    src="{{ asset('assets/images/switch/4.jpg') }}"
                                                    alt="rose-tea"></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Images with Radio</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for image radio.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="main-img-checkbox">
                            <div class="row g-3">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Custom</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-radio-1" type="radio" name="radio6"><label
                                                class="form-check-label mb-0" for="img-radio-1"> <img
                                                    src="{{ asset('assets/images/switch/5.jpg') }}"
                                                    alt="coffee-beans"></label></div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Checked Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-radio-2" type="radio" name="radio6" checked=""><label
                                                class="form-check-label mb-0" for="img-radio-2"> <img
                                                    src="{{ asset('assets/images/switch/6.jpg') }}"
                                                    alt="tree"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Disable Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-radio-3" type="radio" name="radio6" disabled=""><label
                                                class="form-check-label mb-0" for="img-radio-3"> <img
                                                    src="{{ asset('assets/images/switch/7.jpg') }}"
                                                    alt="flowers"></label></div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                        <h6 class="sub-title">Disable Checked Image</h6>
                                        <div class="img-checkbox"><input class="main-img-cover form-check-input"
                                                id="img-radio-4" type="radio" name="radio6" disabled=""
                                                checked=""><label class="form-check-label mb-0" for="img-radio-4">
                                                <img src="{{ asset('assets/images/switch/8.jpg') }}"
                                                    alt="rose-tea"></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Radio Buttons</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-input </code>and
                            <code>form-check-label </code>for custom radio buttons.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Bordered Radio</h6>
                                    <div class="form-check radio radio-secondary"><input class="form-check-input"
                                            id="radio22" type="radio" name="radio1" value="option1"
                                            checked=""><label class="form-check-label" for="radio22">Koho Theme
                                        </label></div>
                                    <div class="form-check radio radio-success"><input class="form-check-input"
                                            id="radio55" type="radio" name="radio1" value="option1"><label
                                            class="form-check-label" for="radio55">Roxo Theme </label></div>
                                    <div class="form-check radio radio-warning"><input class="form-check-input"
                                            id="radio33" type="radio" name="radio1" value="option1"><label
                                            class="form-check-label" for="radio33">Voxo Theme </label></div>
                                    <div class="form-check radio radio-info"><input class="form-check-input"
                                            id="radio66" type="radio" name="radio1" value="option1"><label
                                            class="form-check-label" for="radio66">Zeta Theme</label></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                                <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                    <h6 class="sub-title">Icons Radio</h6>
                                    <div class="form-check radio radio-primary ps-0 main-icon-radio">
                                        <ul class="radio-wrapper">
                                            <li> <input class="form-check-input" id="radio-icon" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon"><i
                                                        class="fa-solid fa-sliders"></i><span>Sliders</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon4" type="radio"
                                                    name="radio2" value="option2" checked=""><label
                                                    class="form-check-label" for="radio-icon4"><i
                                                        class="fa-solid fa-eye-slash"></i><span>Hidden</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon5" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon5"><i
                                                        class="fa-solid fa-folder-open"></i><span>Folder</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon7" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon7"><i
                                                        class="fa-solid fa-paper-plane"></i><span>Send</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon8" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon8"><i
                                                        class="fa-solid fa-user"></i><span>Users</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon9" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon9"><i
                                                        class="fa-solid fa-trash"></i><span>Trash</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon10" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon10"><i
                                                        class="fa-brands fa-github"></i><span>github</span></label>
                                            </li>
                                            <li> <input class="form-check-input" id="radio-icon11" type="radio"
                                                    name="radio2" value="option2"><label class="form-check-label"
                                                    for="radio-icon11"><i
                                                        class="fa-solid fa-circle-play"></i><span>Play</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card-wrapper border rounded-3 fill-radios h-100 checkbox-checked">
                                    <h6 class="sub-title">Filled Radio</h6>
                                    <div class="form-check radio radio-primary"><input class="form-check-input"
                                            id="radio111" type="radio" name="radio3" value="option1"
                                            checked=""><label class="form-check-label" for="radio111">Product</label>
                                    </div>
                                    <div class="form-check radio radio-warning"><input class="form-check-input"
                                            id="radio333" type="radio" name="radio3" value="option3"><label
                                            class="form-check-label" for="radio333">Order history </label></div>
                                    <div class="form-check radio radio-danger"><input class="form-check-input"
                                            id="radio444" type="radio" name="radio3" value="option3"><label
                                            class="form-check-label" for="radio444">Invoice </label></div>
                                    <div class="form-check radio radio-info"><input class="form-check-input"
                                            id="radio666" type="radio" name="radio3" value="option3"><label
                                            class="form-check-label" for="radio666">Wishlist</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Switches</h5>
                        <p class="f-m-light mt-1"> Use <code>form-switch</code> and
                            <code>form-check-label </code>for switches.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 rtl-input checkbox-checked">
                                    <h6 class="sub-title">Custom Switches </h6>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                            id="flexSwitchCheckDefault" type="checkbox" role="switch"><label
                                            class="form-check-label" for="flexSwitchCheckDefault">Default
                                            switch checkbox input</label></div>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                            id="flexSwitchCheckChecked" type="checkbox" role="switch"
                                            checked=""><label class="form-check-label"
                                            for="flexSwitchCheckChecked">Checked switch checkbox
                                            input</label></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 rtl-input checkbox-checked">
                                    <h6 class="sub-title">Disabled Switches</h6>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                            id="flexSwitchCheckDisabled" type="checkbox" role="switch"
                                            disabled=""><label class="form-check-label"
                                            for="flexSwitchCheckDisabled">Disabled switch checkbox
                                            input</label></div>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                            id="flexSwitchCheckCheckedDisabled" type="checkbox" role="switch"
                                            checked="" disabled=""><label class="form-check-label"
                                            for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                                            checkbox input</label></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Right Switches </h6>
                                    <div class="form-check form-switch form-check-reverse"><input
                                            class="form-check-input ms-2" id="flexSwitchCheckReverse"
                                            type="checkbox"><label class="form-check-label"
                                            for="flexSwitchCheckReverse">Reverse switch checkbox
                                            input</label></div>
                                    <div class="form-check form-switch form-check-reverse"><input
                                            class="form-check-input ms-2" id="flexSwitchCheckDisabled1" type="checkbox"
                                            role="switch" disabled=""><label class="form-check-label"
                                            for="flexSwitchCheckDisabled1">Disabled
                                            switch checkbox input</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Inline Input Types</h5>
                        <p class="f-m-light mt-1"> Group checkboxes or radios on the same horizontal row by
                            adding <code>form-check-inline </code>to any <code>form-check</code>.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Inline Checkbox</h6>
                                    <div class="form-check-size rtl-input">
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineCheckbox1" type="checkbox" value="option1"
                                                checked=""><label class="form-check-label"
                                                for="inlineCheckbox1">I</label>
                                        </div>
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineCheckbox2" type="checkbox" value="option2"><label
                                                class="form-check-label" for="inlineCheckbox2">II</label>
                                        </div>
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineCheckbox3" type="checkbox" value="option3"
                                                disabled=""><label class="form-check-label" for="inlineCheckbox3">III
                                                (disabled)</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Inline Radios</h6>
                                    <div class="form-check-size rtl-input">
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineRadio1" type="radio" name="inlineRadioOptions"
                                                value="option1" checked=""><label class="form-check-label"
                                                for="inlineRadio1">1</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineRadio2" type="radio" name="inlineRadioOptions"
                                                value="option2"><label class="form-check-label"
                                                for="inlineRadio2">2</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input me-2"
                                                id="inlineRadio3" type="radio" name="inlineRadioOptions"
                                                value="option3" disabled=""><label class="form-check-label"
                                                for="inlineRadio3">3
                                                (disabled)</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Inline Switches</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-switch form-check-inline"><input
                                                class="form-check-input check-size" id="flexSwitchCheckDefault2"
                                                type="checkbox" role="switch" checked=""></div>
                                        <div class="form-check form-switch form-check-inline"><input
                                                class="form-check-input check-size" id="flexSwitchCheckDefault3"
                                                type="checkbox" role="switch">
                                        </div>
                                        <div class="form-check form-switch form-check-inline"><input
                                                class="form-check-input check-size" id="flexSwitchCheckDisabled3"
                                                type="checkbox" role="switch" disabled=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Animated Buttons</h5>
                        <p class="f-m-light mt-1"> Use <code>radio_animated </code>to animate checkbox and
                            radio buttons.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Select your payment method</h6><label class="d-block"
                                        for="edo-ani"></label><input class="radio_animated" id="edo-ani"
                                        type="radio" name="rdo-ani">Visa<label class="d-block"
                                        for="edo-ani1"></label><input class="radio_animated" id="edo-ani1"
                                        type="radio" name="rdo-ani">MasterCard<label class="d-block"
                                        for="edo-ani2"></label><input class="radio_animated" id="edo-ani2"
                                        type="radio" name="rdo-ani" checked="">Paypal<label class="d-block"
                                        for="edo-ani13"></label><input class="radio_animated" id="edo-ani13"
                                        type="radio" name="rdo-ani">G-pay <label class="d-block"
                                        for="edo-ani6"></label><input class="radio_animated" id="edo-ani6"
                                        type="radio" name="rdo-ani">Bitpay
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">What is your favorite social media? </h6><label class="d-block"
                                        for="chk-ani"></label><input class="checkbox_animated" id="chk-ani"
                                        type="checkbox">Instagram<label class="d-block" for="chk-ani1"></label><input
                                        class="checkbox_animated" id="chk-ani1" type="checkbox">Facebook<label
                                        class="d-block" for="chk-ani2"></label><input class="checkbox_animated"
                                        id="chk-ani2" type="checkbox" checked="">Whatsapp<label class="d-block"
                                        for="chk-ani4"></label><input class="checkbox_animated" id="chk-ani4"
                                        type="checkbox">Twitter
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Basic Radio and Checkbox</h5>
                        <p class="f-m-light mt-1"> Use <code>form-check-inline </code>to display inline
                            checkbox and radio buttons.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Simple Checkbox</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                            <input class="form-check-input" id="inline-1" type="checkbox"><label
                                                class="form-check-label" for="inline-1">Blog</label>
                                        </div>
                                        <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                            <input class="form-check-input" id="inline-2" type="checkbox"
                                                checked=""><label class="form-check-label"
                                                for="inline-2">Gallery</label>
                                        </div>
                                        <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                            <input class="form-check-input" id="inline-3" type="checkbox"><label
                                                class="form-check-label" for="inline-3">Faq</label>
                                        </div>
                                        <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                            <input class="form-check-input" id="inline-4" type="checkbox"><label
                                                class="form-check-label" for="inline-4">Email</label>
                                        </div>
                                        <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                            <input class="form-check-input" id="inline-5" type="checkbox"><label
                                                class="form-check-label" for="inline-5">Icons</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <h6 class="sub-title">Simple Radios</h6>
                                    <div class="form-check-size">
                                        <div class="form-check form-check-inline radio radio-primary"><input
                                                class="form-check-input" id="radioinline1" type="radio" name="radio5"
                                                value="option5" checked=""><label class="form-check-label mb-0"
                                                for="radioinline1">Maps</label></div>
                                        <div class="form-check form-check-inline radio radio-primary"><input
                                                class="form-check-input" id="radioinline2" type="radio" name="radio5"
                                                value="option5"><label class="form-check-label mb-0"
                                                for="radioinline2">Tasks</label></div>
                                        <div class="form-check form-check-inline radio radio-primary"><input
                                                class="form-check-input" id="radioinline3" type="radio" name="radio5"
                                                value="option5"><label class="form-check-label mb-0"
                                                for="radioinline3">To-do</label></div>
                                        <div class="form-check form-check-inline radio radio-primary"><input
                                                class="form-check-input" id="radioinline4" type="radio" name="radio5"
                                                value="option5"><label class="form-check-label mb-0"
                                                for="radioinline4">Forms</label></div>
                                        <div class="form-check form-check-inline radio radio-primary"><input
                                                class="form-check-input" id="radioinline5" type="radio" name="radio5"
                                                value="option5"><label class="form-check-label mb-0"
                                                for="radioinline5">Login</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radio Toggle Buttons</h5>
                        <p class="f-m-light mt-1"> The choice between these two approaches will depend on
                            the type of toggle you are creating, and whether or not the toggle will make
                            sense to users when announced as a checkbox or as an actual button.
                            <code>[any one selected]</code>.
                        </p>
                    </div>
                    <div class="card-body common-flex main-radio-toggle"><input class="btn-check radio-light-secondary"
                            id="option1" type="radio" name="options" checked=""><label
                            class="btn list-light-secondary" for="option1">Checked</label><input
                            class="btn-check radio-light-secondary" id="option2" type="radio" name="options"><label
                            class="btn list-light-secondary" for="option2">Radio</label><input
                            class="btn-check radio-light-secondary" id="option3" type="radio" name="options"
                            disabled=""><label class="btn list-light-secondary" for="option3">Disabled</label><input
                            class="btn-check radio-light-secondary" id="option4" type="radio" name="options"><label
                            class="btn list-light-secondary" for="option4">Radio</label></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Outlined Checkbox Styles</h5>
                        <p class="f-m-light mt-1"> The choice between these two approaches will depend on
                            the type of toggle you are creating, and whether or not the toggle will make
                            sense to users when announced as a checkbox or as an actual button.
                            <code>[multiple selected]</code>.
                        </p>
                    </div>
                    <div class="card-body common-flex main-checkbox-toggle"><input class="btn-check"
                            id="btn-check-outlined" type="checkbox"><label class="btn btn-outline-info"
                            for="btn-check-outlined">Single Toggle</label><input class="btn-check"
                            id="btn-check-2-outlined" type="checkbox" checked=""><label
                            class="btn btn-outline-danger" for="btn-check-2-outlined">Checked</label><input
                            class="btn-check" id="success-outlined" type="radio" name="options-outlined"
                            checked=""><label class="btn btn-outline-success" for="success-outlined">Checked
                            Success Radio</label><input class="btn-check" id="danger-outlined" type="radio"
                            name="options-outlined"><label class="btn btn-outline-dark" for="danger-outlined">Dark
                            Radio</label></div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/bs-indeterminate.js') }}"></script>
@endsection

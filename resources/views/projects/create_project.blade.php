@extends('layouts.simple.master')

@section('title', 'Project Create')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select/bootstrap-select.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        Project Create</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Projects</li>
                        <li class="breadcrumb-item active">Project Create </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card create-project-form custom-input">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3 needs-validation" novalidate="">
                                    <div class="col-md-6">
                                        <label class="form-label" for="projectName">Project Name</label>
                                        <input class="form-control" id="projectName" type="text"
                                            placeholder="Project Name" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="clientName">Client Name</label>
                                        <input class="form-control" id="clientName" type="text" placeholder="Client Name"
                                            required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">Cost</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="">
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectType">Project Type</label>
                                        <select class="form-select" id="projectType" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Hourly </option>
                                            <option>Fixed</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid project type</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCategory">Category</label>
                                        <select class="form-select" id="projectCategory" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Developer</option>
                                            <option>Designer </option>
                                            <option>Analyst</option>
                                            <option>Scientist</option>
                                            <option>Architect</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid category</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Priority</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Urgent</option>
                                            <option>High</option>
                                            <option>Medium</option>
                                            <option>Low</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label" for="selectTeamLeader">Select Team Leader</label>
                                        <select class="form-select" id="selectTeamLeader" required="">
                                            <option>Nathan Cooper</option>
                                            <option>Owen Davis</option>
                                            <option>Zoey Jenkins</option>
                                            <option>Alexis Taylor</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your team leader</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label" for="selectMember">Select Members</label>
                                        <select class="selectpicker" multiple="" aria-label="Default select example"
                                            data-live-search="true" required>
                                            <option value="1" selected>Nathan Cooper</option>
                                            <option value="2" selected>Owen Davis</option>
                                            <option value="3">Zoey Jenkins</option>
                                            <option value="4" selected>Alexis Taylor</option>
                                            <option value="5">Leonel Hodges</option>
                                            <option value="6">Emelia Green</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your team leader</div>
                                    </div>
                                    <div class="col-xxl-4 col-lg-6">
                                        <label class="form-label" for="projectSize">Size</label>
                                        <select class="form-select" id="projectSize" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your project size</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control" type="date" required="">
                                        <div class="invalid-feedback">Please select your start date</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control" type="date" required="">
                                        <div class="invalid-feedback">Please select your end date</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="validationTextarea">Details</label>
                                        <textarea class="form-control" id="validationTextarea" placeholder="Enter Project details" required=""
                                            rows="4"></textarea>
                                        <div class="invalid-feedback">Please enter your project details.</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="formFileMultiple">Upload Documents</label>
                                        <input class="form-control" id="formFileMultiple" type="file" multiple=""
                                            required="">
                                        <div class="invalid-feedback">Please select your files.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="common-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Add </button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/select/bootstrap-select.min.js') }}"></script>
@endsection

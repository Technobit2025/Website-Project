@extends('layouts.simple.master')

@section('title', 'Create Category')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nestable-style.css') }}">
@endsection

@section('main_content')
<div class="container-fluid">
  <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h3>Categories Management</h3>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                              <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                          </svg></a></li>
                  <li class="breadcrumb-item">Categories</li>
                  <li class="breadcrumb-item active">Create</li>
              </ol>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-5 col-lg-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    @include('admin.category.list', ['categories' => $categories])
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-lg-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input theme-form" id="categoryForm" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.category.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/nestable/jquery.nestable.min.js')}}"></script> 
<script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
<script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      function updateToDatabase() {
        idString = $('.dd').nestable('toArray', {
          attribute: 'data-id'
        });
        var orderIndex = [];
        $('#nestable3 li').each(function(index) {
          orderIndex.push({
            id: $(this).attr('data-id'),
            order: index
          })
        });
        var mergedArray = Object.values(Object.groupBy([...orderIndex, ...idString],
          ({
            id
          }) => id)).map(e => e.reduce((acc, cur) => ({
          ...acc,
          ...cur
        })));
  
        $.ajax({
          url: '{{ route("admin.category.update.orders") }}',
          method: 'POST',
          data: {
            categories: mergedArray
          },
          success: function() {
            //
          }
        })
      }
  
      $('.dd').nestable({
        maxDepth: 12
      }).on('change', updateToDatabase);
    })
</script>
@endsection
<div class="col-12">
    <label class="form-label" for="">Name<span> *</span></label>
    <input class="form-control" type="text" value="{{ isset($cat->name) ? $cat->name : old('name') }}" placeholder="Enter Category Name" name="name">
    @error('name')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-12">
    <label class="form-label" for="">Description</label>
    <textarea class="form-control" name="description" placeholder="Enter Description">{{ isset($cat->description) ? $cat->description : old('description') }}</textarea>
    @error('description')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-12">
    <label class="form-label" for="">Parent</label>
    <select class="form-select js-example-basic-single" name="parent_id">
        <option value="" disabled hidden selected>Select Parent</option>
        @foreach($parent as $key => $category)
            @if($key != @$cat?->id)
                <option class="option" @selected(old("parent_id", @$cat->parent_id) == $key)
                    value="{{$key}}">{{ $category }}
                </option>
            @endif
        @endforeach
    </select>
</div>
<div class="col-12 mt-0">
    <label class="form-label" for="">Meta Title<span> *</span></label>
    <input class="form-control" type="text" value="{{ isset($cat->meta_title) ? $cat->meta_title : old('meta_title') }}" placeholder="Enter Meta Title" name="meta_title">
    @error('meta_title')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-12">
    <label class="form-label" for="">Meta Description</label>
    <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ isset($cat->meta_description) ? $cat->meta_description : old('meta_description') }}</textarea>
    @error('meta_description')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-6">
    <label class="form-label" for="">Image</label>
    <input class="form-control"  type="file" name="image">
    @isset($cat)
        @php
            $image = $cat->getFirstMedia('image');
        @endphp
        <div class="mt-3 comman-image">
            @if ($image)
                <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="10%" width="10%">
            @endif
        </div>
    @endisset
    @error('image')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="col-6">
    <label class="form-label" for="">Status</label>
    <select class="form-select js-example-basic-single" name="status">
        <option value="1" {{ !($cat->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
        <option value="0" {{ ($cat->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
    </select>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
</div>

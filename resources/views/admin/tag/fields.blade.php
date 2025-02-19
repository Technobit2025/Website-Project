<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Tag Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($tag->name) ? $tag->name : old('name') }}" placeholder="Enter Tag Name" name="name">
        @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Description</label>
        <textarea class="form-control" name="description" placeholder="Enter Description">{{ isset($tag->description) ? $tag->description : old('description') }}</textarea>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" {{ !($tag->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" {{ ($tag->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
    </div>
</div>


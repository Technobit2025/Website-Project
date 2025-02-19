<div class="col-sm-12">
    <div class="mb-3">
        <label>Title<span>*</span></label>
        <input class="form-control" type="text" value="{{ isset($blog->title) ? $blog->title : old('title') }}"
            placeholder="Enter Title" name="title">
        @error('title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" name="description" placeholder="Enter Description">{{ isset($blog->description) ? $blog->description : old('description') }}</textarea>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="email-wrapper">
        <div class="theme-form">
            <div class="mb-3">
                <label class="w-100">Content:</label>
                <div class="toolbar-box">
                    <div id="toolbar8"><span class="ql-formats">
                            <select class="ql-size">
                                <option value="small">Small</option>
                                <option selected="">Normal</option>
                                <option value="large">Large</option>
                                <option value="huge">Huge</option>
                            </select></span><span class="ql-formats">
                            <button class="ql-bold">Bold</button>
                            <button class="ql-italic">Italic</button>
                            <button class="ql-underline">Underline</button>
                            <button class="ql-strike">Strike</button>
                            <button class="ql-script" value="sub"></button>
                            <button class="ql-script" value="super"></button></span><span
                            class="ql-formats">
                            <button class="ql-header" value="1"></button>
                            <button class="ql-header" value="2"></button></span><span
                            class="ql-formats">
                            <button class="ql-list" value="ordered">List</button>
                            <button class="ql-list" value="bullet">Bullet</button>
                            <button class="ql-indent" value="-1"></button>
                            <button class="ql-indent" value="+1"></button></span><span
                            class="ql-formats">
                            <button class="ql-link">Link</button>
                            <button class="ql-image">Image</button>
                            <button class="ql-video">Video</button>
                            <select class="ql-color"></select>
                            <select class="ql-background"></select></span>
                        <!-- Add more options here--><span class="ql-formats">
                            <button class="ql-blockquote">Blockquote</button>
                            <button class="ql-code-block"></button></span><span
                            class="ql-formats">
                            <button class="ql-align" value=""></button>
                            <button class="ql-align" value="center"></button>
                            <button class="ql-align" value="right"></button>
                            <button class="ql-align" value="justify"></button></span><span
                            class="ql-formats">
                            <button class="ql-clean"></button></span>
                    </div>
                    <div id="editor8">{!! isset($blog->content) ? $blog->content : '' !!}</div>
                </div>
                <input type="hidden" name="content" value="" id="quill-editor-area">
                @error('content')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3 multi-images">
        <label for="">Images</label>
        <input class="form-control" type="file" name="images[]" multiple="multiple">
        @isset($blog)
            <div class="mt-2 row">
                @foreach ($blog->getMedia('images') as $image)
                    <div class="col-xxl-1 col-md-2 col-sm-3 col-auto mb-2">
                        <div class="multi-remove position-relative">
                            <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" width="100%">
                            <a href="" class="dz-remove text-danger" data-bs-target="#tooltipmodal{{ $image->id }}"
                            data-bs-toggle="modal">Remove</a>
                            <!-- Remove File Confirmation-->
                            <div class="modal fade" id="tooltipmodal{{ $image->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="tooltipmodal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Confirm delete</h4>
                                            <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4 class="mb-3"> Are you sure want to delete ?</h4>
                                            <p>This Item Will Be Deleted Permanently. You Can not Undo This Action.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('admin.blog.removeImage', $image->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
    </div>

    <div class="mb-3">
        <label for="">Thumbnail</label><span>*</span>
        <input class="form-control" type="file" name="thumbnail">
        @error('thumbnail')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @isset($blog)
            <div class="mt-3 comman-image">
                @foreach ($blog->getMedia('thumbnail') as $image)
                    <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="15%"
                        width="15%">
                @endforeach
            </div>
        @endisset
    </div>

    <div>
        <div class="col-form-label">Categories
            <select class="js-category-placeholder-multiple col-sm-12" multiple="multiple" name="categories[]">
                @foreach ($categories as $key => $value)
                    <option value="{{ $key }}"
                        {{ (is_array(old('categories')) && in_array($key, old('categories'))) || (isset($default_categories) && in_array($key, $default_categories)) ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
            @error('categories')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <div class="col-form-label">Tags
            <select class="js-tag-placeholder-multiple col-sm-12" multiple="multiple" name="tags[]">
                @foreach ($tags as $key => $value)
                    <option value="{{ $key }}"
                        {{ (is_array(old('tags')) && in_array($key, old('tags'))) || (isset($default_tags) && in_array($key, $default_tags)) ? 'selected' : '' }}>
                        {{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="">Meta Title<span>*</span></label>
        <input class="form-control" type="text"
            value="{{ isset($blog->meta_title) ? $blog->meta_title : old('meta_title') }}"
            placeholder="Enter Meta Title" name="meta_title">
        @error('meta_title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Meta Description</label>
        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ isset($blog->meta_description) ? $blog->meta_description : old('meta_description') }}</textarea>
        @error('meta_description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Meta Image</label>
        <input class="form-control" type="file" name="meta_image">
        @isset($blog)
            @php
                $image = $blog->getFirstMedia('meta_image');
            @endphp
            <div class="mt-3 comman-image">
                @if ($image)
                    <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="30%"
                        width="30%">
                @endif
            </div>
        @endisset
        @error('meta_image')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" {{ !($blog->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" {{ ($blog->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
        </select>
    </div>
    
    <div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
        </div>
    </div>
</div>
<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Title<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($page->title) ? $page->title : old('title') }}" placeholder="Enter Title" name="title">
        @error('title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="email-wrapper mt-3">
        <div class="theme-form">
            <div class="mb-3">
                <label class="w-100">Content</label>
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
                            <!-- Add more options here-->
                            <span class="ql-formats">
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
                    <div id="editor8">{!! isset($page->content) ? $page->content : '' !!}</div>
                </div>
                <input type="hidden" name="content" value="{{ isset($page->content) ? $page->content : '' }}" id="quill-editor-area">
                @error('content')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Title<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($page->meta_title) ? $page->meta_title : old('meta_title') }}" placeholder="Enter Meta Title" name="meta_title">
        @error('meta_title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Description</label>
        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ isset($page->meta_description) ? $page->meta_description : old('meta_description') }}</textarea>
        @error('meta_description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Meta Image</label>
        <input class="form-control" type="file" name="meta_image">
        @error('meta_image')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @isset($page)
        <div class="mt-3 comman-image">
            @foreach ($page->getMedia('meta_image') as $image)
                <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="15%"
                    width="15%">
            @endforeach
        </div>
    @endisset
    </div>

    <div class="mt-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" {{ !($page->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Active') }}</option>
            <option value="0" {{ ($page->status ?? 1) == 0 ? 'selected' : '' }}>{{ __('Deactive') }}</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
    </div>
</div>


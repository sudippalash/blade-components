@once
    @push(config('blade-components.styles_stack'))
        @include('blade-components::components.inc.img-input-css')
    @endpush
@endonce

<div class="sp-img-upload" id="{{ $fileId }}">
    <div class="sp-img-upload-wrap" id="{{ $fileId }}_sp_img_upload_wrap" @if($filePath)style="display:none;"@endif>
        <input type="hidden" name="{{ $fileId }}_is_removed" id="{{ $fileId }}_is_removed" value="0" />
        <input type="file" class="sp-img-upload-input" name="{{ $inputName }}" id="{{ $fileId }}_file" onchange="spReadUpload(this, '{{ $fileId }}');" accept="image/*" {{ $multiple }} {{ $required }}>
        <h3>{{ trans('blade-components::sp_blade_components.drag_and_drop_text') }}</h3>
    </div>
    <div class="sp-img-upload-content" id="{{ $fileId }}_sp_img_upload_content" @if(!$filePath)style="display:none;"@endif>
        <div class="sp-img-upload-box" id="{{ $fileId }}_sp_img_upload_box">
            @if ($filePath)
            <div class="sp-img-container">
                <img src="{{ $filePath }}" class="sp-img-container-image" />
                <div class="sp-img-overlay">
                    <a class="sp-img-overlay-icon">
                        <button type="button" onclick="spRemoveImage('{{ $fileId }}')" class="btn btn-danger btn-sm">x</button>
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@error($inputName)
    <span class="help-block">{{ $message }}</span>
@enderror

@once
    @push(config('blade-components.scripts_stack'))
        @include('blade-components::components.inc.img-input-js')
    @endpush
@endonce
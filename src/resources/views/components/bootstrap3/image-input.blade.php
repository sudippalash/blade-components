@include('blade-components::components.inc.img-input-css')

<div class="sp-img-upload" id="{{ $fileId }}">
    <div class="sp-img-upload-wrap" id="{{ $fileId }}_sp_img_upload_wrap" @if($filePath)style="display:none;"@endif>
        <input type="hidden" name="{{ $fileId }}_is_removed" id="{{ $fileId }}_is_removed" value="0" />
        <input type="file" class="sp-img-upload-input" name="{{ $inputName }}" id="{{ $fileId }}_file" onchange="spReadUpload(this, '{{ $fileId }}');" accept="image/*" {{ $multiple }} {{ $required }}>
        <h3>Drag and drop a Image or select a Image</h3>
    </div>
    <div class="sp-img-upload-content" id="{{ $fileId }}_sp_img_upload_content" @if(!$filePath)style="display:none;"@endif>
        <div class="sp-img-upload-box" id="{{ $fileId }}_sp_img_upload_box">
            @if ($filePath)
                <img src="{{ $filePath }}" class="img-responsive" />
            @endif
        </div>
        <div class="img-btn-wrap">
            <button type="button" onclick="spRemoveImage('{{ $fileId }}')" class="btn btn-danger btn-sm btn-flat">x</button>
        </div>
    </div>
</div>

@error($inputName)
    <span class="help-block">{{ $message }}</span>
@enderror

@include('blade-components::components.inc.img-input-js')


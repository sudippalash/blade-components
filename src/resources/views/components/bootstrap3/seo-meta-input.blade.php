<div class="col-lg-12" style="background-color: rgba(0,0,0,.02);">
    <h3>{{ trans('blade-components::sp_blade_components.meta_seo') }}</h3>

    <div class="form-group{{ $errors->has($meta_title) ? ' has-error' : '' }}">
        <label>{{ trans('blade-components::sp_blade_components.meta_title') }}:</label>
        <input type="text" class="form-control" name="{{ $meta_title }}" value="{{ old($meta_title, isset($data) ? $data->meta_title : '') }}">

        @if ($errors->has($meta_title))
            <span class="help-block">{{ $errors->first($meta_title) }}</span>
        @endif
    </div>

    <div class="form-group{{ $errors->has($meta_keywords) ? ' has-error' : '' }}">
        <label>{{ trans('blade-components::sp_blade_components.meta_keywords') }}:</label>
        <input type="text" class="form-control" name="{{ $meta_keywords }}" value="{{ old($meta_keywords, isset($data) ? $data->meta_keywords : '') }}">

        @if ($errors->has($meta_keywords))
            <span class="help-block">{{ $errors->first($meta_keywords) }}</span>
        @endif
    </div>

    <div class="form-group{{ $errors->has($meta_description) ? ' has-error' : '' }}">
        <label>{{ trans('blade-components::sp_blade_components.meta_description') }}:</label>
        <textarea class="form-control" name="{{ $meta_description }}" rows="6">{{ old($meta_description, isset($data) ? $data->meta_description : '') }}</textarea>

        @if ($errors->has($meta_description))
            <span class="help-block">{{ $errors->first($meta_description) }}</span>
        @endif
    </div>
</div>

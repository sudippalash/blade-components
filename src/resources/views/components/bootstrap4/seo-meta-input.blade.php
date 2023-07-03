<div style="{{ $seoForm['style'] }}">
    @if (config('blade-components.seo_form.title_show'))
    <h3>{{ trans('blade-components::sp_blade_components.meta_seo') }}</h3>
    @endif

    <div class="form-group row">
        <label {!! $seoForm['label_col'] !!}>{{ trans('blade-components::sp_blade_components.meta_title') }}:</label>
        <div {!! $seoForm['input_col'] !!}>
            <input type="text" class="form-control{{ $errors->has($meta_title) ? ' is-invalid' : '' }}" name="{{ $meta_title }}" value="{{ $getValue($meta_title) }}" />

            @if ($errors->has($meta_title))
                <span class="invalid-feedback d-block">{{ $errors->first($meta_title) }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label {!! $seoForm['label_col'] !!}>{{ trans('blade-components::sp_blade_components.meta_keywords') }}:</label>
        <div {!! $seoForm['input_col'] !!}>
            <input type="text" class="form-control{{ $errors->has($meta_keywords) ? ' is-invalid' : '' }}" name="{{ $meta_keywords }}" value="{{ $getValue($meta_keywords) }}" />

            @if ($errors->has($meta_keywords))
                <span class="invalid-feedback d-block">{{ $errors->first($meta_keywords) }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label {!! $seoForm['label_col'] !!}>{{ trans('blade-components::sp_blade_components.meta_description') }}:</label>
        <div {!! $seoForm['input_col'] !!}>
            <textarea class="form-control{{ $errors->has($meta_description) ? ' is-invalid' : '' }}" name="{{ $meta_description }}" rows="6">{{ $getValue($meta_description) }}</textarea>

            @if ($errors->has($meta_description))
                <span class="invalid-feedback d-block">{{ $errors->first($meta_description) }}</span>
            @endif
        </div>
    </div>
</div>

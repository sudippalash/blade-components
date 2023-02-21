<div id="{{ $modalId }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="POST" action="{{ $postRoute }}" enctype="multipart/form-data" class="non-validate">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $label }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        @if ($exampleFilePath)
                        {{ trans('blade-components::sp_blade_components.download_example_file') }} <a href="{{ $exampleFilePath }}">{{ trans('blade-components::sp_blade_components.click_here') }}</a>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <label class="required">{{ $fileType }}:</label>
                        <input type="file" class="form-control" name="file" required>

                        @if ($errors->has('file'))
                            <span class="help-block">{{ $errors->first('file') }}</span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary {{ $btnClass }}">{{ trans('blade-components::sp_blade_components.import') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

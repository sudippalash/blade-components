<div id="{{ $modalId }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="POST" action="{{ $postRoute }}" enctype="multipart/form-data" class="non-validate">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ $label }}</h4>
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
                    <button type="submit" class="btn btn-default {{ $btnClass }}">{{ trans('blade-components::sp_blade_components.import') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

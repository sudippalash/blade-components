<div class="btn-group">
    <button type="button" class="btn btn-sm {{ $btnClass ?? 'btn-light' }} dropdown-toggle" data-toggle="dropdown" data-boundary="viewport">{!! trans('blade-components::sp_blade_components.action') !!}</button>
    <div class="dropdown-menu dropdown-menu-right">
        {{ $slot }}
    </div>
</div>

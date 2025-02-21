<div class="btn-group">
    <button type="button" class="btn btn-sm {{ $btnClass ?? 'btn-light' }} dropdown-toggle" data-bs-toggle="dropdown">{!! trans('blade-components::sp_blade_components.action') !!}</button>
    <ul class="dropdown-menu dropdown-menu-end">
        {{ $slot }}
    </ul>
</div>
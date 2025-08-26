@if ($offcanvas)
    <div class="offcanvas offcanvas-end sp-search-offcanvas" tabindex="-1" id="spSearchContainer">
        <div class="offcanvas-header">
            <h5 class="mb-0">{{ trans('blade-components::sp_blade_components.search') }}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form method="GET" action="{{ $action }}">
                {{ $slot }}

                <div class="d-flex">
                    <div class="col-11">
                        <div class="d-grid">
                            <button type="submit" class="btn {{ $searchButton }}">
                                <i class="fa fa-search"></i> {{ trans('blade-components::sp_blade_components.search') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-1">
                        <a class="btn {{ $resetButton }}" href="{{ $action }}">
                            X
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        .sp-search-offcanvas [class^="col-md-"],
        .sp-search-offcanvas [class*=" col-md-"] {
            width: 100% !important;
        }
    </style>
@else
    <div class="accordion mb-3">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spSearchContainer">
                    {{ trans('blade-components::sp_blade_components.filter') }}
                </button>
            </h2>
            <div id="spSearchContainer" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <form method="GET" action="{{ $action }}">
                        <div class="row">                
                            {{ $slot }}

                            <div class="col-md-2">
                                <button type="submit" class="btn {{ $searchButton }}">
                                    <i class="fa fa-search"></i> {{ trans('blade-components::sp_blade_components.search') }}
                                </button>
                                
                                <a class="btn {{ $resetButton }}" href="{{ $action }}">
                                    <i class="fa fa-times"></i> {{ trans('blade-components::sp_blade_components.reset') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
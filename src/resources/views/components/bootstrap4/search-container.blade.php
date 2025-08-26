<div class="accordion mb-3">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#spSearchContainer">
                    {{ trans('blade-components::sp_blade_components.filter') }}
                </button>
            </h2>
        </div>
        <div id="spSearchContainer" class="collapse">
            <div class="card-body">
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
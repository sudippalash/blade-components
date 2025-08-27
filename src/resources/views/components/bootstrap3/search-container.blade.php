<div class="panel panel-default" style="margin-bottom: 15px;">
    <div class="panel-heading">
            <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#spSearchContainer">
                {{ trans('blade-components::sp_blade_components.filter') }}
            </button>
    </div>
    <div id="spSearchContainer" class="collapse">
        <div class="panel-body">
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
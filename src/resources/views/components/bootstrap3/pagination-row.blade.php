@once
    @push(config('blade-components.styles_stack'))
        <style>
            .sp-pagi-msg {
                font-size: 14px;
                color: #999;
                line-height: 30px;
                font-weight: 500;
            }
            @media (max-width:767.98px) {
                .sp-pagi-msg {
                    text-align: center;
                }
            }
            .sp-pagi-limit-box {
                display: flex;
                justify-content: center;
            }
            @media (min-width: 768px) {
                .sp-pagi-limit-box {
                    justify-content: flex-end;
                }
                .sp-pagi-limit-box-body {
                    width: 170px !important;
                }
            }
            .sp-pagi-limit {
                width:80px !important;
            }
            .sp-pagination .pagination {
                margin: 0;
            }
        </style>
    @endpush
@endonce
<div class="row">
    <div class="col-sm-3 sp-pagi-msg">{!! $paginationMessage !!}</div>

    <div class="col-sm-6 text-center sp-pagination">
        {{ $records ? $records->appends(request()->except('page'))->links() : null }}
    </div>

    <div class="col-sm-3">
        <div class="sp-pagi-limit-box">
            <div class="input-group sp-pagi-limit-box-body">
                <span class="input-group-addon">{{ trans('blade-components::sp_blade_components.paginate') }}:</span>

                <select class="form-control sp-pagi-limit" id="sp-pagi-limit" name="limit">
                    @foreach(config('blade-components.pagination_options') as $pag)
                        <option value="{{ $paginationUrl }}limit={{ $pag }}" {{ ($pag == (request('limit') ?? config('blade-components.paginate_default_limit'))) ? 'selected' : '' }}>{{ $pag }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("sp-pagi-limit").addEventListener("change", myFunction);
    function myFunction() {
        window.location.href = document.getElementById("sp-pagi-limit").value;
    }
</script>
<div class="section pt-0 small_pb">
    <div class="container">
        @if ($title)
        <h3 style="text-align:center;padding:20px 0;font-size:30px;">{!! BaseHelper::clean($title) !!}</h3>
        @endif
        @if ($products->isNotEmpty())
            <div class="row">
                @foreach($products as $product)
                    <div class="col-6 col-car">
                        {!! Theme::partial('product-item', compact('product')) !!}
                    </div>
                @endforeach
            </div>
            @if ($products instanceof Illuminate\Pagination\LengthAwarePaginator)
                <div class="shop__pagination">
                    {!! $products->withQueryString()->links() !!}
                </div>
            @endif
        @endif
    </div>
</div>

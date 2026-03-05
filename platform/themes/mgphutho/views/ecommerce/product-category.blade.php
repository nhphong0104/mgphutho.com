@php Theme::set('pageName', $category->name) @endphp

<div class="container">

    <h1 class="page-heading">{{ $category->name }}</h1>
    <div id="gridproductlist">
        {!! html_entity_decode($category->description) !!}
        <div
            style="max-width:700px;padding:20px;margin: 20px auto;border: 3px dotted #32580f;text-align: center;color: #e74c3c;border-radius: 15px;">
            <h3 style="font-size: 120%;font-weight:bold;margin-bottom:10px;">MG LÁNG HẠ&nbsp;ƯU ĐÃI LỚN TRONG THÁNG</h3>

            <h4 style="font-size: 120%;font-weight:bold;margin-bottom:10px;">HỖ TRỢ TRẢ GÓP VAY 90% - LÃI SUẤT ƯU ĐÃI
            </h4>

            <div class="row">
                <div class="col-6" style="margin-top:8px; padding-left: 8px; padding-right: 8px;"><a href="tel:0971593326"
                        style="display: block;overflow: hidden;padding: 9px 0;border-radius: 4px;font-size: 120%;line-height: normal;text-align: center;margin-top:.5rem;color: #fff!important;background-color:#fd6e1d!important;text-decoration:none!important;"><strong>Hotline
                            0971.593.326</strong><br>
                        <span style="font-size:12px;">Quý khách vui lòng gọi để có giá xe tốt nhất</span></a></div>

                <div class="col-6" style="margin-top:8px; padding-left: 8px; padding-right: 8px;"><a
                        href="javascript:openModelBaoGia();"
                        style="display: block;overflow: hidden;padding: 9px 0;border-radius: 4px;font-size: 120%;line-height: normal;text-align: center;margin-top:.5rem;color: #fff!important;background-color:#288ad6!important;text-decoration:none!important;"><strong>NHẬN
                            BÁO GIÁ</strong> <span style="display: block;font-size: 12px;margin-top:3px;">Hoặc đăng ký
                            nhận Báo giá xe lăn bánh tốt nhất</span></a></div>
            </div>
        </div>
        <div class="grid-content group">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-car">
                        {!! Theme::partial('product-item', ['product' => $product]) !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

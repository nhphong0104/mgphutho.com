<?php
namespace Theme\Mgphutho\Http\Controllers;

use App\Http\Controllers\Controller;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Ecommerce\Services\Products\GetProductService;
use Botble\Media\Facades\RvMedia;
use Botble\Shortcode\View\View;
use Botble\Theme\Facades\Theme;

class LanbanhController extends Controller 
{

    public function index()
    {
        $categoryProduct = get_product_categories();
        return Theme::scope('lanbanh', compact('categoryProduct'))->render();
    }

    public function sendQuotationSuccess()
    {
        return Theme::scope('send-quotation-success')->render();
    }


    public function getProduct($category_id)
    {
         $request = request();

        $category = ProductCategory::query()
                        ->where('id', $category_id)
                        ->with(['slugable'])
                        ->firstOrFail();

        if (! EcommerceHelper::productFilterParamsValidated($request)) {
            $request = request();
        }

        $with = EcommerceHelper::withProductEagerLoadingRelations();

        $request->merge(['categories' => [$category_id]]);

        $products = app(GetProductService::class)->getProduct($request, null, null, $with);
        $html = "";
        foreach ($products as $product) {
            $html .='<option value="'.$product->id.'">'.$product->name.'</option>';
        }
        return response()->json([
            'html' => $html
        ]);
        
    }


    public function getProductDetail($product_id)
    {
        $product = get_product_by_id($product_id);    

        if (! $product) {
            abort(404);
        }

        return response()->json([
            'name' => $product->name,
            'price' => $product->price,
            'img' => RvMedia::getImageUrl($product->image, 'medium'),
        ]);
    
    }
    

}
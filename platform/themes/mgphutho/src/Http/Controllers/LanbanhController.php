<?php
namespace Theme\Mgphutho\Http\Controllers;

use App\Http\Controllers\Controller;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Ecommerce\Services\Products\GetProductService;
use Botble\Shortcode\View\View;
use Botble\Theme\Facades\Theme;

class LanbanhController extends Controller 
{

    public function index()
    {
        $categoryProduct = get_product_categories();
        return Theme::scope('lanbanh', compact('categoryProduct'))->render();
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

        return response()->json($products);
    }


    public function getVersions($model_id)
    {

    
    }
    

}
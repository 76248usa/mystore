<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Category;
use App\Subcategory;

class FrontProductListController extends Controller
{
    public function index()
    {


        $products =  Product::latest()->limit(9)->get();
        $randomActiveProducts = Product::inRandomOrder()->limit(3)->get();
        $randomActiveProductIds = [];
        foreach ($randomActiveProducts as $product) {
            array_push($randomActiveProductIds, $product->id);
        }
        $randomItemProducts = Product::whereNotIn('id', $randomActiveProductIds)->limit(3)->get();
        //$sliders = Slider::get();


        return view('shop.product', compact('products', 'randomItemProducts', 'randomActiveProducts'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $productFromSameCategories = Product::inRandomOrder()->where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();


        return view('shop.product_detail', compact('product', 'productFromSameCategories'));
    }

    public function allProduct($name, Request $request)
    {
        $category  = Category::where('slug', $name)->first();
        $categoryId = $category->id;
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        $slug = $name;

        if ($request->subcategory) {
            $products = $this->filterProducts($request);
            $filterSubCategories = $this->getSubcategoriesId($request);

            return view('shop.category', compact('products', 'subcategories', 'slug', 'categoryId', 'filterSubCategories'));
        } elseif ($request->min || $request->max) {
            $products = $this->filterByPrice($request);
            return view('shop.category', compact('products', 'subcategories', 'slug', 'categoryId'));
        } else {
            $products = Product::where('category_id', $category->id)->get();
            return view('shop.category', compact('products', 'subcategories', 'slug', 'categoryId'));
        }
    }

    public function allSubcategory($name)
    {
        $subcategory = Subcategory::where('slug', $name)->first();
        $products = Product::where('subcategory_id', $subcategory->id)->get();
        return view('shop.subcategory_list', compact('products'));
    }

    public function filterProducts(Request $request)
    {
        $subId = [];
        $subcategory = Subcategory::whereIn('id', $request->subcategory)->get();
        foreach ($subcategory as $sub) {
            array_push($subId, $sub->id);
        }
        $products = Product::whereIn('subcategory_id', $subId)->get();
        return $products;
    }

    public function getSubcategoriesId(Request $request)
    {
        $subId = [];
        $subcategory = Subcategory::whereIn('id', $request->subcategory)->get();
        foreach ($subcategory as $sub) {
            array_push($subId, $sub->id);
        }
        $products = Product::whereIn('subcategory_id', $subId)->get();
        return $subId;
    }

    public function filterByPrice(Request $request)
    {
        $categoryId = $request->categoryId;
        $product = Product::where('category_id', $categoryId)
            ->whereBetween('price', [$request->min, $request->max])
            ->get();

        //$categoryId = $request->categoryId;
        // $product = Product::whereBetween('price', [$request->min, $request->max])->where//('category_id', $categoryId)->get();

        return $product;
    }

    public function moreProducts(Request $request){
        if($request->search){
          $products = Product::where('name','like', '%'.$request->search.'%')
            ->orWhere('description','like','%'.$request->search.'%')
            ->orWhere('additional_info','like','%'.$request->search.'%')

            ->paginate(50);
            return view('shop.all-product',compact('products'));
        }
    }
}

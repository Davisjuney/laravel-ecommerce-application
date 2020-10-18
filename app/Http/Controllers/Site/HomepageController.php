<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class HomepageController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(){
        $hot_products = $this->productRepository->getHotProducts();
        $top_sales = $this->productRepository->getTopSales();
        $trending = $this->productRepository->getTrending();
        
        return view('site.pages.homepage', compact('hot_products', 'top_sales', 'trending'));
    }
}

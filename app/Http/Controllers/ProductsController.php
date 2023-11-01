<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;



class  productsController extends Controller
{
    public function index()
    {
        return Products::all();
    }
};

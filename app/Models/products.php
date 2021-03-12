<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'Product_ID';
    protected $fillable = [
    'Product_ID',
    'Product_Name',
    'Category_ID',
    'Price_Product',
    'Product_Des',
    'Product_Image',
    'Product_Quantity',
    'Product_Keyword',
    'Meta_Des',
    ];
    public function OrderDetails()
    {
        return $this->hasMany('App\Model\orderdetails', 'Product_ID', 'Product_ID');
    }
    public function Catagorys()
    {
        return $this->belongsTo('App\Model\categorys', 'Category_ID', 'Category_ID');
    }
}

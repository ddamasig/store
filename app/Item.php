<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Relationships
    public function images() {
        return $this->hasMany('App\Image');
    }

    // Get the stock phrase
    public function getStockPhrase()
    {
        $stock = $this->attributes['stock'];
        if($stock > 1)
            return "{$stock} items in stock";
        else
            return "Only {$stock} item left!";
    }

    public function getFormattedCategory()
    {
        $category = $this->attributes['category'];
        return ucfirst(rtrim($category, "s"));
    }

    public function getFormattedPrice()
    {
        $price = number_format($this->attributes['price'], 0);
        return ucfirst("P $price");
    }
}

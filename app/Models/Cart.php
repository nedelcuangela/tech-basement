<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $products;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart && is_object($oldCart) && $oldCart->products != null)
        {
            $totalPrice = 0;
            foreach ($oldCart->products as $product)
            {
                $totalPrice += $product['qty'] * $product['price'];
            }
            $this->products = $oldCart->products;
            $this->totalQty = count($oldCart->products);
            $this->totalPrice = $totalPrice;
        }
    }

    public function add($product, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $product->price, 'product' => $product];
        if ($this->products) {
            if (array_key_exists($id, $this->products))
            {
                $storedItem = $this->products[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $product->price * $storedItem['qty'];
        $this->products[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += (int) $product->price;
    }

    public function reduceByOne($id)
    {
        $this->products[$id]['qty']--;
        $this->products[$id]['price'] -= $this->products[$id]['product']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->products[$id]['product']['price'];

        if ($this->products[$id]['qty'] <= 0)
        {
            unset($this->products[$id]);
        }
    }

    public function removeItem($id) {
        $this->totalQty -= $this->products[$id]['qty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }
}

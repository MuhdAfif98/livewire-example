<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];
    public $total, $itemPrice = 0;
    public $itemName, $itemId;

    public function addToCart()
    {
        $itemId = count($this->cart) + 1;
        $this->cart[] = [
            'id' => $itemId,
            'name' => $this->itemName,
            'price' => $this->itemPrice,
        ];

        $this->updateTotal();
    }

    // Function to remove item from cart
    public function removeFromCart($itemId)
    {
        // Convert $itemId to an integer (optional, depending on your data type)
        $itemId = (int)$itemId;

        $this->cart = array_filter($this->cart, function ($item) use ($itemId) {
            return $item['id'] !== $itemId;
        });

        $this->updateTotal();
    }


    // Function to update total
    private function updateTotal()
    {
        $this->total = array_sum(array_column($this->cart, 'price'));
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}

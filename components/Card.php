<?php namespace Shohabbos\ScriptShop\Components;

use OFFLINE\MicroCart\Models\CartItem;
use OFFLINE\MicroCart\Classes\Payments\PaymentRedirector;

class Cart extends \OFFLINE\MicroCart\Components\Cart
{        
    public function onRun()
    {
        // An off-site payment has been completed. Important, this code
        // needs to be present if you are using PayPal or Six. 
        if ($type = request()->input('return')) {
            return (new PaymentRedirector($this->page->page->fileName))->handleOffSiteReturn($type);
        }

        // Do something.
    }

    public function onAdd()
    {
        $item           = new CartItem();
        $item->name     = 'Your product';
        $item->quantity = random_int(1, 4);
        $item->price    = 100.00;

        $this->cart->add($item);

        return $this->refreshCart();
    }

    
}
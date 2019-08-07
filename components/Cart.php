<?php namespace Shohabbos\ScriptShop\Components;

use OFFLINE\MicroCart\Models\Cart as CartModel;
use OFFLINE\MicroCart\Models\CartItem;
use Shohabbos\ScriptShop\Models\Script;
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
        $script = Script::find(input('id'));

        if (!$script) {
            throw new \ValidationException(['name' => 'Script not found!']);
        }

        $item           = new CartItem();
        $item->code     = $script->id;
        $item->name     = $script->title;
        $item->quantity = 1;
        $item->price    = $script->price;

        $this->cart->ensure($item);
        $this->refreshCart();

        return \Redirect::refresh();
    }

    public function onRemoveFromCart() {
        $cart = CartModel::fromSession();

        if ($cart) {
            $cart->remove(input('id'));
        }
    }

    
}
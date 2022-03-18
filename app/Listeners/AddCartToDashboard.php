<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CartEvent;
use App\Models\Product;
class AddCartToDashboard
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CartEvent $event)
    {
           $pro=$event->product;

        //    return view('pages.admin',['Data'=>$pro]);
// $this->getPruduct($event->$product->name);
        //
    }
    //   public function getPruduct($product)
    // {
    //     //save()
    // }

}

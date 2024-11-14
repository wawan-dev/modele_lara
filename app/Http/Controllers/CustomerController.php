<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function test(){
        // Récupérer le client 103
        $customer = Customer::find(103);

        // Ajouter la catégorie au client
        $customer->categories()->attach([103, 4]);

        return view("orders-list");
    }

}
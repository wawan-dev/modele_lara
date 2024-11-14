<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function test(){
        // Récupérer le client 103
        $customer = Customer::find(103);

        // Ajouter la catégorie au client
        $customer->categories()->detach([2]);

        return redirect("/orders");
    }

    function list(){
        return view("customer-list", ["customers" => Customer::paginate(10)]);
    }

}
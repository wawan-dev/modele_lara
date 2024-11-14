<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function list(){
        return view("orders-list", ["orders" => Order::paginate(10)]);
    }

    function detail($id){
        return view("orders-detail", ["order" => Order::find($id), "orderdetails"=> Order::find($id)->orderdetails]);
    }

    function createForm(){
        return view("orders-create", ["customers" => Customer::all()]);
    }

    function create(Request $request){
        $order = new Order();
        if(Order::find($order->orderNumber) == null){
            $order->orderNumber = $request->input("orderNumber");
            
        }
        else{
            
            return redirect("/orders/create")->withErrors("Le numéro de commande existe déja dans la base.");
        }

        $order->status = $request->input("status");
        $order->comments = $request->input("comments");
        $order->customerNumber = $request->input("customerNumber");

        $customer = Customer::find($order->customerNumber);
        if(  $customer != null){
            $order->orderNumber = $request->input("orderNumber");
        }
        else{
            return redirect("/orders/create")->withErrors("Le client n'existe pas dans la base.");
        }
        $order->orderDate = $request->input("orderDate");
        $order->requiredDate = $request->input("requiredDate");
        $order->shippedDate = $request->input("shippedDate");

        $payment = new Payment();
        $payment->checkNumber= $request->input("num_cheque");
        $payment->paymentDate= $request->input("date_paiement");
        $payment->amount= $request->input("montant");
        $customer->payments()->save($payment);
        $customer->categories()->attach([$customer, 2]);
        $order->save();


        return redirect("/orders");
    }
}

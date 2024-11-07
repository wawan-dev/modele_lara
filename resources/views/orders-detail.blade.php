<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

    <style>
        .table {
            border: 2px solid #dee2e6;
            margin: 20px;
        }
        .table th, .table td {
            border: 2px solid #dee2e6;
            text-align: center; 
        }
        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        h2 {
            margin-top: 20px;
            color: #343a40; 
        }
    </style>

        <h2>Commande</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>orderNumber</td>
                        <td>orderDate</td>
                        <td>requiredDate</td>
                        <td>shippedDate</td>
                        <td>status</td>
                        <td>comments</td>
                        <td>customerNumber</td>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                
                    <tr>
                        <td>{{ $order->orderNumber }}</td>
                        <td>{{ $order-> orderDate }}</td>
                        <td>{{ $order->requiredDate }}</td>
                        <td>{{ $order->shippedDate }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->comments }}</td>
                        <td>{{ $order->customerNumber }}</td>
                    </tr>    

                </tbody>
            </table>

        <br>
        <h2>Client</h2>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <td>customerNumber</td>
                        <td>customerName</td>
                        <td>contactLastName</td>
                        <td>contactFirstName</td>
                        <td>phone</td>
                        <td>addressLine2</td>
                        <td>city</td>
                        <td>state</td>
                        <td>postalCode</td>
                        <td>country</td>
                        <td>salesRepEmployeeNumber</td>
                        <td>creditLimit</td>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                
                    <tr>
                        <td>{{ $order->customer->customerNumber }}</td>
                        <td>{{ $order->customer->customerName }}</td>
                        <td>{{ $order->customer->contactLastName }}</td>
                        <td>{{ $order->customer->contactFirstName }}</td>
                        <td>{{ $order->customer->phone }}</td>
                        <td>{{ $order->customer->addressLine2 }}</td>
                        <td>{{ $order->customer->city }}</td>
                        <td>{{ $order->customer->state }}</td>
                        <td>{{ $order->customer->postalCode }}</td>
                        <td>{{ $order->customer->country }}</td>
                        <td>{{ $order->customer->salesRepEmployeeNumber }}</td>
                        <td>{{ $order->customer->creditLimit }}</td>
                    </tr>    
                </tbody>
            </table>

        <h2>Détail</h2>  
        <table class="table table-striped"">
            <thead>
                <tr>
                    <td>orderNumber</td>
                    <td>productCode</td>
                    <td>quantityOrdered</td>
                    <td>priceEach</td>
                    <td>OrderLineNumber</td>
                    
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-slate-800">
            @foreach($orderdetails as $o)
                <tr>
                    <td>{{ $o->orderNumber }}</td>
                    <td>{{ $o->productCode }}</td>
                    <td>{{ $o->quantityOrdered }}</td>
                    <td>{{ $o->priceEach }}</td>
                    <td>{{ $o->orderLineNumber }}</td>
                </tr>  
            @endforeach  
            </tbody>
        </table>
    </body>
</html>
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
                        <td>{{ $customer->customerNumber }}</td>
                        <td>{{ $customer->customerName }}</td>
                        <td>{{ $customer->contactLastName }}</td>
                        <td>{{ $customer->contactFirstName }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->addressLine2 }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->postalCode }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->salesRepEmployeeNumber }}</td>
                        <td>{{ $customer->creditLimit }}</td>
                    </tr>    
                </tbody>
            </table>

        <h2>Détail</h2>  
        <table class="table table-striped">
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
            @foreach($customer->orders as $o)
                @foreach($o->orderdetails as $c)
                <tr>
                    <td>{{ $c->orderNumber }}</td>
                    <td>{{ $c->productCode }}</td>
                    <td>{{ $c->quantityOrdered }}</td>
                    <td>{{ $c->priceEach }}</td>
                    <td>{{ $c->orderLineNumber }}</td>
                </tr>  
                @endforeach
            @endforeach  
            </tbody>
        </table>
    </body>
</html>
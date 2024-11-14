<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <div >
                <table class="table">
                    <thead>
                        <tr>
                            <td>CustomerName</td>
                            <td>Name</td>
                            <td>Prenom</td>
                            <td>Téléphone</td>
                            <td>addresse1</td>
                            <td>Code Postal</td>
                            <td>ville</td>
                            <td>pays</td>
                            <td>creditLimit</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->customerName}}</td>
                            <td>{{$customer->contactLastName}}</td>
                            <td>{{$customer->contactFirstName}} </td>
                            <td>{{$customer->phone}}</td>
                            <td>({{$customer->addressLine1}})</td>
                            <td>({{$customer->postalCode}})</td>
                            <td>({{$customer->city}})</td>
                            <td>({{$customer->country}})</td>
                            <td>({{$customer->creditLimit}})</td>

                            <td>
                                <a class="btn btn-primary" href="/customers/{{$customer->customerNumber}}">Voir la page de détail</a>
                            </td>
                        </tr>    
                        
                    @endforeach
                    </tbody>
                </table>
                <div>{{$customers->links('pagination::bootstrap-4')}} </div>
            </div>
        </div>
    </body>
</html>
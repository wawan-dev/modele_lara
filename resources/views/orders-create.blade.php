
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <form action="/orders/create" method="post">
            @csrf
            <div>
                <label for="orderNumber">Numéro de commande</label>
                <input type="text" name="orderNumber" id="orderNumber">
            </div>
            <div>
                <!-- Vous pouvez ajouter ici un select pour les status -->
            </div>
            <div>
                <label for="comments">Commentaires</label>
                <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="customerNumber">Numéro de client</label>
                <select name="customerNumber" id="customerNumber">
                    @foreach($customers as $customer)
                        <option value="{{$customer->customerNumber}}">{{$customer->contactLastName}} {{$customer->contactFirstName}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Créer la commande">
            </div>
        </form>
    </body>
</html>
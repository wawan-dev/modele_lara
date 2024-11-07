<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="card shadow-sm">
        <div class="card-header text-center bg-primary text-white">
            <h4>Créer une commande</h4>
        </div>
        <div class="card-body">
            <form action="/orders/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="orderNumber">Numéro de commande</label>
                    <input type="text" class="form-control" name="orderNumber" id="orderNumber" required>
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select class="form-control" name="status" id="status">
                        <option value="Cancelled">Anuller</option>
                        <option value="Disputed">Contester</option>
                        <option value="InProcess">En cours</option>
                        <option value="Resolved">résolue</option>
                        <option value="Shipped">Envoyer</option>
                        <option value="OnHold">En attente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comments">Commentaires</label>
                    <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="customerNumber">Numéro de client</label>
                    <select class="form-control" name="customerNumber" id="customerNumber">
                        @foreach($customers as $customer)
                            <option value="{{$customer->customerNumber}}">{{$customer->contactLastName}} {{$customer->contactFirstName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="orderDate">Date de commande</label>
                    <input class="form-control" name="orderDate" type="date">
                </div>
                <div class="form-group">
                    <label for="requiredDate">Date de livraison</label>
                    <input class="form-control" name="requiredDate" type="date">
                </div>
                <div class="form-group">
                    <label for="shippedDate">Date d'envoie</label>
                    <input class="form-control" name="shippedDate" type="date">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Créer la commande</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

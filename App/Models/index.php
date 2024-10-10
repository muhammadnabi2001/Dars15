<?php
include __DIR__ . '/../../autoload.php';

use App\Models\Product;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="/create" class="btn btn-primary"> Create </a>
        <div class="col-4">
            <form action="/search" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" id="search" aria-describedby="emailHelp" name="word">
                    <input for="/search" class="btn btn-primary" value="Search" type="submit" name="ok">
                </div>
            </form>
        </div>
        <?php
        $products = Product::all();
        ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Option</th>
            </tr>
            <?php
            foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td>
                        <a href="/update?product_id=<?= $product['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="/delete?product_id=<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php }
            ?>
        </table>
    </div>
</body>

</html>
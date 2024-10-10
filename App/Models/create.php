<?php
include __DIR__ . '/../../autoload.php';
use App\Models\Product;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="POST" action="/create">
            <div class="col-5">
                <div class="mb-3">
                    <label for="Name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                </div>

                <button type="submit" class="btn btn-primary" name="ok">Save</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['ok'])) {
    $data = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
        'image' => 'img.jpg'
    ];
    Product::create($data);
    header("location: /");
}
?>
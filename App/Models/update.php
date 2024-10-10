<?php include __DIR__ . '/../../autoload.php';
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
        <?php
        use App\Models\Product;
        $mahsulotlar = Product::all();

        foreach ($mahsulotlar as $mahsulot) {
            if ($mahsulot['id'] == $_GET['product_id']) { ?>
                <form method="POST" action="/update">
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Product Name</label>
                            <input type="hidden" name="product_id" value="<?=$_GET['product_id']?>">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $mahsulot['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="<?= $mahsulot['price'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Product Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $mahsulot['quantity'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary" name="ok">Update</button>
                    </div>
                </form>
    </div>
<?php }
        }
?>
</body>

</html>

<?php
if (isset($_POST['ok'])) {
    $data = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
    ];
    Product::update($data,$_POST['product_id']);
    header("location: /");
}
?>
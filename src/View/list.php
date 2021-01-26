<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Datecreate</th>
        <th>Describle</th>
        <th>Actions</th>
    </tr>
    <?php if (isset($products)) {
        foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product->getId()?></td>
        <td><?php echo $product->getProductname()?></td>
        <td><?php echo $product->getCategory()?></td>
        <td><?php echo $product->getPrice()?></td>
        <td><?php echo $product->getAmount()?></td>
        <td><?php echo $product->getDatecreate()?></td>
        <td><?php echo $product->getProductdescrible()?></td>

    </tr>
        <?php endforeach;
    } ?>
</table>
</body>
</html>

<?php
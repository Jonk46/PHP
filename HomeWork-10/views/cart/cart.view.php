<table class="table table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Total</th>
        <th scope="col">Remove</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($cartItems as $item): ?>
        <tr>
            <th scope="row"><?= $item->id ?></th>
            <td><img width="50px" src="<?= $item->info->img ?>"></td>
            <td><?= $item->info->name ?></td>
            <td><?= $item->info->price ?></td>
            <td>
                <input type="hidden" name="qty[id][]" value="<?= $item->id ?>">
                <input type="number" name="qty[qty][]" value="<?= $item->product_value ?>" step="1">
            </td>
            <td><?= $productTotal = $item->product_value*$item->info->price ?></td>
            <?php $subTotal += $productTotal ?>
            <td>
                <a href="<?= $_SERVER['PHP_SELF'] ?>?action=remove&product_idrem=<?=$item->id?>">Remove</a>
            </td>
        </tr>
    <?php endforeach ?>
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: right" >Subtotal: </td>
        <td><?php echo $subTotal ?></td>
        <td></td>
    </tr>
    </tbody>
</table>

<a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-primary">Continue Shoping</a>
<a href="<?= $_SERVER['PHP_SELF'] ?>?action=remove_all" class="btn btn-danger">Clean up</a>
<input type="submit" class="btn btn-success" name="btn" value="Save Changes">
<a href="<?= $_SERVER['PHP_SELF'] ?>?route=checkout" class="btn btn-secondary">Checkout</a>

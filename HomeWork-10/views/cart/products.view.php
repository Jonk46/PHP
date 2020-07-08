<div class="card-deck mb-3 text-center">
    <?php foreach ($cartProducts as $product_id => $product): ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?=$product['name']?></h4>
            </div>
            <div class="card-body">
                <img src=<?=$product['img']?> alt="boots" style="object-fit: cover; width: 100%">
                <a class="btn btn-success" href="<?= $_SERVER['PHP_SELF'] ?>?action=add&product_id=<?=$product_id?>">Add to cart</a>
            </div>
        </div>
    <?php endforeach ?>
</div>



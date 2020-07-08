<div class="row">
    <div class="col-12">

            <?php if (count($cartItems) > 0): ?>
                <h3 class="my-4">Shopping Cart</h3>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php require_once __DIR__.'/cart.view.php' ?>
                </form>
            <?php else: ?>
                <?php require_once __DIR__.'/empty.view.php' ?>
            <?php endif ?>

    </div>
</div>
<div class="py-5 text-center">
    <h2>Checkout form</h2>
</div>

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
        </h4>
        <ul class="list-group mb-3">
            <?php foreach($cartItems as $item): ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div><img width="60px" src="<?= $item->info->img ?>"></div>
                    <div>
                        <h6 class="my-0"><?= $item->info->name ?></h6>
                        <small class="text-muted"><?= $item->info->manufacture ?></small>
                    </div>
                    <span class="text-muted"><?= "x".$item->product_value ?></span>
                    <span class="text-muted"><?= $productTotal = $item->product_value*$item->info->price ?></span>
                    <?php $subTotal += $productTotal ?>
                </li>
            <?php endforeach ?>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <span><?php echo $subTotal ?></span>
            </li>
        </ul>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form action="" method="POST" class="needs-validation">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required="required">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required="required">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required="required">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="mb-3">
                <label for="phone">Phone number</label>
                <input type="tel" class="form-control" id="phone" placeholder="0670000000" name="phone" required="required">
                <div class="invalid-feedback">
                    Please enter your phone number.
                </div>
            </div>

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="Credit card">
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="Debit card">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="PayPal">
                    <label class="custom-control-label" for="paypal">PayPal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required="required">
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" required="required">
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" required="required">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="end" type="submit">Continue to checkout</button>
        </form>
    </div>
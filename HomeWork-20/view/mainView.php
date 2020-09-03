<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="templates/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="text-center">
                    <h3 class="mb-5 mt-5">You can choose hear seller:</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <select name="seller_city">
                                    <option value="All">All</option>
                                    <?php
                                    $seller_city = SelectDataFromBD::select("SELECT DISTINCT `seller_city` FROM `sellers` ORDER BY `seller_city`");
                                    foreach($seller_city as $value): ?>
                                        <option value="<?= $value['seller_city'] ?>"><?= $value['seller_city'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="seller_commission">
                                    <option value="All">All</option>
                                    <?php
                                    $seller_com = SelectDataFromBD::select("SELECT DISTINCT `commission` FROM `sellers` ORDER BY `commission`");
                                    foreach($seller_com as $value):?>
                                        <option value="<?= $value['commission'] ?>"><?= $value['commission'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <button class="mt-5" type="submit" name="seller_submit">Choose</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered w-100 text-center mt-5">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Commission, %</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
//                            $query = DetectTableOptions::detect_seller();
                            $seller_list = SelectDataFromBD::select($query = DetectSellerTable::detect_seller());
                            foreach($seller_list as $value): ?>
                            <tr>
                                <th width="5%" scope="row"><?= $value['seller_id'] ?></th>
                                <td width="40%"><?= $value['seller_name'] ?></td>
                                <td width="40%"><?= $value['seller_city'] ?></td>
                                <td width="15%"><?= $value['commission'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <h3 class="mb-5 mt-5">You can choose hear customer:</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <select name="customer_city">
                                    <option value="All">All</option>
                                    <?php
                                    $customer_city = SelectDataFromBD::select("SELECT DISTINCT `customer_city` FROM `customers` ORDER BY `customer_city` ASC");
                                    foreach($customer_city as $value): ?>
                                        <option value="<?= $value['customer_city'] ?>"><?= $value['customer_city'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="customer_rating">
                                    <option value="All">All</option>
                                    <?php
                                    $customer_com = SelectDataFromBD::select("SELECT DISTINCT `rating` FROM `customers` ORDER BY `rating` ASC");
                                    foreach($customer_com as $value):?>
                                        <option value="<?= $value['rating'] ?>"><?= $value['rating'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <button class="mt-5" type="submit" name="customer_submit">Choose</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered w-100 text-center mt-5">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Seller</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $customer_list = SelectDataFromBD::select($query = DetectCustomerTable::detect_customer());
                            foreach($customer_list as $value): ?>
                                <tr>
                                    <th width="5%" scope="row"><?= $value['customer_id'] ?></th>
                                    <td width="40%"><?= $value['customer_name'] ?></td>
                                    <td width="40%"><?= $value['customer_city'] ?></td>
                                    <td width="15%"><?= $value['rating'] ?></td>
                                    <td width="15%"><?= $value['seller_name'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
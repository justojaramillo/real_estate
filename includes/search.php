<?php


?>
<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form method="POST" action="search.php" class="form-search col-md-12" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-3">
                        <label for="type">Listing Types</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="type" id="type" class="form-control d-block rounded-0">
                                <option value="Condo">Condo</option>
                                <option value="Commercial Building">Commercial Building</option>
                                <option value="Property Land">Property Land</option>
                            </select>
                        <?= html::div(false) ?>
                    <?= html::div(false) ?>
                    <div class="col-md-3">
                        <label for="offer">Offer Type</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="offer" id="offer" class="form-control d-block rounded-0">
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>
                                <option value="Lease">Lease</option>
                            </select>
                        <?= html::div(false) ?>
                    <?= html::div(false) ?>
                    <div class="col-md-3">
                        <label for="city">Select City</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="city" id="city" class="form-control d-block rounded-0">
                                <option value="New York">New York</option>
                                <option value="Brooklyn">Brooklyn</option>
                                <option value="London">London</option>
                                <option value="Japan">Japan</option>
                                <option value="Philippines">Philippines</option>
                            </select>
                        <?= html::div(false) ?>
                    <?= html::div(false) ?>
                    <div class="col-md-3">
                        <input type="submit" name="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
                    <?= html::div(false) ?>
                <?= html::div(false) ?>
            </form>
        </div>
    </div>
<?= html::div(false) ?>
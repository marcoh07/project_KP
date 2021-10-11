<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h2>Sale</h2>
    <div class="row">      
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Date</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="date" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Due Date</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="date" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Product</label>
                    </div>
                    <div class="col-sm-12">
                        <select name="" id="" class="form-control"></select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Quantity</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Price / Unit</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>     
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-primary">Customer</label>
                    </div>
                    <div class="col-sm-12">
                        <select name="" id="" class="form-control"></select>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label class="text-primary">Notes</label>
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <br>
    <button class="btn btn-success mb-3">Add To Cart</button>
    <div class="row">
        <table id="dataPurchase" border="1px" class="table table-bordered table-striped">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price / Unit</th>
                <th>Notes</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </table>
    </div>
    <button class="btn btn-alt-primary mx-3 mb-10 mt-10" onclick="location.href='<?php echo base_url();?>/SaleController/index'">Back</button>
    <button class="btn btn-success mb-10 mt-10">Pay</button>
</div>
</body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Insert Supplier</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Supplier</h2>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="email" placeholder="E-Mail" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="phone_number" placeholder="Phone Number" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="address" placeholder="Address" class="form-control" >
                    </div>


                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                    
                </form>
                <div class="d-grid">
                    <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/SupplierController/index'">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
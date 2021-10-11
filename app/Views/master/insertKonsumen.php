<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Insert Konsumen</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Konsumen</h2>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="nama" placeholder="Name" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="quantity" placeholder="Quantity" class="form-control" >
                    </div>
                    
                    <div class="form-group mb-3">
                        <select name="" id="">
                            <option value="">type</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="price" placeholder="Price" class="form-control" >
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                    
                </form>
                <div class="d-grid">
                    <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/KonsumenController/index'">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
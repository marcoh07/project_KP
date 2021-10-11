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
        <div class="row ">
            <button>print</button>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Code</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class="text-info font-w700">PRC202109291057148</span></label>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Date</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class="">29-09-2021</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Supplier</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class="">Abc</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Reference (Purchase Code)</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class="">21-</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Due Date</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class="">29-10-2021</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-primary">Notes</label>
                        </div>
                        <div class="col-sm-12">
                            <label id="_label" name="_label" class="font-s14"><span class=""></span></label>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row">
            <table id="dataSale" border="1px" class="table table-bordered table-striped">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price / Unit</th>
                    <th>Notes</th>
                    <th>Total Price</th>
                </tr>
            </table>
        </div>
        <div class="content-heading">
            Payment Form
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label class="text-primary">Date  <span class="text-danger">*</span></label>
                    <input class=" form-control datepicker" type="text" maxlength="10" id="date" name="date" placeholder="Date" value="29-09-2021">   
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label class="text-primary">Payment Method  <span class="text-danger">*</span></label>
                    <select name="payment_method" id="payment_method" class="js-select2 form-control select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                        <option value="0">Please choose one</option>
                        <option value="2" selected="selected">Bank Transfer</option>
                        <option value="1">Cash</option>
                        <option value="3">Cashless</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-payment_method-container"><span class="select2-selection__rendered" id="select2-payment_method-container" title="Bank Transfer">Bank Transfer</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div> 
            </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label class="text-primary">Amount  <span class="text-danger">*</span></label>
                <input class=" form-control thousand" type="text" maxlength="13" id="amount" name="amount" placeholder="Amount" value="0">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label class="text-primary">Short Notes </label>
                <input class=" form-control " type="text" maxlength="50" id="short_notes" name="short_notes" placeholder="Short Notes" value="">
            </div>
        </div>
    </div>
    <button class="btn btn-alt-primary mb-10 mt-10">Back</button>
    <button class="btn btn-success mb-10 mt-10">Pay</button>
    </div>
</body>
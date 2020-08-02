<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paint Job Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .box{
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="bg-dark">
        <?php include("forms/form1.php"); ?>
        <?php include("forms/form2.php"); ?>
        <?php include("forms/form3.php"); ?>

        <div class="jumbotron jumbotron-fluid bg-warning text-white">
            <div class="container">
                <h1 class="display-4">Paint Job Project</h1>
                <p class="lead">This project is designed to help you evaluate how much a paint-job would cost.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 border box bg-light"><!--LEFT SECTION-->
                    <h2 class="font-weight-bold mt-3 mb-3">Complete the following form</h2>

                    <form action="#" method="post"><!--Start Form 1-->
                        <div class="form-group">
                            <label class="font-weight-bold">1.Enter dimensions of the surface you want to paint:</label>

                            <div class="form-group">
                                <label class="font-italic">a.Calculate area by each wall:</label>
                            </div>
                                
                            <div class="row">
                                <div class="form-group col-md-3 mt-3">
                                    <input type="text" name="wallArea1" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Wall Height">
                                </div>
                                <div class="form-group col-md-3  mt-3">
                                    <input type="text" name="wallArea2" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Wall Length">
                                </div>
                                <button type="submit" name="calcWallArea" id="input-id" class="btn btn-dark col-md-3 rounded-pill">Calculate Wall Area</button>
                                <label class="font-weight-bold col-md-3 mt-4"><?php echo $wallArea;?> <span class="font-weight-normal">[square meters]</span></label>
                            </div>
                        </div>
                    </form><!--End Form 1-->

                    <div class="form-group">
                        <label class="font-italic">b.Place here the calculated areas:</label>
                        <textarea class="form-control" rows="3" placeholder="Example: Wall1 -- 5 / Wall2 -- 7 / Total -- 12"></textarea>
                    </div>

                    <form action="#" method="POST"><!--Start Form 2-->
                        <div class="form-group">
                        
                            <div class="form-group">
                                <label class="font-italic">c.Make a sum of the total area:</label>
                                <small class="form-text text-muted">You can enter as many values as you want:</small>
                                <div class="row">
                                    
                                    <div class="form-group col-md-3 mt-3">
                                        <input type="text" name="sum1" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum2" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum3" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum4" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                    </div>
                                    <div class="form-group col-md-3  mt-3">
                                        <input type="text" name="sum5" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum6" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum7" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                        <input type="text" name="sum8" class="form-control" aria-describedby="emailHelp" placeholder="Enter calc. area">
                                    </div>
                                    <button type="submit" name="calcAllArea" class="btn btn-dark col-md-3 rounded-pill">Calculate Area</button>
                                    <label class="font-weight-bold col-md-3" style="margin-top: 70px;"><?php echo $totalSumArea;?> <span class="font-weight-normal">[square meters]</span></label>
                                </div>
                            </div>
                        </div>
                    </form><!--End Form 2-->
                    
                    <form action="#" method="post"><!--Start Form 3-->
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="font-italic">c.Insert resulted total area:</label>
                                    <input type="text" name="totalArea" class="form-control" aria-describedby="emailHelp" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">2.In how many layers you want to cover over the entire surface?</label>
                                <input type="text" name="neededLayers" class="form-control"aria-describedby="emailHelp" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">3.What is the average surface you can cover with a bucket of paint?</label>
                                <input type="text" name="newBucketCoverage" class="form-control" aria-describedby="emailHelp" required>
                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">4.How many liters has the new bucket of paint that you want to buy?</label>
                                <input type="text" name="newBucketLiters" class="form-control" aria-describedby="emailHelp" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">5.What is the price for the new bucket(s) of paint?</label>
                                <input type="text" name="newBucketPrice" class="form-control" aria-describedby="emailHelp" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">6.What is the total price for the needed tools to complete the job?</label>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="font-italic">Enter the total price here (or leave it blank if you have everything you need):</label>
                                            <input type="text" name="toolsPrice" class="form-control" aria-describedby="emailHelp" required>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <small class="form-text text-muted">The following box is serving as helper to do the BOM/prices.</small>
                                            
                                            <textarea class="form-control" rows="3" placeholder = "Example: spatula -- 5 lei / paintbrush -- 2 lei / total = 7 lei"></textarea>
                                        </div>
                                    </div>
                            </div>

                            <button type="submit" name="calculateAll" class="btn btn-danger col-md-12 mb-3">Calculate Total Price</button>
                    </form><!--End Form 3-->
                </div><!--LEFT SECTION END-->

                <div class="col-md-4 box">
                    <div class="mb-3 bg-light p-3  border box"><!--Start card 1-->
                        <h2 class="font-weight-bold text-center">Inserted data</h2>
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Total Area</td> <td><?php echo $totalAreaNeeded;?> [m^2]</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Selected layers</td> <td><?php echo $neededLayers;?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Coverage area/bucket</td> <td><?php echo $newBucketCoverage;?> [m^2]</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Number of buckets</td> <td><?php echo$totalBucketsNeededRounded;?> pcs</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Bucket Price</td> <td><?php echo $newBucketPrice ;?> lei</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">All buckets Price</td> <td><?php echo $newBucketPrice *$totalBucketsNeededRounded;?> lei</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tools price</td> <td><?php echo $toolsPrice;?> lei</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Liters/new bucket</td> <td><?php echo $newBucketLiters;?> [liters]</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-danger">Total Price</td> <td class="font-weight-bold text-danger"><?php echo $totalPrice;?> lei</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div><!--end card 1-->
                    <div class="text-center mb-3 bg-light p-3 border box"><!--Start card 2-->
                        <h2 class="font-weight-bold">Prescription</h2>
                            <p>You will need <span class="font-weight-bold text-danger"> <?php echo $totalBucketsNeededRounded; ?> </span>buckets of paint to complete the job.</p>
                            <p>The total price for the job is  <span class="font-weight-bold text-danger">  <?php echo $totalPrice; ?> </span> lei.</p>
                    </div><!--end card 2-->
                </div>

            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-info text-white mt-5 text-center mb-0">
            <div class="container">
                <p class="lead">&copy; 2020 Andrei Basturescu. All rights reserved.</p>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
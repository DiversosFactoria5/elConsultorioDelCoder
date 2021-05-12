<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Task</title>

    <link href="../../vendorJs/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style-card-add-task.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 input-add-task">
                        <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-success button-cancel">Cancel</button></a>
                        <div class="row card-add-task">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Coder name / Team</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group ">
                                <span class="input-group-text ">Issue description</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="buttons-add-task">
                        <a href="#" class="btn btn-outline-warning" id="button-update-task">Update Task</a>
                        <a href="#" class="btn btn-outline-danger">Restart</a>
                    </div>



                </div>
            </div>

        </div>

    </div>

    </div>


    <script src="../../vendorJs/jquery/jquery.min.js"></script>
    <script src="../../vendorJs/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../../vendorJs/jquery-easing/jquery.easing.min.js"></script>


    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>
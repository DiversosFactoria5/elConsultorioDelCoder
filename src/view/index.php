<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>


    <link href="../../vendorJs/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../vendorJs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <body id="page-top">

        <div id="wrapper">


            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <div class="container-fluid">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h1 class="m-0 font-weight-bold text-primary titulo-pagina ">Task appointment</h1>
                                <a href="./addTask.php"><button type="button" class="btn btn-outline-success go-add-task">Add Task</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Date / time</th>
                                                <th>Coder name / Team </th>
                                                <th>Issue</th>
                                                <th>Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2011/04/25 12:51:30
</td>
                                                <td>Tiger Nixon</td>
                                                <td>Front end</td>
                                                <td>61</td>
                                                <td>
                                                    <div class="dropdown mb-4">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu animated--fade-in"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a id="button-edit" class="dropdown-item" href="./edit.php">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>2011/04/25 12:51:30
</td>
                                                <td>Garrett Winter</td>
                                                <td>Back end</td>
                                                <td>62</td>
                                                <td>
                                                    <div class="dropdown mb-4">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu animated--fade-in"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Divers@s</span>
                        </div>
                    </div>
                </footer>
 

            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
        <script src="../../vendorJs/jquery/jquery.min.js"></script>
        <script src="../../vendorJs/bootstrap/js/bootstrap.bundle.min.js"></script>


        <script src="../../vendorJs/jquery-easing/jquery.easing.min.js"></script>


        <script src="../../js/sb-admin-2.min.js"></script>


        <script src="../../vendorJs/datatables/jquery.dataTables.min.js"></script>
        <script src="../../vendorJs/datatables/dataTables.bootstrap4.min.js"></script>

    </body>

</html>
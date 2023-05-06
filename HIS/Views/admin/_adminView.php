<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap User Management Data Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #299be4;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn {
            color: #566787;
            float: right;
            font-size: 13px;
            background: #fff;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn:hover,
        .table-title .btn:focus {
            color: #566787;
            background: #f2f2f2;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.settings {
            color: #2196F3;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .status {
            font-size: 30px;
            margin: 2px 2px 0 0;
            display: inline-block;
            vertical-align: middle;
            line-height: 10px;
        }

        .text-success {
            color: #10c469;
        }

        .text-info {
            color: #62c9e8;
        }

        .text-warning {
            color: #FFC107;
        }

        .text-danger {
            color: #ff5b5b;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container-xl">
        <form method="get">
            <input type="text" class="text-info" id="search" name="search">
            <input type="submit" class="btn btn-primary" value="Search">
        </form>
        <div class="container-xl">



            <?php
            // include the function file
            include('functions.php');

            // check if the form was submitted
            if (isset($_GET['search'])) {
                // get the array of rows
                $rows = displayData($_GET['search']);
            } else {
                // if the form was not submitted, get all rows
                $rows = displayData();
            }
            ?>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>User <b>Management</b></h2>
                            </div>

                            <div class="col-sm-7">

                                <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                                    <span>Add New User</span></a>
                                <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i>
                                    <span>Export to
                                        Excel</span></a>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>e-Mail</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $row) { ?>
                                    <tr id="row_<?php echo $row['user_id']; ?>">
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><a href="#"> <?php echo $row['user_name']; ?></a></td>
                                        <td><?php echo $row['user_role']; ?></td>
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['user_mobile']; ?></td>
                                        <td><?php echo $row['user_address']; ?></td>
                                        <td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip" data-user-id="<?php echo $row['user_id']; ?>"><i class="material-icons">&#xE5C9;</i></a>
                                        </td>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                $('.delete').click(function() {
                    let id = $(this).attr('data-user-id');
                    Swal.fire({
                        title: 'A doni te vazhdoni me fshirjen?',
                        showCancelButton: true,
                        confirmButtonText: 'Fshije',
                        cancelButtonText: `Ndalo`,
                        icon: 'warning'
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "Views/admin/delete.php",
                                type: "post",
                                data: {
                                    'user_id': id
                                },
                                success: function(response) {
                                    if (response == 1) {
                                        window.location.reload();
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.log(textStatus, errorThrown);
                                }
                            });
                        }
                    })
                })
            </script>
</body>

</html>!
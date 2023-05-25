

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

    .bg-modal {
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        display: none;
        justify-content: center;
        align-items: center;
    }

    .modal-contents {
        height: 600px;
        width: 850px;
        background-color: white;
        text-align: center;
        padding: 20px;
        position: relative;
        border-radius: 4px;
    }

    .bg-form {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 80%;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }


    select {
        margin: 5px 0;
        padding: 10px;
        border: 1px solid gray;
        border-radius: 4px;
        font-size: 16px;
    }

    .close {
        position: absolute;
        top: 0;
        right: 10px;
        font-size: 42px;
        color: #333;
        transform: rotate(45deg);
        cursor: pointer;
    }

    .close:hover {
        color: #666;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .btn {
        margin: 0 10px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background-color: #4caf50;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-secondary {
        background-color: #666;
    }

    .btn:hover {
        background-color: #3e8e41;
    }

    .btn-secondary:hover {
        background-color: #4c4c4c;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;

        .text-info {
            widh: 20px;
        }



        /* CSS */
        .button-58 {
            align-items: center;
            background-color: #4caf50;
            border: 2px solid #06f;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            fill: #000;
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 600;
            height: 48px;
            justify-content: center;
            letter-spacing: -.8px;
            line-height: 24px;
            min-width: 140px;
            outline: 0;
            padding: 0 17px;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }



        @media (min-width: 768px) {
            .button-58 {
                min-width: 170px;
            }

            */
        }

        form {
            margin-top: 10px;
            display-inline: block;
        }

        .container-xl {
            margin-top: 10px;
            padding-top: 10px;
        }
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
            <input type="submit" class=" button-58" value="Search">
        </form>
    </div>






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
                        <a href="#" id="user-input" class="btn btn-secondary "><i class="material-icons ">&#xE147;</i>
                            <span>Add New Uer</span></a>
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i>
                            <span>Export to Excel</span></a>
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
                                    <button class="btn btn-sm btn-info" onclick="openUpdateModal(<?php echo $row['user_id']; ?>, '<?php echo $row['user_name']; ?>', '<?php echo $row['user_password']; ?>','<?php echo $row['user_role']; ?>', '<?php echo $row['user_email']; ?>', '<?php echo $row['user_mobile']; ?>', '<?php echo $row['user_address']; ?>')">
                                        <i class="material-icons">&#xE8B8;</i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-info delete" title="Delete" data-toggle="tooltip" data-user-id="<?php echo $row['user_id']; ?>"><i class="material-icons">&#xE5C9;</i></a>
                                </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form fields for updating user data -->
                    <form id="updateForm" action="Views/admin/update_user.php" method="POST" >
                    <div class="form-group">
                            <label for="updateUsername">User id</label>
                            <input type="text" class="form-control" id="updateUserId" name="updateUserId" readonly>
                        </div>
                        <div class="form-group">
                            <label for="updateUsername">Username</label>
                            <input type="text" class="form-control" id="updateUsername" name="updateUsername" required>
                        </div>                        
                        <div class="form-group">
                            <label for="updateUsername">Password</label>
                            <input type="text" class="form-control" id="updatePassword" name="updatePassword" required>
                        </div>
                        <div class="form-group">
                            <label for="updateRole">Role</label>
                            <select class="form-control" id="updateRole" name="updateRole" required>
                                <option value="">--Select--</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="updateEmail">Email</label>
                            <input type="email" class="form-control" id="updateEmail" name="updateEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="updatePhone">Phone</label>
                            <input type="tel" class="form-control" id="updatePhone" name="updatePhone" required>
                        </div>
                        <div class="form-group">
                            <label for="updateAddress">Address</label>
                            <input type="text" class="form-control" id="updateAddress" name="updateAddress" required>
                        </div>                
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="updateUserBtn" name="updateUser" value="Update">
                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Function to open the update modal and set user data
function openUpdateModal(userId, username,password, role, email, phone, address) {
  // Set the values in the update form

  document.getElementById("updateUserId").value = userId;

  document.getElementById("updateUsername").value = username;
  document.getElementById("updatePassword").value = password;
  document.getElementById("updateRole").value = role;
  document.getElementById("updateEmail").value = email;
  document.getElementById("updatePhone").value = phone;
  document.getElementById("updateAddress").value = address;

  // Show the modal
  $("#updateModal").modal("show");
}


    </script>
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
    <div class="bg-modal">
        <div class="modal-contents">

            <div class="close">+</div>

            <form action="adminView.php" method="post" class="bg-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="">--Select--</option>
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="user">User</option>
                </select>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="e-mail">E-mail:</label>
                <input type="text" id="e-mail" name="e-mail" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <div class="btn-container">
                    <button type="submit" id="user-input" class="btn btn-primary" name="insertUser">

                        Add New User
                    </button>
                    <button type="button" id="cancel-btn" class="btn btn-primary">Cancel</button>
                </div>
            </form>

            <div class="close" id="close">+</div>
        </div>
    </div>
    <script>
        // Get the modal and the button that opens it
        var modal = document.querySelector('.bg-modal');
        var btnOpenModal = document.getElementById('user-input');

        // When the button is clicked, show the modal
        btnOpenModal.addEventListener('click', function() {
            modal.style.display = 'flex';
        });

        // Get the close button inside the modal and add an event listener to hide the modal when it is clicked
        var closeButton = document.querySelector('#close');
        closeButton.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        var cancelButton = document.querySelector('#cancel-btn');
        cancelButton.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Also, hide the modal when the user clicks outside of it
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>

</html>
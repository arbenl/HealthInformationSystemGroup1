
<form class="form"  method="POST" >
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong>
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php

        unset($_SESSION['message']);
    }

    ?>
    <span class="title">Register</span>
    <label for="username" class="label">Username</label>
    <input type="text" id="username" name="username"  class="input">
    <label for="email" class="label">Email</label>
    <input type="email" id="email" name="email"  class="input">
    <label for="password" class="label">Password</label>
    <input type="password" id="password" name="password"  class="input">
    <input type="submit" class="submit" name="Submit">
  </form>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

  <style>
    .form {
  max-width: 320px;
  width: 100%;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0px 0px 0px 4px rgba(52, 52, 53, 0.185);
  display: flex;
  flex-direction: column;
  border-radius: 10px;
}

.title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 20px;
  color: #1a202c;
}

.label {
  color: rgb(0, 0, 0);
  margin-bottom: 4px;
}

.input {
  padding: 10px;
  margin-bottom: 20px;
  width: 100%;
  font-size: 1rem;
  color: #4a5568;
  outline: none;
  border: 1px solid transparent;
  border-radius: 4px;
  transition: all 0.2s ease-in-out;
}

.input:focus {
  background-color: #fff;
  box-shadow: 0 0 0 2px #cbd5e0;
}

.input:valid {
  border: 1px solid green;
}

.input:invalid {
  border: 1px solid rgba(14, 14, 14, 0.205);
}

.submit {
  background-color: #1a202c;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}
  </style>
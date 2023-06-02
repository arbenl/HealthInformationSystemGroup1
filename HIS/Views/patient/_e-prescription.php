<?php
function selectDataById1($tableName, $id) {
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

  // Check for errors in the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Build SQL query
  $sql = "SELECT * FROM $tableName WHERE user_id=$id";

  // Execute SQL query
  $result = $conn->query($sql);

  // Convert result to array
  $data = array();
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      foreach ($row as $columnName => $columnValue) {
          $data[$columnName] = $columnValue;
      }
  }else{
      return 0;
  }

  // Close database connection
  $conn -> close();
  // Return result as array
  return $data;
}

?>
<div class="all">
<?php
include('patfunctions.php');
$pat = selectDataById("patients", $_SESSION['ID']);
$patId = $pat['patient_id'];
$rowsPre = selectPrescriptionData($patId);

foreach ($rowsPre as $rowPre) {
    ?>
    <div class="card">
        <div class="content">
            <a href="#">
                <span class="title">
                    <?=$pat['first_name']. " ".$pat['last_name']?>
                </span>
            </a>
            <p class="desc">
                Data e Terapisë: <?=$rowPre['prescription_date']?>
            </p>
            <p class="desc">
                Diagnoza: <?=$rowPre['diagnosis']?>
            </p>
            <p class="desc">
                Udhezimet: <?=$rowPre['instructions']?>
            </p>
        </div>
    </div>
    <?php
}
?>
</div>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
}
:root{
    --bg-color: #ffffff;
    --text-color: #111111;
    --main-color:#c8815f:
    --big-font: 4.5rem;
    --h2-font:3.3rem;
    --h3-font: 2rem;
    --normal-font: 1rem;
}
body{
    background: var(--bg-color  );
    color: var(--text-color);
}

.logo{
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 1px;
    color: var(--text-color);
}
.navlist{
    display: flex;
}
.navlist a{
    color: var(--text-color);
    font-weight: 00;
    padding: 10px 25px;
    font-size: var(--normal-font);
    transition: all .36s ease;

}
.navlist a:hover{
    color:#f9f7f7;
}
.submit{
    display: flex;
    justify-content: center; 
    align-items: center; 
    margin-top: 60px;
    margin-right: 800px;
}
.submit {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
  }
  
  .form-container input[type="text"],
  .form-container textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .submit input[type="submit"] {
    background-color: rgb(68, 142, 179);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .submit input[type="submit"]:hover {
    background-color: rgb(0, 85, 128);
  }
  
  .submit  {
    color: rgb(0, 85, 128);
    margin-top: 10px;
  }
  .submit {
    padding: 1rem 2rem;
    font-weight: 700;
    background: rgb(255, 255, 255);
    color: rgb(68, 142, 179);
    border-radius: .5rem;
    border-bottom: 2px solid rgb(68, 142, 179);
    border-right: 2px solid rgb(68, 142, 179);
    border-top: 2px solid white;
    border-left: 2px solid white;
    transition-duration: 1s;
    transition-property: border-top, 
       border-left, 
       border-bottom,
       border-right,
       box-shadow;
   }
   
   .submit:hover {
    border-top: 2px solid rgb(68, 142, 179);
    border-left: 2px solid rgb(68, 142, 179);
    border-bottom: 2px solid rgb(68, 142, 179);
    border-right: 2px solidrgb(68, 142, 179);
    box-shadow:rgb(68, 142, 179) 5px 5px, rgb(29, 85, 113) 10px 10px, rgb(10, 53, 74) 15px 15px;
   }
   

  
  .card {
    display: flex;
    flex-wrap: wrap;
    flex: 0 0 calc(50% - 20px);
    margin: 10px;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
  }
  
  .image {
    object-fit: cover;
    width: 100%;
    height: 150px;
    background-color: rgb(114, 166, 212);
    border-radius: 10px;
  }
  .fotoja{
    display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
  }
  .content {
    flex-grow: 1;
    padding: 1.1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .title {
    color: #111827;
    font-size: 1.125rem;
    line-height: 1.75rem;
    font-weight: 600;
  }
  
  .desc {
    margin-top: 0.5rem;
    color: #6B7280;
    font-size: 0.875rem;
    line-height: 1.25rem;
  }
  
  .action {
    display: inline-flex;
    margin-top: 1rem;
    color: #ffffff;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 500;
    align-items: center;
    gap: 0.25rem;
    background-color: #2563EB;
    padding: 4px 8px;
    border-radius: 4px;
  }
  
  .action span {
    transition: .3s ease;
  }
  
  .action:hover span {
    transform: translateX(4px);
  }
  
  @media (max-width: 768px) {
    .card {
      flex: 0 0 100%;
    }
  }
  
  .search {
    --input-line: #cccccc;
    --input-text-color: #070707;
    --input-text-hover-color: transparent;
    --input-border-color: #808080;
    --input-border-hover-color: #999999;
    --input-bg-color: #6b96be;
    --search-max-width: 250px;
    --search-min-width: 150px;
    --border-radius: 5px;
    --transition-cubic-bezier: 150ms cubic-bezier(0.4,0,0.2,1);
  }
  
  .search-box {
    max-width: var(--search-max-width);
    min-width: var(--search-min-width);
    height: 35px;
    border: 1px solid var(--input-border-color);
    border-radius: var(--border-radius);
    padding: 5px 15px;
    background: var(--input-bg-color);
    box-shadow: 0 0 20px rgba(60, 142, 201, 0.5);
    transition: var(--transition-cubic-bezier);
  }
  
  .search-box:hover {
    border-color: var(--input-border-hover-color);
  }
  
  /*Section input*/
  .search-field {
    position: relative;
    width: 100%;
    height: 100%;
    left: -5px;
    border: 0;
  }
  
  .input {
    width: calc(100% - 29px);
    height: 100%;
    border: 0;
    border-color: transparent;
    font-size: 1rem;
    padding-right: 0px;
    color: var(--input-line);
    background: var(--input-bg-color);
    border-right: 2px solid var(--input-border-color);
    outline: none;
  }
  
  .input::-webkit-input-placeholder {
    color: var(--input-text-color);
  }
  
  .input::-moz-input-placeholder {
    color: var(--input-text-color);
  }
  
  .input::-ms-input-placeholder {
    color: var(--input-text-color);
  }
  
  .input:focus::-webkit-input-placeholder {
    color: var(--input-text-hover-color);
  }
  
  .input:focus::-moz-input-placeholder {
    color: var(--input-text-hover-color);
  }
  
  .input:focus::-ms-input-placeholder {
    color: var(--input-text-hover-color);
  }
  
  /*Search button*/
  .search-box-icon {
    width: 52px;
    height: 35px;
    position: absolute;
    top: -6px;
    right: -21px;
    background: transparent;
    border-bottom-right-radius: var(--border-radius);
    border-top-right-radius: var(--border-radius);
    transition: var(--transition-cubic-bezier);
  }
  
  .search-box-icon:hover {
    background: var(--input-border-color);
  }
  
  .btn-icon-content {
    width: 52px;
    height: 35px;
    top: -6px;
    right: -21px;
    background: transparent;
    border: none;
    cursor: pointer;
    border-bottom-right-radius: var(--border-radius);
    border-top-right-radius: var(--border-radius);
    transition: var(--transition-cubic-bezier);
    opacity: .4;
  }
  
  .btn-icon-content:hover {
    opacity: .8;
  }
  
  .search-icon {
    width: 21px;
    height: 21px;
    position: absolute;
    top: 7px;
    right: 15px;
  }
  .all{
    display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
  }
  .spani{
    color: aqua;
}
</style>
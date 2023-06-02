<?php
function getAllTableData($tableName)
{
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

    // Check for errors in the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $currentDate = date('Y-m-d');
    // Select data from the specified table
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    // Check for errors in the query
    if (!$result) {
        die("Error in query: " . $conn->error);
    }

    // Convert result set into array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Close database connection
$conn -> close();
    // Return array of data
    return $data;

    //Use this function like this
    //$tableName = "my_table";
    //$data = getTableData($tableName);
}


$rows = getAllTableData('appointments');

?>

<?php foreach($rows as $row){?>
<div class="container">
            <div class="card">
              <div class="box">
                <div class="content">
                  <span class="heading"><?=$row['appointment_id']?></span>

                  <span class="content">Appointment</span>
                  <p>Patient Id:</p>
                  <p><?=$row['patient_id']?></p>
                  <p><?=$row['pat_desc']?></p>
                  <a href="">Read More</a>
                </div>
              </div>
            </div></div> 
       <?php }?>
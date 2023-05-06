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
    $conn->close();

    // Return array of data
    return $data;

    //Use this function like this
    //$tableName = "my_table";
    //$data = getTableData($tableName);
}

function insertDataIntoTable($tableName, $columnNames, $data)
{
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

    // Check for errors in the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Build SQL query
    $columns = implode(", ", $columnNames);
    $values = "'" . implode("', '", $data) . "'";
    $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        return 1;
    } else {
        return 0 ;
    }

    // Close database connection
    $conn->close();
}

function updateData($tableName, $columnNames, $newValues, $id)
{
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();
    // Check for errors in the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Build SQL query
    $updateValues = "";
    for ($i = 0; $i < count($columnNames); $i++) {
        $updateValues .= $columnNames[$i] . "='" . $newValues[$i] . "'";
        if ($i < count($columnNames) - 1) {
            $updateValues .= ", ";
        }
    }
    $sql = "UPDATE $tableName SET $updateValues WHERE id=$id";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
    } else {
        echo "Error updating data: " . $conn->error;
    }

    // Close database connection
    $conn->close();

    //use this function like this
//    $tableName = "my_table";
//    $columnNames = array("column1", "column2", "column3");
//    $newValues = array("new_value1", "new_value2", "new_value3");
//    $id = 1;
//
//    updateDataInTable($tableName, $columnNames, $newValues, $id);

}
function selectDataById($tableName, $id) {
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

  // Check for errors in the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Build SQL query
  $sql = "SELECT * FROM patient WHERE pat_userid=$id";

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
  $conn->close();

  // Return result as array
  return $data;
}


?>



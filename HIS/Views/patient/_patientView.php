<?php

$tableName = "patient";

$result = selectDataById($tableName, $_SESSION['ID']);
?>


<?php
echo $result["pat_userid"]; echo $result['pat_name']

?>


<style>
    html{
        height:100%;
    }
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
    }
</style>

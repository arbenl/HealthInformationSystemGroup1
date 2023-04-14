In this example, we've created a class called Database that has a private constructor to prevent instantiation 
from outside the class. Instead, we've created a static method called getInstance() that returns the single instance 
of the class. The getConnection() method returns the database connection object.

To use this class, add this at the top of php file include("DbControllers/DbConnect.php");
you can call $conn = Database::getInstance()->getConnection() to get the database connection object
from anywhere in your code.
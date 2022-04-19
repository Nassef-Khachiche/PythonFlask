<?php
class User {
    // Properties
    public $name;
    public $email;
    public $subject;
    public $message;
  
    // Methods
    function __construct($name, $email, $subject, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }
}

function db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "87897_myportfolio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function storeUserData() {
    $conn = db();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $user = new User($name, $email, $subject, $message);

    $sql = "INSERT INTO `message`(`userName`, `userEmail`, `userSubject`, `messageUser`) VALUES ('$user->name','$user->email','$user->subject','$user->message')";

    if ($conn->query($sql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function displayItems() {
    $conn = db();

    $sql = "SELECT * FROM `projects`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo 
        "<div style='display: flex; margin: 50px'>".
            "<div class='left'>" .
                "<h3>" . $row["projectTitle"] . "</h3>" . $row['displayImage'] .
            "</div>" . 
            "<div class='right'>" .  
                $row["projectImage"] . 
                $row["projectDescription"] . 
            "</div>" .
         "</div>";
      }
    }

    $conn->close();
}

?>
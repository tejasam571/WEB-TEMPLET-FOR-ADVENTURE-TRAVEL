<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 extract($_REQUEST);
    $file=fopen("data.txt","a");
  // Retrieve form data
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare the data string
  $data = "First Name: $firstName\n";
  $data .= "Last Name: $lastName\n";
  $data .= "Email: $email\n";
  $data .= "Password: $password\n";

  // Store the data in the file
  if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX) !== false) {
    // File write successful
    header('Location: success.html');
    exit;
  } else {
    // File write failed
    echo 'Failed to store data.';
  }
}
?>

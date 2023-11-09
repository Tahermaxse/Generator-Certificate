<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['template'])) {
        $templateFile = $_FILES['template'];
        $templateFileName = $templateFile['name'];

        // Define the directory to store uploaded templates
        $uploadDirectory = 'certi/';

        // Move the uploaded template to the specified directory
        if (move_uploaded_file($templateFile['tmp_name'], $uploadDirectory . $templateFileName)) {
            echo "Template uploaded successfully.";
            header("location:one.php");
        } else {
            echo "Failed to upload the template.";
        }
    }
}
?>

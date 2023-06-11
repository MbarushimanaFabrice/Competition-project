<?php
if (isset($_GET['file'])) {
    $filename = "../Supply/files/".$_GET['file'];

    // Set the appropriate headers
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');

    // Output the PDF content
    readfile($filename);
}
?>
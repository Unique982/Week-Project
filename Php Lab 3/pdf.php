<?php
require_once('tcpdf/tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // Create PDF
    try {
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator('Your Name');
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Biodata');
        $pdf->SetSubject('Biodata');
        $pdf->SetKeywords('Biodata');

        $pdf->AddPage();
        
        // Add content to PDF
        $content = "
            <h2>Biodata</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Phone:</strong> $phone</p>
        ";

        $pdf->writeHTML($content, true, false, true, false, '');
        
        // Output PDF
        $pdf->Output('biodata.pdf', 'D');
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
?>
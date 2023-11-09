 <?php
require('fpdf.php');
include("config.php");

$sql = "select name from generate";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $fonts = "italian.ttf";
        $image = imagecreatefromjpeg("certi/certificate.jpg");
        $color = imagecolorallocate($image, 65, 85, 213);
        $name = $row['name'];
        imagettftext($image, 60, 0, 750, 790, $color, $fonts, $name);
        imagejpeg($image, "samples/" . $name . ".jpg");
        $pdf = new FPDF('L', 'in', [11.7, 8.27]);
        $pdf->AddPage();
        $pdf->Image("samples/" . $name . ".jpg", 0, 0, 11.7, 8.27);
        $pdf->Output("samples/" . $name . ".pdf", "F");
        imagedestroy($image);
    }
    ?>
    <script>
        alert("certificates created...");
        window.location.href = "index.php"; // Redirect after the user clicks "OK"
    </script>
    <?php
} else {
    echo "No data found";
}
?>

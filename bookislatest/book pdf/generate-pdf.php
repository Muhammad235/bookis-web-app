<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$name = $_POST["name"];
$quantity = $_POST["quantity"];
$book_name = $_POST['book_name'];

//$html = '<h1 style="color: green">Example</h1>';
//$html .= "Hello <em>$name</em>";
//$html .= '<img src="example.png">';
//$html .= "Quantity: $quantity";

/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "landscape");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("template.html");

$html = str_replace(["{{ name }}", "{{ quantity }}"], [$name, $quantity], $html);

$dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("template.html");

/**
 * Create the PDF and set attributes
 */
$dompdf->render();

$dompdf->addInfo("Title", "An Example PDF"); // "add_info" in earlier versions of Dompdf

/**
 * Send the PDF to the browser
 */
$dompdf->stream("invoice.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
$output = $dompdf->output();
file_put_contents("file.pdf", $output);



$file_to_get = 'file.pdf';

if (file_exists($file_to_get)) {

    // $new_file = uniqid().rand(1, 1000). '.pdf';
    $new_file = $book_name. '.pdf';
    rename($file_to_get, $new_file);

}


<?php
    $fontsize = 72;     // 1 inch high letters
    $page_height = 612; // 8.5 inch high page
    $page_width = 792;  // 11 inch wide page

    if (strlen(trim($_GET['message']))) {
        $message = trim($_GET['message']);
    } else {
        $message = 'Generate a PDF!';
    }

    $pdf = pdf_new();
    pdf_open_file($pdf, '');

    pdf_begin_page($pdf, $page_width, $page_height);

    $font = pdf_findfont($pdf, "Helvetica", "winansi", 0);
    pdf_setfont($pdf, $font, $fontsize);

    pdf_show_boxed($pdf, $message, 0, ($page_height-$fontsize)/2,$page_width, $fontsize, 'center');

    pdf_end_page($pdf);
    pdf_close($pdf);

    $pdf_doc = pdf_get_buffer($pdf);
    pdf_delete($pdf);

    header('Content-Type: application/pdf');
    header('Content-Length: ' . strlen($pdf_doc));
    print $pdf_doc;

?>

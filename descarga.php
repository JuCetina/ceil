<?php
    header("Content-disposition: attachment; filename=matricula.pdf");
    header("Content-type: application/pdf");
    readfile("files/matricula.pdf");
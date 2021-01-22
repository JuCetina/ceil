<?php
    header("Content-disposition: attachment; filename=FORMULARIO-MATRICULA-CEIL.pdf");
    header("Content-type: application/pdf");
    readfile("FORMULARIO-MATRICULA-CEIL.pdf");
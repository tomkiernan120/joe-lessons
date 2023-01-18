<?php
// lets have a go a form handling

// try submitting and changing the form to see what happens

// next lets try validating the form with php. we already have a frontend require attribute on the input field but lets try and do it with php

echo "<form method=\"POST\">";
echo "<label for=\"name\">Name</label>";
echo "<input type=\"text\" name=\"name\" placeholder=\"Name\" required />";

echo "<button type=\"submit\">Submit</button>";
echo "</form>";

if ($_POST) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

<h1>Submitted</h1>
<?php

    //echo($_POST['fullName']);
    $personName = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$personName) {
        $personName = "Not a valid name.";
    }

    echo($personName);

    // validate the email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $email = htmlspecialchars($email);
    } else {
        $email = "<br>Invalid Email";
    }

    echo("<br>" . $email);

    // get radio buttons
    $radio = filter_input(INPUT_POST, 'flexRadioDefault');

    // get the check boxes (requires array constant if using array)
    $checkbox = filter_input(INPUT_POST, 'learn', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

    // get the select box
    $selectBox = filter_input(INPUT_POST, 'select');

?>
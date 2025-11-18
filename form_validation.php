<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Form Validation</h2>
    <?php
    if (isset($_REQUEST["submit"])) {
        $skills_output = ""; // Skills output variable
        $langs_output = ""; // Language output variable
        $errors = array(); // Empty Array for Errors
        if (!isset($_REQUEST['name']) || $_REQUEST['name'] == "") {
            $errors[] = "You must enter name";
        } else {
            $name = $_REQUEST["name"];
        }
        // Email 
        if (!isset($_REQUEST['email']) || $_REQUEST['email'] == "") {
            $errors[] = "You must enter email";
        } else {
            $email = $_REQUEST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email is not valid";
            }
        }
        // Skills
        if (!isset($_REQUEST['skills'])) {
            $errors[] = "You must select one skill";
        } else {
            $skills = $_REQUEST['skills'];
            foreach ($skills as $skill) {
                $skills_output .= $skill . ", ";
            }
        }

        // Languages
        if (!isset($_REQUEST['languages'])) {
            $errors[] = "You must select one Language";
        } else {
            $langs = $_REQUEST['languages'];
             $lastLangkey = array_key_last($langs);
            foreach ($langs as $key => $lang) {
            if ($key == $lastLangkey) {
                $langs_output .= $lang;
            } else {
                $langs_output .= $lang . ", ";
            }
        }
        }

        // Error Display
        if (count($errors) > 0) {
            echo "<ul>";
            foreach ($errors as $err) {
                echo "<li>" . $err . "</li>";
            }
            echo "</ul>";
        } else { ?>
        <!-- Table Display with Data -->
            <table>
                <tr>
                    <td>Name: </td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Skills: </td>
                    <td><?php echo $skills_output; ?></td>
                </tr>
                <tr>
                    <td>Languages: </td>
                    <td><?php echo $langs_output; ?></td>
                </tr>
            </table>


    <?php

        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="">Your name:</label><br>
        <input type="text" name="name" id="" value="<?php if(isset($_REQUEST['name'])){echo $_REQUEST['name']; } ?>"><br><br>

        <label for="">Email: </label><br>
        <input type="text" name="email" id="" value="<?php if(isset($_REQUEST['email'])){echo $_REQUEST['email']; } ?>"><br><br>

        <label for="">Current skills: </label><br>
        <select name="skills[]" id="" multiple="multiple">
            <option value="CSharp">C#</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
        </select><br><br>

        <label for="">What you want to learn?</label><br>
        <input type="checkbox" name="languages[]" id="" value="PHP">PHP<br>
        <input type="checkbox" name="languages[]" id="" value="C">C<br>
        <input type="checkbox" name="languages[]" id="" value="R">R<br>
        <input type="checkbox" name="languages[]" id="" value="C++">C++<br><br>

        <input type="submit" name="submit" id="" value="SUBMIT">

    </form>
</body>

</html>
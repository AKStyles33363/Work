<?php

$method = $_SERVER['REQUEST_METHOD'];

$c = true;
if ( $method === 'POST' ) {
    
    $project_name = trim($_POST["project_name"]);
    $admin_mail = trim($_POST["admin_mail"]);
    $form_subject = trim($_POST["form_subject"]);
    
    foreach ( $_POST as $key => $value ){
        if ( $value != "" && $key != "project_name" && $key != "admin_mail" && $key != "form_subject")
          $message .= "
            " . ( ($c = !$c) ? '<tr>':'<tr> style="background-color: #f8f8f8;">' ) ."
                <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$value</b></td>
                    </tr>
                    ";
    };
} else if ( $method === 'GET') {
    
    $project_name = trim($_GET["project_name"]);
    $admin_mail  = trim($_GET["admin_mail"]);
    $form_subject = trim($_GET["form_subject"]);
    
}

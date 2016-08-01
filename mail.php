<?php
if(isset($_GET["email"]))
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "ok";
    }
    else
    {
        echo "no";
    }
}
?>

<html>
    <head>
    </head>
    <body>
        <
    </body>
</html>
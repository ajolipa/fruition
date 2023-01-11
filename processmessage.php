<?php
if ($_POST["submit"]) {
    // $sent = mail("ajolipa@gmail.com", "Testing", $_POST["message"], "From: " . $_POST["email"])
    // if ($sent) {
    //     header("Location: https://www.fruitiondining.com/hub.html?contact=true#contact")
    // }
    // else {
    //     header("Location: https://www.fruitiondining.com/hub.html?contact=false#contact")
    // }
    echo $_POST["message"]
}
else {
    header("Location: https://www.fruitiondining.com/hub.html")
}

?>
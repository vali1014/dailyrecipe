<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] .
        "<br>";
} else {
    echo "Upload: " . $_FILES["file"]["name"] .
        "<br>Type: " . $_FILES["file"]["type"] .
        "<br>Size: " . ($_FILES["file"]["size"] / 1024) . " Kb " .
        "<br>Stored in:" . $_FILES["file"]["tmp_name"];
}

if (( ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") )
    && ($_FILES["file"]["size"] < 30000)) {

    if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"];
    } else {
        echo "Sikeres feltöltés!";
    }
} else {
    echo "Érvénytelen fájl!";
}

if (file_exists("./images/galeria/" . $_FILES["file"]["name"])) {
    echo $_FILES["file"]["name"] . " már létezik. ";

} else {
    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/". $_FILES["file"]["name"]);
    echo "Mentve: ".
        "upload/".$_FILES["file"]["name"];

}

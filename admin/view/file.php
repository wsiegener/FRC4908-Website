<?php
/* Fred's Code */
$dir = $_POST["dir"]; //Is working :D
$dirPrefix = "../resources/view/"; //will add this to the start of the file location.
$dirFinalSuffix = "/"; //will add this to the end of the file location 

if($dir = "mech") {
    $dirSuffix = "mechanical";
}

if($dir = "mech/cad") {
    $dirSuffix = "mechanical/CAD";
}

if($dir = "mech/man") {
    $dirSuffix = "mechanical/manufacturing";
}

if($dir = "mech/str") {
    $dirSuffix = "mechanical/strategy";
}

if($dir = "elc") {
    $dirSuffix = "electrical";
}

if($dir = "elc/cad") {
    $dirSuffix = "electrical/CAD";
}

if($dir = "elc/prg") {
    $dirSuffix = "electrical/programing";
}

if($dir = "elc/asm") {
    $dirSuffix = "electrical/assembly";
}

if($dir = "biz") {
    $dirSuffix = "buissness";
}

if($dir = "biz/") {
    $dirSuffix = "buissness/sponsorship";
}

if($dir = "biz/fnd") {
    $dirSuffix = "buissness/fundrasing";
}

if($dir = "biz/sme") {
    $dirSuffix = "buissness/socialmedia";
}

if($dir = "doc") {
    $dirSuffix = "documents";
}

$target_dir = $dirPrefix.$dirSuffix.$dirFinalSuffix;



//$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
        $uploadOk = 1;
    } else {
        echo "You did not click submit";
        $uploadOk = 0;
        $doNoSubmit = true;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    $doExists
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    $doNoUpload = true;

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $doUpload = true;
    } else {
        echo "Sorry, there was an error uploading your file.";
        $doNoUploadFinal = true;
    }
}


if(isset($doUpload)) {
    header('Location: ./?upload=1');
}
if(isset($doNotUploadFinal)) {
    header('Location: ./?final=1');
}
if(isset($doNoUpload)) {
    header('Location: ./?noUpload=1');
}
if(isset($doExists)) {
    header('Location: ./?exists=1');
}
if(isset($doNoSubmit)) {
    header('location: ./?nosubmit=1');
}

?>



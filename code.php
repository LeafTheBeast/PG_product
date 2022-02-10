<?php
//Checking the input of $_POST["test_text"]
if (isset($_POST["test_text"])) {


    //If $_POST["test_text"] is set -> this 
    $new_message = [

        "id" => $index,
        "Kennzeichen" => $_POST["test_text"],
        "Notiz" => $_POST["test_notiz"]
    ];

    if (filesize("data.json") == 0) {

        $first_record = array($new_message);

        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("data.json"));

        array_push($old_records, $new_message);

        $data_to_save = $old_records;
    }

    if (!file_put_contents("data.json", json_encode($data_to_save), LOCK_EX)) {

        $error = "ERROR";
    } else {
        $success = "NICE";
    }



    //Getting the content of the "data.json" file
    //Needs the foreach - loop in "index.php" to show the actual content
    if (filesize("data.json") != 0) {
        $file = file_get_contents("data.json");
        $test = json_decode($file, true);
    }


    //Function for deleting the content of data.json
    function deleteStuff()
    {
        $file = file_get_contents("data.json");
        $replace = preg_replace(' ', '', $file);
        file_put_contents("data.json", $replace);
    }

    //Button click
    //if the Button "Delete" is clickt, the "deleteStuff" function will be used
    if (isset($_POST['delete_button'])) {
        deleteStuff();
    }
};

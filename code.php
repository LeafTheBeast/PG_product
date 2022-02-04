<?php

if (isset($_GET["test_text"])) {

    $new_message = [
        "Kennzeichen" => $_GET["test_text"]
    ];

    if (filesize("data.json") == 0) {

        $first_record = array($new_message);

        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("data.json"));

        array_push($old_records, $new_message);

        $data_to_save = $old_records;
    }

    if (!file_put_contents("data.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)) {

        $error = "ERROR";
    } else {
        $success = "NICE";
    }



    if (filesize("data.json") != 0) {
        $file = file_get_contents("data.json");
        $test = json_decode($file, true);
    }
};

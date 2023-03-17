<?php
    date_default_timezone_set("Europe/Amsterdam");

    $time =  date("H:i:sa");
    echo "<h2>$time<h2/>";

    $hour = date("H");



    if ($hour > "5" && $hour <= "11") {
        $background = "morning.png";
        echo "<h2>Goedemorgen!</h2>";
    } if ($hour > "11" && $hour <= "17"){
        $background = "afternoon.png";
        echo "<h2>GoedeMiddag!</h2>"; 
    } if ($hour > "17" && $hour <= "00") {
        $background = "evening.png";
        echo "<h2>GoedeAvond!</h2>";
    } if ($hour > "00" && $hour <= "6") {
        $background = "night.png";
        echo "<h2>GoedeNacht!</h2>";
    };
?>

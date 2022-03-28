<?php
    /*
        Working files used to maintain the Villa List 
        1. $VillaCSVfile - input file used to create 2. of Villa List
        2. $VillaJSONfile - output file created by CSV2JSON.php
        Note: $VillaJSONfile has to be moved to same directory as $LHVCResortMap.php to 
            update the site
    */
    $logDir = "/Logs/LHVC Villa List";
    $WorkingVillaCSVfile = "$logDir/Villa Site List.csv";
    $WorkingVillaJSONfile = "$logDir/Villa Site List.json";

    /*
        files used by scripts in the Utils directory 
    */
    $CurrentVillalogFile = "Villa Site List.json"; // relative path to file of Utils scripts


    /*
        Log files
        1. $ResortLogFile is where the Villa Update Form inputs are collected
        2. $FeedbackLogFile is a repository of all feedback forms
    */
    $PathToLogs = "/Logs";
    //$VillaLogs = "LHVC_Logs";
    $FeedBackLogFile ="$PathToLogs/Feedback.json";
    $ResortLogFile = "$PathToLogs/LHVC_Logs/LHVCResortMapLog.json";

    $Section = array(
        "none"=>"none ",
        "Section"=>"none ",
        "Royal"=>'<a href="#RoyalVillas"> Royal </a>',
        "Crown"=>'<a href="#CrownVillas"> Crown </a>',
        "The Cliffs"=>'<a href="#CliffVillas"> The Cliffs </a>',
        "Villa Park"=>'<a href="#VillaParkeVillas"> Villa Park </a>',
        "Overflow"=>'<a href="#OverflowVillas"> Overflow </a>',
        "Other"=>'Other',
    );

    // Associative array to expand abbreviations in CSV to long names
    $Abrev = array(
        "none"=>"no sect ",
        "Section"=>"none",
        "Royal"=>'RV-',
        "Crown"=>'CV-',
        "The Cliffs"=>'TC-',
        "Villa Park"=>'VP-',
        "Overflow"=>'',
        "Other"=>'',
    );

    $class = array(
        "none" => "",
        "Section"=>"none",
        "Royal"=>'Royal',
        "Crown"=>'Crown',
        "The Cliffs"=>'Cliff',
        "Villa Park"=>'Park',
        "Overflow"=>'Overflow',
        "Other"=>'Other',
    );

?>







<!DOCTYPE html>
<html lang="en">
    <title>Lifestyle Resort Villa Map</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Don Simard simard57@hotmail.com CC0260">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <!-- sorttable.js is borrowed from https://kryogenix.org/code/browser/sorttable/ -->
    <script src="/scripts/sorttable.js"> </script>
    
    <link rel="stylesheet" href="/css/sorttable.css">
    <script> 
        function PopUP($str) {alert($str);}
    </script>

    <link rel="stylesheet" href="/css/LHVC.css">
    <link rel="stylesheet" href="/css/navbar.css">
    
    <body>
        <div id="myNavbar" class="navbar">
            <a href="#" class="active"> Home </a>
            <a href="#ResortMap"> Resort Map </a>
            <a href="#RoyalVillas"> Royal </a>
            <a href="#CrownVillas"> Crown </a>
            <a href="#CliffVillas"> Cliffs </a>
            <a href="#VillaParkVillas"> Villa Park </a>
            <a href="#OverflowVillas"> Overflow </a>
            <a href="#ResortInfo"> Info </a>
            <a href="#VillaList"> Villa List </a>
            <a href="#Contact"> Contact </a>
            <a href="#About"> About </a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <?php
            //ini_set('display_errors', 1);
            ini_set('allow_url_fopen', TRUE);
            ini_set('log_errors', 1);
            ini_set('error_log', 'ERROR.LOG');
            error_reporting(E_ALL);

            include_once "manifest.php"; // manifest of files used by LHVC website utilities
            $logFile = "./Villa Site List.json";
            //$logfile = $CurrentVillalogFile;
        ?>

        <header class="hints" style="background-color:rgb(250, 143, 4)">
            <div class="flex-container">
                <div>
                    <h1 style="text-align:center"><u>Lifestyle Holidays Vacation Club Puerto Plata Villa Map</u></h1>
                    <p>This website was created to help LHVC members navigate the resort map and find Villa information.</p>
                    <h3><a href="http://lifestyleholidaysgroup.com/resort-map-lhvc-lhvr/" target="_blank">Interactive MAp</a></h3>
                    <details>
                        <summary class="left"> <strong>Hints</strong> </summary> 
                        <ul>
                            <li> Using the <strong> Navigation Bar </strong>
                                <ul>
                                    <li>Navigation Bar is at the bottom of the screen </li>                              
                                    <li>Choose item to navigate to that section</li>
                                    <li>if Nagation Bar is collapsed, click the &#9776; to reveal the choices, make a selection then click &#9776; to hide menu </li> 
                                </ul>
                            </li>

                            <li> On the <strong>Resort Map</strong>
                                <ul>
                                    <li> Select the Villa Section by using the Menu Bar at the bottom of the screen
                                        or clicking on the Villa Section in the resort map.</li>
                                    <li> Clicking on other accommodations in Resort Map, or <strong>Info</strong> in Menu Bar 
                                        will link to Resort Fact Sheets and Pictures</li>
                                </ul>
                            </li>
                            <li> In a <strong>Villa Section</strong>,
                                <ul>
                                    <li> Clicking on the Section Name will link to a Resort Fact Sheet.</li>
                                    <li> Clicking on the Villa number will link to the entry in the Villa List.</li>
                                    <li> On a Computer, hovering over a Villa number on the Section map will display
                                            the Villa number, the number of bedrooms and the owner, if known. </li>
                                </ul>
                            </li> 
                            <li> In the <strong>Villa List</strong>,
                                <ul>
                                    <li> Sort by clicking the column header. For example, if you click the #BR header, the Villas will be grouped by the number of bedrooms. </li> 
                                    <li> Villa details can be displayed by clicking the <span> &#8227; </span> glyph in the #BR column. </li>
                                    <li> Clicking on Villa number will link to Facebook Album with pictures. </li>
                                    <li> Navigate back to the Section Map by clicking the Section name. </li>
                                    <li> Entries are color coded by Section. </li>
                                </ul>
                            </li>
                            <li> Use <strong>Info</strong> to access Fact Sheets and other information.</li>
                            <li> Use <strong>Contact</strong> to send comments or corrections to web admin (Don Simard) or 
                                to enter or update Villa information. When submitted, an email message will open to send. 
                                Pictures of the Villa can be attached to the email or uploaded to the FB CC Page in a named 
                                Album (link to Villa Album from Villa List).</li>
                            <li> Use the back button to return to the previous page.</li>
                        </ul>
                    </details>
                </div>
                <div>
                    <a href="#ResortMap"><img src="/images/Deja_View.jpg" alt="Chairman Circle Building"></a>
                </div>
            </div>
        </header>

        <div class="maps">
            <div class="Resort">
                <h1 id="ResortMap">Resort Map</h1>
                <h2>Click Villa section for browsable map</h2>

                <img src="/images/Resort.JPG" alt="Full Map of the Resort" usemap="#ResortMap">
                <map name="ResortMap">
                <!-- Villa --> 
                    <area alt="Royal Villas" title="Royal Villas" href="#RoyalVillas" coords="254,652 319,587 353,508 400,491 469,485 499,604 356,664 308,675" shape="poly">
                    <area alt="Crown Villas" title="Crown Villas" href="#CrownVillas" coords="525,421 506,360 449,377 389,333 387,314 411,287 450,256 517,231 546,228 587,235 625,258 673,294 714,352 737,417 794,425 832,377 852,485 851,559 962,629 964,716 840,670 734,654 657,654 606,657 560,624 552,606 537,521 515,519 485,483 495,443" shape="poly">
                    <area alt="Cliff Villas" title="Cliff Villas" href="#CliffVillas" coords="430,239,469,174,453,107,511,69,558,95,594,111,603,144,594,187,559,212"  shape="poly">
                    <area alt="Villa Park Villas" title="Villa Park Villas" href="#VillaParkVillas" coords="671,695,747,1046" shape="rect" >
                    <area alt="Overflow Villas" title="Overflow Villas" href="#OverflowVillas" coords="13,543,49,677" shape="rect">
                <!-- Apartments --> 
                    <area alt="Sunrise Suites" title="Sunrise Suites" href="#" coords="265,612,24" shape="circle">
                    <area alt="Presidential Suites" title="Presidential Suites" href="#ResortInfo" coords="52,749 49,688 140,673 209,571 237,571 226,665 193,739 68,763" shape="poly">
                    <area alt="Royal Suites" title="Royal Suites" href="#ResortInfo" coords="489,444 519,423 498,366 455,385 461,409 457,434 474,440" shape="poly">
                    <area alt="Residence Suites" title="Residence Suites" href="#ResortInfo" coords="466,635 345,672 326,714 334,753 474,689" shape="poly">
                    <area alt="Crowne Suites" title="Crowne Suites" href="#ResortInfo" coords="264,665 223,748 283,771 321,757 321,719 332,691 324,677 263,665" shape="poly">
                <!-- Hotels --> 
                    <area alt="Tropical Hotel" title="Tropical Hotel" href="#ResortInfo" coords="362,423,80" shape="circle">
                    <area alt="Cofresi Palm Beach Spa and Resort" title="Cofresi Palm Beach Spa and Resort" href="#ResortInfo" coords="261,570 179,561 113,646 92,689 50,678 60,462 106,405 207,379 271,502 262,561" shape="poly">
                </map>
            </div>

            <!-- Royal Villas -->
            <div class="Royal">            
                <h1 id="RoyalVillas"> <a href="FactSheets/The Royal Villas – Charimans Circle Club.html"> Royal Villas</a></h1>
                <h2> On Computer - Mouse over Villa Number for # Bedrooms & <br> Click to view information from Villa List </h2>
                <img src="/images/RoyalVillas.JPG" alt="Map of Royal Villas Section" usemap="#RoyalVillaMap"/>
                <map name="RoyalVillaMap" >
                    <area alt="RV 01" Title="RV 01:3 BR" href="#RV-1" coords="085,324,17" shape="circle">
                    <area alt="RV 02" Title="RV 02:4 BR" href="#RV-2" coords="118,310,17" shape="circle">
                    <area alt="RV 03" Title="RV 03:3 BR" href="#RV-3" coords="149,298,17" shape="circle">
                    <area alt="RV 04" Title="RV 04:3 BR" href="#RV-4" coords="180,287,17" shape="circle">
                    <area alt="RV 05" Title="RV 05:6 BR" href="#RV-5" coords="207,268,17" shape="circle">
                    <area alt="RV 06" Title="RV 06:6 BR" href="#RV-6" coords="234,252,17" shape="circle">
                    <area alt="RV 07" Title="RV 07:5 BR" href="#RV-7" coords="258,233,17" shape="circle">
                    <area alt="RV 08" Title="RV 08:4 BR" href="#RV-8" coords="286,215,17" shape="circle">
                    <area alt="RV 09" Title="RV 09:5 BR" href="#RV-9" coords="327,207,17" shape="circle">
                    <area alt="RV 10" Title="RV 10:6 BR" href="#RV-10" coords="361,192,17" shape="circle">
                    <area alt="RV 11" Title="RV 11:5 BR" href="#RV-11" coords="392,172,17" shape="circle">
                    <area alt="RV 13" Title="RV 13:? BR" href="#RV-13" coords="451,210,17" shape="circle">
                    <area alt="RV 14" Title="RV 14:6 BR" href="#RV-14" coords="421,226,17" shape="circle">
                    <area alt="RV 15" Title="RV 15:7 BR" href="#RV-15" coords="386,240,17" shape="circle">
                    <area alt="RV 16" Title="RV 16:6 BR" href="#RV-16" coords="347,257,17" shape="circle">
                    <area alt="RV 17" Title="RV 17:4 BR" href="#RV-17" coords="308,250,17" shape="circle">
                    <area alt="RV 18" Title="RV 18:4 BR" href="#RV-18" coords="280,266,17" shape="circle">
                    <area alt="RV 19" Title="RV 19:3 BR" href="#RV-19" coords="252,280,17" shape="circle">
                    <area alt="RV 20" Title="RV 20:4 BR" href="#RV-20" coords="223,297,17" shape="circle">
                    <area alt="RV 21" Title="RV 21:5 BR" href="#RV-21" coords="195,313,17" shape="circle">
                    <area alt="RV 22" Title="RV 22:5 BR" href="#RV-22" coords="170,329,17" shape="circle">
                    <area alt="RV 23" Title="RV 23:4 BR" href="#RV-23" coords="142,351,17" shape="circle">
                    <area alt="RV 24" Title="RV 24:4 BR" href="#RV-24" coords="107,354,17" shape="circle">
                    <area alt="RV 25" Title="RV 25:6 BR" href="#RV-25" coords="175,199,17" shape="circle">
                    <area alt="RV 26" Title="RV 26:6 BR" href="#RV-26" coords="181,169,17" shape="circle">
                    <area alt="RV 27" Title="RV 27:6 BR" href="#RV-27" coords="184,139,17" shape="circle">
                    <area alt="RV 28" Title="RV 28:5 BR&#10;Owner:Marie-Claude Bussieres" href="#RV-28" coords="208,105,17" shape="circle">
                    <area alt="RV 29" Title="RV 29:6 BR" href="#RV-29" coords="229,089,17" shape="circle">
                    <area alt="RV 30" Title="RV 30:? BR" href="#RV-30" coords="275,142,17" shape="circle">
                    <area alt="RV 31" Title="RV 31:? BR" href="#RV-31" coords="252,167,17" shape="circle">
                    <area alt="RV 32" Title="RV 32:3 BR&#10;Owner: Tracey MacDonald" href="#RV-32" coords="236,187,17" shape="circle">
                    <area alt="RV 33" Title="RV 33:7 BR" href="#RV-33" coords="310,179,17" shape="circle">
                </map>
            </div>

            <!-- Crown Villas -->
            <div class="Crown">
                <h1 id="CrownVillas"> <a href="FactSheets/The Crown Villas – Charimans Circle Club.html"> Crown Villas</a></h1>
                <h2> On Computer - Mouse over Villa Number for # Bedrooms & <br> Click to view information from Villa List </h2>
                <img src="/images/CrownVillas.JPG" alt="Map of Crown Villas Section" usemap="#CrownVillaMap">
                <map name="CrownVillaMap" >
                    <area alt="CV01A-5 BR" title="CV 01A-5 BR" href="#CV-1A" coords="49,188,31" shape="circle">
                    <area alt="CVCP" title="CV Casa Piloto-6 BR" href="#CV-CP" coords="95,141,32" shape="circle">
                    <area alt="CV02AB" title="CV 02AB-2 BR" href="#CV-2AB" coords="155,97,26" shape="circle">
                    <area alt="CV03" title="CV 03-? BR" href="#CV-3" coords="209,72,25" shape="circle">
                    <area alt="CV04" title="CV 04-? BR" href="#CV-4" coords="267,44,25" shape="circle">
                    <area alt="CV05" title="CV 05-2 BR" href="#CV-5" coords="332,39,36" shape="circle">
                    <area alt="CV06 Amigos-4 BR" title="CV 06 Amigos-4 BR" href="#CV-6" coords="423,144 470,106 452,55 371,13 361,79 " shape="polygon">
                    <area alt="CV07" title="CV 07-4 BR" href="#CV-7" coords="464,147,25" shape="circle">
                    <area alt="CV08" title="CV 08-6 BR" href="#CV-8" coords="493,189,22" shape="circle">
                    <area alt="CV09" title="CV 09A-3 BR/9B-3 BR" href="#CV-9A" coords="518,233,26" shape="circle">
                    <area alt="CV16" title="CV 16-3 BR" href="#CV-16" coords="243,193,28" shape="circle">
                    <area alt="CV17" title="CV 17-? BR" href="#CV-17" coords="303,169,28" shape="circle">
                    <area alt="CV18" title="CV 18A-3 BR/18B-3 BR" href="#CV-18A" coords="349,190 428,170 366,96 309,96 " shape="polygon">
                    <area alt="CV21" title="CV 21-3 BR" href="#CV-21" coords="258,265,23" shape="circle">
                    <area alt="CV22" title="CV 22-4 BR" href="#CV-22" coords="329,244,29" shape="circle">
                    <area alt="CV23" title="CV 23-3 BR" href="#CV-23" coords="366,229,23" shape="circle">
                    <area alt="CV24-6 BR" title="CV 24-6 BR" href="#CV-24" coords="418,206,26" shape="circle">
                    <area alt="CV28AB" title="CV 28A-4 BR/28B- 5 BR" href="#CV-28A" coords="329,306,31" shape="circle">
                    <area alt="CV29" title="CV 29-3 BR" href="#CV-29" coords="381,284,26" shape="circle">
                    <area alt="CV30" title="CV 30-3 BR" href="#CV-30" coords="442,262,30" shape="circle">
                    <area alt="CVE40" title="CV E40-6 BR" href="#CV-E40" coords="322,530,29" shape="circle">
                    <area alt="CVE41" title="CV E41-7 BR" href="#CV-E41" coords="365,492,26" shape="circle">
                    <area alt="CV42" title="CV 42-4 BR" href="#CV-42" coords="417,466,25" shape="circle">
                    <area alt="CV43" title="CV 43-3 BR" href="#CV-43" coords="469,453,26" shape="circle">
                    <area alt="CV44" title="CV 44-3 BR" href="#CV-44" coords="497,400,20" shape="circle">
                    <area alt="CV45" title="CV 45-4 BR" href="#CV-45" coords="543,414,21" shape="circle">
                    <area alt="CV46" title="CV 46-3 BR" href="#CV-46" coords="531,474,26" shape="circle">
                    <area alt="CV47AB" title="CV 47A-3 BR/47B-3 BR" href="#CV-47A" coords="570,510,26" shape="circle">
                    <area alt="CV48" title="CV 48-3 BR" href="#CV-48" coords="623,538,26" shape="circle">
                    <area alt="CV49" title="CV 49-4 BR" href="#CV-49" coords="621,602,25" shape="circle">
                    <area alt="CV50" title="CV 50-3 BR" href="#CV-50" coords="615,650,21" shape="circle">
                    <area alt="CV51" title="CV 51-3 BR" href="#CV-51" coords="611,701,25" shape="circle">
                    <area alt="CV53" title="CV 53-3 BR" href="#CV-53" coords="427,525,25" shape="circle">
                    <area alt="CV54" title="CV 54-6 BR" href="#CV-54" coords="482,520,25" shape="circle">
                    <area alt="CV55" title="CV 55-6 BR" href="#CV-55" coords="528,551,25" shape="circle">
                    <area alt="CV57" title="CV 57-5 BR" href="#CV-57" coords="548,631,25" shape="circle">
                    <area alt="CV58" title="CV 58-3 BR" href="#CV-58" coords="541,682,23" shape="circle">
                    <area alt="CV59" title="CV 59-3 BR" href="#CV-59" coords="376,639,25" shape="circle">
                    <area alt="CV60" title="CV 60-4 BR" href="#CV-60" coords="386,582,26" shape="circle">
                    <area alt="CV61" title="CV 61-4 BR" href="#CV-61" coords="430,680,26" shape="circle">
                    <area alt="CV62" title="CV 62-5 BR" href="#CV-62" coords="436,628,24" shape="circle">
                    <area alt="CV63" title="CV 63-? BR" href="#CV-63" coords="448,575,25" shape="circle">
                    <area alt="CV64" title="CV 64-? BR" href="#CV-64" coords="497,590,20" shape="circle">
                    <area alt="CV65" title="CV 65 (V-TINCA) -4 BR" href="#CV-65" coords="497,636,23" shape="circle">
                    <area alt="CV66" title="CV 66-3 BR&#10;Owner:Monika Fleischer & Gilles Charlebois" href="#CV-66" coords="494,685,23" shape="circle">
                    <area alt="CV67" title="CV 67-3 BR" href="#CV-67" coords="348,698,26" shape="circle">
                    <area alt="CV68" title="CV 68-? BR" href="#CV-68" coords="391,724,23" shape="circle">
                    <area alt="CV69" title="CV 69-6 BR" href="#CV-69" coords="436,752,26" shape="circle">
                    <area alt="CV70" title="CV E70-7 BR" href="#CV-E70" coords="489,749,23" shape="circle">
                    <area alt="CV71" title="CV E71-5 BR" href="#CV-E71" coords="544,742,25" shape="circle">
                    <area alt="CV73" title="CV 73-? BR" href="#CV-73" coords="588,457,26" shape="circle">
                    <area alt="CVE03" title="CV E03-6 BR" href="#CV-E03" coords="989,832,25" shape="circle">
                    <area alt="CVE04" title="CV E04-3 BR" href="#CV-E04" coords="940,807,25" shape="circle">
                    <area alt="CVE05" title="CV E05-? BR" href="#CV-E05" coords="894,788,23" shape="circle">
                    <area alt="CVE06" title="CV E06-3 BR" href="#CV-E06" coords="839,773,25" shape="circle">
                    <area alt="CVE07" title="CV E07-3 BR" href="#CV-E07" coords="781,765,25" shape="circle">
                    <area alt="CVE08" title="CV E08-3 BR" href="#CV-E08" coords="723,764,24" shape="circle">     
                    <area alt="CVE10" title="CV E10-6 BR" href="#CV-E10" coords="1055,796,22" shape="circle">
                    <area alt="CVE11" title="CV E11-6 BR" href="#CV-E11" coords="1010,771,24" shape="circle">
                    <area alt="CVE13" title="CV E13-3 BR" href="#CV-E13" coords="928,727,23" shape="circle">
                    <area alt="CVE15" title="CV E15-? BR" href="#CV-E15" coords="884,714,21" shape="circle">
                    <area alt="CVE17" title="CV E17-3 BR" href="#CV-E17" coords="837,705,23" shape="circle">
                    <area alt="CVE18" title="CV E18-3 BR" href="#CV-E18" coords="785,705,28" shape="circle">
                    <area alt="CVE19" title="CV E19-3 BR" href="#CV-E19" coords="726,703,23" shape="circle">
                    <area alt="CVE20" title="CV E20-5 BR" href="#CV-E20" coords="657,673,700,788" shape="rect">
                    <area alt="CVE22" title="CV E22-5 BR" href="#CV-E22" coords="814,631,855,678" shape="rect">
                    <area alt="CVE23" title="CV E23-3 BR" href="#CV-E23" coords="783,645,22" shape="circle">
                    <area alt="CVE23A" title="CV E23A-3BR" href="#CV-E23A" coords="787,599,22" shape="circle">
                    <area alt="CVE24" title="CV E24-3 BR" href="#CV-E24" coords="703,623,749,675" shape="rect">
                    <area alt="CVE26" title="CV E26-3 BR" href="#CV-E26" coords="662,579,750,618" shape="rect">
                    <area alt="CVE31" title="CV E31-4 BR" href="#CV-E31" coords="716,520,763,569" shape="rect">
                    <area alt="CVE32" title="CV E32-3 BR" href="#CV-E32" coords="660,515,711,564" shape="rect">
                    <area alt="CVE33" title="CV E33-4 BR" href="#CV-E33" coords="775,469,827,572" shape="rect">
                    <area alt="CVE34" title="CV E34-? BR" href="#CV-E34" coords="716,467,763,518" shape="rect">
                    <area alt="CVE35" title="CV E35-3 BR" href="#CV-E35" coords="687,492,21" shape="circle">
                    <area alt="CVE36" title="CV E36-2 BR" href="#CV-E36" coords="775,428,830,466" shape="rect">
                    <area alt="CVE37" title="CV E37-? BR" href="#CV-E37" coords="718,373,772,466" shape="rect">
                    <area alt="CVE38" title="CV E38-3 BR" href="#CV-E38" coords="665,378,713,469" shape="rect">
                    <area alt="CVE39" title="CV E39-3 BR" href="#CV-E39" coords="773,350,830,428" shape="rect">
                </map>
            </div>

            <!-- The Cliff Villas -->
            <div class="Cliff">
                <h1 id="CliffVillas"> <a href="FactSheets/The Cliff Villas – Charimans Circle Club.html"> The Cliff Villas</a></h1>
                <h2> On Computer - Mouse over Villa Number for # Bedrooms & <br> Click to view information from Villa List </h2>
                <img src="/images/CliffVillas.JPG" alt="Map of Royal Villas Section" usemap="#CliffVillaMap"/>
                <map name="CliffVillaMap" >
                    <area alt="TC 1" Title="TC 1:6 BR" href="#TC-1" coords="171,305,17" shape="circle">
                    <area alt="TC 2" Title="TC 2:? BR" href="#TC-2" coords="186,276,17" shape="circle">
                    <area alt="TC 3" Title="TC 3:? BR" href="#TC-3" coords="189,247,17" shape="circle">
                    <area alt="TC 4" Title="TC 4:7 BR" href="#TC-4" coords="181,221,17" shape="circle">
                    <area alt="TC 6" Title="TC 6:6 BR" href="#TC-6" coords="199,163,17" shape="circle">
                    <area alt="TC 8" Title="TC 8:6 BR" href="#TC-8" coords="245,155,17" shape="circle">
                </map>
            </div>

            <!-- Villa Park Villas -->
            <div class="Park">            
                <h1 id="VillaParkVillas"> <a href="FactSheets/Villa Park – Charimans Circle Club.html"> Villa Park</a></h1>
                <h2> On Computer - Mouse over Villa Number for # Bedrooms & <br> Click to view information from Villa List </h2>
                <img src="/images/VillaParkVillas.JPG" alt="Map of Villa Park Villas Section" usemap="#VillaParkVillaMap"/>
                <map name="VillaParkVillaMap" >
                    <area alt="VP 18" Title="VP 18:6 BR" href="#VP18" coords="118,248,17" shape="circle">
                    <area alt="VP 21" title="VP 21:4 BR" href="#VP21" coords="187,204,13" shape="circle">
                    <area alt="VP 27" title="VP 27:6 BR&#10;Owners:Joe & Wendy Emrich" href="#VP27" coords="115,203,11" shape="circle">
                    <area alt="VP 29" Title="VP 29:6 BR" href="#VP29" coords="147,138,17" shape="circle">
                    <area alt="VP 31" title="VP 31:4 BR" href="#VP31" coords="179,116,9" shape="circle">
                </map>
            </div>

            <!-- Overflow Villas -->
            <div class="Overflow">
                <h1 id="OverflowVillas"> Overflow Villas</h1>
                <h2> On Computer - Mouse over Villa Number for # Bedrooms & <br> Click to view information from Villa List </h2>
                <img src="/images/OverflowBig.JPG" alt="Map of Overflow Villas Section" usemap="#OverflowBigMap"/>
                <map name="OverflowBigMap">
                    <area alt="M1-2 BR" title="M1-2 BR" href="#M01" coords="38,74,30" shape="circle">
                    <area alt="M2-4 BR" title="M2-4 BR" href="#M02" coords="50,280,30" shape="circle">
                    <area alt="M3-4 BR" title="M3-4 BR" href="#M03" coords="85,157,40" shape="circle">
                    <area alt="M5-3 BR" title="M5-3 BR" href="#M05" coords="102,63,35" shape="circle">  
                </map>
            </div>
        </div>

        <!-- Accommodations Fact Sheets -->
        <div class="Info">
            <h1 id="ResortInfo"> Resort Information </h1>
            <table>
                <thead>
                    <tr>
                        <th style="width:40%">Accommodation & Other</th>
                        <th style="width:15%">Information</th>
                        <th style="width:30%"><details><summary>Pictures and Other info</summary>Accommodation pictures are only available to members of the Chairman Circle Group on Facebook </details></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cent">
                        <td class="right"> Resort Information </td>
                        <td><a href="http://chairmanscircleclub.com/all-inclusive-rates/?fbclid=IwAR3wHc7rYyJovMP_pdAXoGr069-2K4oXq7_lO6iZe1LHLhPkPXdnrtUjU_E" target=info> All-Inclusive Rates </a></td>
                        <td><a href="http://lhvcnewsletter.com/" target=info> Newsletter  </a> </td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Royal Villas </td>
                        <td><a href="FactSheets/The Royal Villas – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="#RV-1"> Choose Villa Number from List </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Crown Villas </td>
                        <td><a href="FactSheets/The Crown Villas – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="#CV-1A"> Choose Villa Number from List </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Cliff Villas </td>
                        <td><a href="FactSheets/The Cliff Villas – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="#TC-1"> Choose Villa Number from List </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Villa Park Villas </td>
                        <td><a href="FactSheets/Villa Park – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="#VP-18"> Choose Villa Number from List </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Sunrise Suites </td>
                        <td><a href="FactSheets/Sunrise Suites & Penthouse – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.168109031785844&type=3" target=info> See Facebook Album </a> </td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Presidential Suites </td>
                        <td><a href="FactSheets/Presidential Suites – Puerto Plata – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.1287055944787757&type=3" target=info> See Facebook Album </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Royal Suites </td>
                        <td><a href="FactSheets/The Royal Suites – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.1287035434789808&type=3" target=info> See Facebook Album </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Residence Suites </td>
                        <td><a href="FactSheets/The Residence Suites – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set?set=oa.766305827344026&type=3" target=info> See Facebook Album </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Crown Suites </td>
                        <td><a href="FactSheets/The Crown Suites – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.1287035434789808&type=3" target=info> See Facebook Album </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Tropical Hotel </td>
                        <td><a href="FactSheets/The Tropical – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.248330823497764&type=3" target=info> No Pictures yet - put here </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Cofresi Palm Beach Spa and Resort </td>
                        <td><a href="FactSheets/Cofresi Palm Beach & Spa Resort – Charimans Circle Club.html" target=info> Fact Sheet </a></td>
                        <td><a href="https://www.facebook.com/media/set/?set=oa.1287047494788602&type=3"> target=info See Facebook Album </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Restaurants, Lite Fare and Bars </td>
                        <td> <a href="https://lifestyleholidaysvc.com/menus/" target=info> Menus </a> <br>
                             <a href="https://chairmanscircleclub.com/restaurants/" target=info> Schedule Hours (requires CC login)</a>
                        </td>
                        <td> <a href="http://chairmanscircleclub.com/all-inclusive-rates/?fbclid=IwAR1wL_TYAgfz89uV8bs_NL7hTlc4DiPMQSQhZgxvRbxSdRv0OwXL00mQnug" target=info>All-Inclusive and Resort Fees</a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Excursions </td>
                        <td> 
                            <a href="https://www.lifestyleexcursions.com/" target=info> Resort Excursions </a> <br>
                            <a href="https://www.elvistourspuertoplata.com/" target=info> Elvis Tour Excursions </a> <br>                           
                            <a href=" https://www.rvtours.info/" target=info> R.V. Tour Excursions </a>
                        </td>
                        <td> <a href="https://blog.amstardmc.com/things-to-do-in-puerto-plata-good-vacation-spot/?fbclid=IwAR0-89XXFNJysOQORESV-Ho4M4bIFqSFEX0gEXLq44QG0o-RtYY3h_KETmA" target=info>Things to Do in Puerto Plata</a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Xtreme Zone </td>
                        <td> <a href="https://funlifestylevacations.com/things-to-do/xtreme-zone/" target=info> Information </a></td>
                        <td> </td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Yin Yang Spa </td>
                        <td> <a href="https://yin-yangspa.com/" target=info> Treatments </a></td>
                        <td> <a href="https://yin-yangspa.com/gallery/" target=info> Gallery </a></td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> Chairman Circle Member List </td>
                        <td> <a href="https://docs.google.com/spreadsheets/d/1zzO_zEH42WRoiEJQKi4Z1C1lYrBFeei3oZtwXYYOelY/edit?fbclid=IwAR2in5otK5osf2ay1oYJT6CbAArVOhvYToIo3ftY17gpkbI5XDC1v1OkIIE#gid=0" target=info> CC Member List </a></td>
                        <td> </td>
                    </tr>
                    <tr class="cent">
                        <td class="right"> FAQ </td>
                        <!--
                        <td> <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSvmtVXakqa0YVD8ThWAQkxl-Rrfyx62L1Nbiqju5NTwhop73q5k2JZ8BzevpI5zoi5VC4mBXNYrakI/pubhtml" target=info> Google Sheets </a> </td>
                        -->
                        <td> <a href="/FactSheets/FAQ/Reopening FAQ.pdf" target=info> PDF </a> </td>
                        <td> <a href="/FactSheets/FAQ/Reopening FAQ.htm" target=info> Web Page </a>  </td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
        </div>

        <!-- Villa Information List  -->
        <div class="List">
            <h1 id="VillaList"> Villa List </h1>
            <details><summary class="left">Hints:</summary>
                <ul >
                    <li> Sort by clicking the column header. For example, if you click the #BR header, the Villas will be grouped by the number of bedrooms. </li> 
                    <li> Navigate to the Section Map by clicking the Section name. </li>
                    <li> Clicking on Villa number will link to Facebook Album with pictures. [requires FB CC membership] </li>
                    <li> Villa details can be displayed by clicking the &#8227; glyph in the #BR column. </li>
                    <li> Owners are identified with O: and those with websites will be links </li>
                    <li> Entries are color coded by Section. </li>
                </ul>
            </details>
            <table class="sortable">
                <?php
                    if (!file_exists($logFile)) {
                        echo "<br>$logFile not found";
                    };

                    // Read the LHVC Resort Map Log JSON
                    $json = array();
                    $json = file_get_contents($logFile);

                    $log = array();
                    $log = json_decode($json,true);

                    $headers = array();
                    $headers = $log["Fields"];

                    $allVillas = array();
                    $allVillas = $log["Villas"];
                    ?>
                <thead style="vertical-align:bottom">
                    <tr> 
                        <th style="width:7%"> Section </th>
                        <th style="width:10%"> Villa # </th>
                        <th style="width:14%"> #BR </th>
                        <th style="width:7%"> A/O </th>
                        <th style="width:56%" class="left"> Comments </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($allVillas as $sect => $theVillas) {
                            foreach ($theVillas as $thisVilla) {
                            if ($sect) {
                                    $sectAnchor=$Section[$sect];
                                    $date=$thisVilla['A/O'];
                                    $villaNO=$thisVilla['Villa#'];
                                    $villaName=$thisVilla['VillaName'];
                                    $villaAlbum=$thisVilla['VillaAlbum'];
                                    $owner=$thisVilla['Owner'];
                                    $ownerSite=$thisVilla['OwnerSite'];
                                    $br=$thisVilla['BRs'];
                                    $streetMBR=$thisVilla['StreetMBR'];
                                    $streetBR=$thisVilla['StreetBR'];
                                    $upperMBR=$thisVilla['UpperMBR'];
                                    $upperBR=$thisVilla['UpperBR'];
                                    $lowerMBR=$thisVilla['LowerMBR'];
                                    $lowerBR=$thisVilla['LowerBR'];
                                    $comments=nl2br($thisVilla['Comments']);

                                    $villaID=$Abrev[$sect].$villaNO;
                                    
                                    $alert="Link not available";
                        
                                    $HTMLTD = "";
                                    $HTMLTR = "<tr id='$villaID' class=$class[$sect]>";
                                    echo $HTMLTR;
                                    $HTMLTD .= " <td style='text-align:right'> $sectAnchor </td>"; 

                                    if ($villaAlbum){
                                        if ($villaName) {
                                            $HTMLTD .= " <td> <a HREF=\"$villaAlbum\" target=\"FBCC\"> $villaID</a> <br> $villaName </td>";
                                        } else {
                                            $HTMLTD .= " <td> <a HREF=\"$villaAlbum\" target=\"FBCC\"> $villaID</a> </td>";
                                        }
                                    
                                    } else {
                                        $HTMLTD .= " <td> <a HREF=\"javascript:PopUP('Link not yet available!\\nCheck back soon.')\"> $villaID <br> $villaName</a> </td>";
                                    }
                                    $HTMLTD .= " <td style='text-align:left'> <details> <summary> $br </summary>";
                                    $HTMLTD .= " Street:";
                                    if ($streetMBR) {
                                        $HTMLTD .= "$streetMBR MBR ";
                                    } 
                                    if ($streetBR) {
                                        $HTMLTD .= "$streetBR BR";
                                    }
                                    $HTMLTD .= "<br> Upper:";
                                    if ($upperMBR) {
                                        $HTMLTD .= "$upperMBR MBR ";
                                    } 
                                    if ($upperBR) {
                                        $HTMLTD .= "$upperBR BR";
                                    }
                                    $HTMLTD .= "<br> Lower:";
                                    if ($lowerMBR) {
                                        $HTMLTD .= "$lowerMBR MBR ";
                                    } 
                                    if ($lowerBR) {
                                        $HTMLTD .= "$lowerBR BR";
                                    }
                                    //$HTMLTD .= '<hr>';
                                    if ($ownerSite) {
                                        if ($owner) {
                                            $HTMLTD .= "<hr> O: <a href='$ownerSite' target='owner'> $owner </a>";
                                        } else {
                                            $HTMLTD .= "<hr> O: <a href='$ownerSite' target='owner'> Owner Site </a>";
                                        }
                                    } else {
                                        if ($owner) {
                                            $HTMLTD .= "<hr> O: $owner";
                                        }
                                    }    
                                    $HTMLTD .= " </details></td>";
                                    $HTMLTD .= " <td> $date </td>";
                                    $HTMLTD .= " <td style='text-align:left'> $comments </td>";
                                    echo $HTMLTD;
                                    echo "</tr>".PHP_EOL;
                                }
                            }  
                        }
                    ?>
                </tbody>
            </table>
        </div>
       
        <!-- Footer -->
        <footer id="Contact">
            <!-- Update Villa Information & Contact forms -->
            <div class="Info">
                <h1 id="Form"> Villa Info Form</h1>
                <p> Complete form below and click Submit.</p>
                <form action="/Utils/LHVCResortMapLog.php" method="GET">
                       <table>
                            <thead>
                                <tr>
                                    <th class="right"> <strong> Category </strong> </th>
                                    <th class="left"> <strong> Information </strong> </th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                    <td class="right"> Email Address</td>
                                    <td><input type="email" id="updateFrom" name="From" value="" size="10"></td>
                                </tr>                                            
                                <tr class="right">
                                    <td> Section </tD>
                                    <td class="left">
                                        <select name="Sect"> 
                                            <option value="none">Section</option>
                                            <option value="Royal">Royal</option>
                                            <option value="Crown">Crown</option>
                                            <option value="The Cliffs">The Cliffs</option>
                                            <option value="Villa Park">Villa Park</option>
                                            <option value="Overflow">Overflow</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">Villa#</td>
                                    <td class="left"> <input type="text" id="V#" name="Villa#" value="" size="10"></td>
                                </tr>
                                <tr>
                                    <td class="right">
                                        <details>
                                            <summary>Villa Name</summary>
                                            Some Villas have a Name. For example, <a href="#CVE32"> CV-E32</a> is called Villa Lisa
                                        </details>
                                    </td>
                                    <td class="left"> <input type="text" id="VN" name="VillaName" value="" size="10"></td>
                                </tr>
                                <tr> 
                                    <td class="right">Villa Album</td>
                                    <td class="left"> <input type="text" id="VillaAlbum" name="VillaAlbum" value="" size=24></td>
                                </tr>
                                <tr> 
                                    <td class="right">Owner</td>
                                    <td class="left"> <input type="text" id="Owner" name="Owner" value="" size=24></td>
                                </tr>
                                <tr> 
                                    <td class="right">Owner's website</td>
                                    <td class="left"> <input type="text" id="OwnerSite" name="OwnerSite" value="" size=24></td>
                                </tr>
                                <tr>
                                    <td class="right"># BRs</td>
                                    <td class="left"> 
                                        <select name="BRs">
                                            <option value="1 BR">1</option>
                                            <option value="2 BR">2</option>
                                            <option value="3 BR">3</option>
                                            <option value="4 BR">4</option>
                                            <option value="5 BR">5</option>
                                            <option value="6 BR">6</option>
                                            <option value="7 BR">7</option>
                                        </select>
                                        <!--    <input type="text" id="BRs" name="Number of BRs" value="" size="1" > -->
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">#BR Street Level</td>
                                    <td class="left"> 
                                        <select name="StreetMBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select> Master Bedrooms <br>
                                        <select name="StreetBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                        </select> Other Bedrooms
                                        <!-- <td class="left"> <input type="text" id="StreetLevel" name="Street Level" value="" size="10"> -->                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">#BR Upper Level</td>
                                    <td class="left">
                                        <select name="UpperMBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select> Master Bedrooms <br>
                                        <select name="UpperBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                        </select> Other Bedrooms
                                        <!-- <td class="left"> <input type="text" id="UpperLevel" name="Upper Level" value="" size="10"> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">#BR Lower Level</td>
                                    <td class="left">
                                        <select name="LowerMBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select> Master Bedrooms <br>
                                        <select name="LowerBR">
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                        </select> Other Bedrooms
                                            <!-- <td class="left"> <input type="text" id="LowerLevel" name="Lower Level" value="" size="10"> -->
                                        </td>
                                    </tr>
                                <tr>
                                    <td class="right">Comments</td>
                                    <td class=left> <textarea rows="4" cols="24" id="Comments" name="Comments"></textarea> </td>
                                </tr>
                                <tr>
                                    <td></td> 
                                    <td class="left"><input type="submit" value="Submit Villa Information Form"> </td>
                                </tr>
                            </tbody>
                    </table>
                </form>

                <h2 id="ContactAuthor"> Contact Web Administrator </h2>
                <p> Corrections and suggestions on how to improve the content are welcomed. Thank you for your time helping improve site for all of us. </p>
                <form action="/Utils/LogFeedback.php??Source=LHVCResortMap" method="GET">
                    <table>
                        <tr>
                            <td> Email Address</td>
                            <td><input type="email" id="logFrom" name="From" value="" size="10"></td>
                        </tr>
                        <tr>
                            <td class="right"> Feedback </td>
                            <td> <textarea rows="4" cols="32" id="Feedback" name="Feedback"></textarea> <br>
                                <input type="hidden" name="Source" value="LHVCResortMap" > 
                                <input type="submit" value="Comments"> 
                            </td>
                        </tr>
                    </table>
                </form>
        
                <div id="About"> 
                    <hr>
                    <h3> About website & authoring tools </h3>
                    <p> This site is an effort to centralize information that exists across the Chairman Circle Facebook page.
                        It was a COVID-19 quarantine project by Don Simard (CC0260) to sharpen his HTML skills and learn PHP. 
                        It is hosted on a personal Synology NAS. </p>
                    <ul>
                        <li> <a href="https://kryogenix.org/code/browser/sorttable/"> Sorttable</a> was a useful feature to add 
                            to the Villa List. Stuart Langridge, the Author, was gracious in helping to address some issues I 
                            encountered. Thank you Stuart for your help and recommendations.</li>
                        <li> <a href="https://www.w3schools.com/html/">w3schools</a> was used to refresh my HTML skills.</li>
                        <li> The <a href="https://www.w3schools.com/howto/howto_js_bottom_nav_responsive.asp">Responsive Navbar </a> is from the w3schools site.</li>
                        <li> <a href="https://www.imagemap.org/"> Imagemap </a> was used to create the usemap coordinates and HTML code for the active maps. </li>
                        <li> <a href="https://code.visualstudio.com/"> Visual Studio Code </a> is an excellent authoring tool.</li>
                        <li> <a href="https://github.com/"> Github </a> integrates well into Visual Studio Code for configuration control.</li>
                        <li> The <a href="https://validator.w3.org/"> W3 HTML validator </a> was used to ensure HTML syntax was correct. </li>
                    </ul>
                    <p> ToDo list </p>
                    <ul>
                        <li> If there is something you want to put on ToDo list, send comments using <a href="#Feedback"> Contact Form</a> </li>
                    </ul>
                    <br> <br> <br> 
                </div>
            </div>
        </footer>

        <script>
            function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
        </script>
   </body>
</html>

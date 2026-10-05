<?php
$ciudad=[
    ["ciudad"=>"tokyo","pais"=>"japan","continente"=>"asia"],
    ["ciudad"=>"mexico city","pais"=>"mexico","continente"=>"north america"],
    ["ciudad"=>"new york","pais"=>"usa","continente"=>"north america"],
    ["ciudad"=>"mumbai","pais"=>"india","continente"=>"asia"],
    ["ciudad"=>"Seoul","pais"=>"corea","continente"=>"asia"],
    ["ciudad"=>"shangai","pais"=>"china","continente"=>"asia"],
    ["ciudad"=>"chicago","pais"=>"usa","continente"=>"north america"]
    ["ciudad"=>"buenos aires","pais"=>"argentina","continente"=>"south america"],
    ["ciudad"=>"cairo","pais"=>"egypt","continente"=>"africa"],
    ["ciudad"=>"londres","pais"=>"uk","continente"=>"europe"]
    
];
$totalusa=0;
$totalamerica=0;
foreach($ciudad as $c){
    if($c["pais"]=="usa")
    {
        $totalusa++;
    }
    if($c["continente"]=="north america")
    {
        $totalamerica++;
    }
}
echo "usa aparece".$totalusa."veces.<br>",
eccho "north america aparece".$totalamerica."veces.<br>";
?>
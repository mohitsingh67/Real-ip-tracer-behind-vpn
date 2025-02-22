<?php
function trac($ip) {

$data = @unserialize(file_get_contents("http://ip-api.com/php/".$ip));
$FCL="\033[01;33m";
$MCL="\033[01;37m>\033[01;32m";
$NCL="\033[00m";
date_default_timezone_set($data['timezone']);
system("clear");

// Banner with updated project title and team details
echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m _____     _        _     _      
     \033[01;31m(_)\033[01;33m |_   _|   (_)      | |   (_)     

   \033[01;37m}\033[01;31m------------------------------------------------\033[01;37m{  
}\033[01;31m------ \033[01;32mReal IP Tracking Behind VPN\033[01;31m ------\033[01;37m{  
}\033[01;31m------ \033[01;32mDeveloped by Team - TejasVigil\033[01;31m ------\033[01;37m{  
}\033[01;31m---- \033[01;32mMembers: Mohit Singh, Naveen Kumar, Ravindra Rajak\033[01;31m ----\033[01;37m{  
   }\033[01;31m------------------------------------------------\033[01;37m{  

\033[00m
EOL;

// Checking if IP tracking was successful
if (!empty($data['status']) && $data['status'] == 'success') {
    echo "\n ".$FCL."IP Address    ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."Country code  ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."Country       ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."Date & Time   ".$MCL."   ".date("F j, Y, g:i a");
    echo "\n ".$FCL."Region code   ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."Region        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."City          ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."Zip code      ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."Time zone     ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Organization  ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."Latitude      ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."Longitude     ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."Location      ".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
} else {
    // Error message if tracking fails
    echo "\n\033[01;31m Sorry, unable to track your\033[01;33m IP Address\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
    echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check your \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
}

// Function call to track the provided IP
}
trac($argv[1]);

?>

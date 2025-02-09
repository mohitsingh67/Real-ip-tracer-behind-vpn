<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
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
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating IP-Tracer.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/ && sudo git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/IP-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              IP-Tracer updated successfully !!!\033[01;37m\n";
  sleep(1);
}

upd();
?>

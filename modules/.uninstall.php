<?php
include("modules/system.php");

class un {
  public function uni() {
    global $system;

    // Removing old files
    if ($system == "termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IP-Tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/ip-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system == "ubuntu") {
      system("sudo rm -rf /usr/bin/ip-tracer");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/IP-Tracer");
    } else {
      system("rm -rf /usr/bin/ip-tracer");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/IP-Tracer");
    }
  }

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

    if (file_exists("/usr/bin/ip-tracer")) {
      echo "\n\033[01;31m        Sorry, IP-Tracer is not removed !!!\033[00m\n";
    } else if (file_exists("/data/data/com.termux/files/usr/bin/ip-tracer")) {
      echo "\n\033[01;31m        Sorry, IP-Tracer is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        IP-Tracer has been successfully uninstalled !!!\033[00m\n";
    }
  }
}

$a = new un;
$a->uni();
$a->logo();
?>

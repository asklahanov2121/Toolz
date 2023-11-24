<?php
error_reporting(0);
$red = "\033[0;31m";
$green = "\033[0;32m";
$yellow = "\033[0;33m";
$purple = "\033[1;35m";
$endcolor = "\033[0m";
popen('cls', 'w');

echo"$red";
echo" _______ ____   ____  _      ______          \n";
usleep( 30 * 2000 );
echo"|__   __/ __ \ / __ \| |    |___  /         \n";
usleep( 30 * 2000 );
echo"   | | | |  | | |  | | |       / /          \n";
usleep( 30 * 2000 );
echo"   | | | |  | | |  | | |      / /           \n";
usleep( 30 * 2000 );
echo"   | | | |__| | |__| | |____ / /__          \n";
usleep( 30 * 2000 );
echo"   |_|  \____/ \____/|______/_____| _______ \n$endcolor";
usleep( 30 * 2000 );
echo"$yellow    /\   | |    |  _ \|  ____|  __ \__   __|\n";
usleep( 30 * 2000 );
echo"   /  \  | |    | |_) | |__  | |__) | | |   \n";
usleep( 30 * 2000 );
echo"  / /\ \ | |    |  _ <|  __| |  _  /  | |   \n";
usleep( 30 * 2000 );
echo" / ____ \| |____| |_) | |____| | \ \  | |   \n";
usleep( 30 * 2000 );
echo"/_/    \_\______|____/|______|_|  \_\ |_|   \n$endcolor";
usleep( 30 * 8000 );
echo "$purple
1) -> GCash Checker            4) -> Send Bulk Mail
2) -> Number Generator         5) -> Youtube to MP3 Multiple Downloader
3) -> Sim Courier Checker 

Choose:$endcolor ";
$choose = trim(fgets(STDIN));

if($choose == "1"){
    popen('cls', 'w');

// =================MENU 1==================== //  
echo "Filename: ";
$check = trim(fgets(STDIN));
$leads = file_get_contents("$check");

$trim = (explode("\n", $leads));

foreach($trim as $no => $number){

    
    $filez = file_get_contents('https://mgs-gw.paas.mynt.xyz/mgw.htm?ctoken=&operationType=alipayplus.mobilewallet.user.login.consult&requestData=[{"envInfo":{"tokenId":"76116844-0287-4ee8-9d2c-d7af66cc12de","osType":"WindowsNT","osVersion":"10.0","browserType":"Chrome","browserVersion":"93","terminalType":"WEB"},"loginIdType":"MOBILE_NO","loginId":"'.$number.'","extParams":{"bizNo":"","sessionId":null,"bizTypeForMonitor":"ONLINE_LAZADA","merchantForMonitor":""}}]&version=1.0&workspaceId=PROD&appId=D54528A131559&tenantId=MYNTPH');
    $filez = json_decode($filez, true);
    $live = $filez['result']['riskConsultInfo']['riskResult'];
    $die = $filez['result']['errorMessage'];

    if($live == "REJECT"){
        echo "$green$no => $number => VALID! $endcolor\n";
    }elseif($die == "This account does not exist. Please try again or create a new account."){
        echo "$red$no => $number => DIE! $endcolor\n";
    }else{
        echo "$no => $number => ApiError \n";
    }




}

// =============END OF MENU 1==================== //  


}elseif($choose == "2"){
    popen('cls', 'w');

// =================MENU 2==================== //  
    echo "1 - 100k: ";
    $number = trim(fgets(STDIN));

    echo "Filename: ";
    $filename = trim(fgets(STDIN));

    
    $randomNumbersArray = array_map(function() {
        return str_pad(mt_rand(1,999999999),9,STR_PAD_LEFT);
    }, range(1,$number));
    foreach ($randomNumbersArray as $value) {
    
      $file = fopen("$filename","a+");
        $res = "09$value\n";
    fwrite($file,$res);
    fclose($file);
    }
    echo "Done!";

// ==============END OF MENU 2=================//



}elseif($choose == "3"){
    popen('cls', 'w');

// =================MENU 3==================== //  

    
echo "Filename: ";
$checks = trim(fgets(STDIN));
$leadss = file_get_contents("$checks");

$trimz = (explode("\n", $leadss));

foreach($trimz as $no => $valued){ //usleep( 30 * 1000 );

$numx = substr($valued, 0, 4);
$globe = file_get_contents('./validator/globe.txt');
$smart = file_get_contents('./validator/smart.txt');
$sun = file_get_contents('./validator/sun.txt');
$dito = file_get_contents('./validator/dito.txt');

 if(strpos($globe, "$numx") !== false){

	 echo "$purple$no -> $valued -> globe $endcolor\n";


	}elseif(strpos($smart, "$numx") !== false){

	 echo "$red$no -> $valued -> smart$endcolor\n";


		}elseif(strpos($sun, "$numx") !== false){


			echo "$yellow$no -> $valued -> Sun$endcolor\n";


			}elseif(strpos($dito, "$numx") !== false){

				echo "$green$no -> $valued -> Dito$endcolor\n";


				}else{

                    echo "$no -> $valued -> Unknown\n";

				}

            }

// ================END OF MENU 3==================== //  

}elseif($choose == "4"){
    popen('cls', 'w');

//=================MENU 4==================== //  
    



                echo "Menu 4";







// =================MENU 4==================== //      
}else{
    popen('cls', 'w');

    echo "Exit";

}

?>
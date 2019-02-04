<?php
date_default_timezone_set('Asia/Jayapura');
//Khusus daerah Papua & Sekitarnya.
//Sesuaikan timezone di kota anda.
#############################
# Author: Iansangaji		#
# Codename: Pengingat Adzan #
#############################
//Subuh 5:04 AM
//Matahari terbit 6:24 AM
//Dhuhr 12:29 PM
//Ashar 3:50 PM
//Maghrib 6:33 PM
//Isha 7:45 PM
$adzan_subuh = "adzan-subuh.mp3";
$adzan_all = "adzan-all.mp3";
$data = date("h:i A");

if($data == "05:04 AM"){
	echo "Saatnya Adzan Subuh $data\n";
	system("qmmp $adzan_subuh");
}elseif($data == "12:29 PM"){
	echo "Saatnya Adzan Dhuhr $data\n";
	system("qmmp $adzan_all");
}elseif($data == "03:50 PM"){
	echo "Saatnya Adzan Ashar $data\n";
	system("qmmp $adzan_all");
}elseif($data == "06:33 PM"){
	echo "Saatnya Adzan Maghrib $data\n";
	system("qmmp $adzan_all");
}elseif($data == "07:45 PM"){
	echo "Saatnya Adzan Isha $data\n";
	system("qmmp $adzan_all");
}else{
	echo "Belum Saatnya Adzan\n";
}
?>

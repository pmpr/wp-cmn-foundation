<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b40da17e832             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto oyisyigysqeuakcg; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto kkcouemcsagaqiae; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto auaioqeaqmeueemi; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; auaioqeaqmeueemi: goto oywwcacmgwecmmum; kkcouemcsagaqiae: $ksaameoqigiaoigg = $qgciuiagkkguykgs; oywwcacmgwecmmum: oyisyigysqeuakcg: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto awsyksgaekayaigu; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); awsyksgaekayaigu: return $sogksuscggsicmac; } }

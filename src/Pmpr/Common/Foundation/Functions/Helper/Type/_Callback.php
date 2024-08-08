<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b415b03b4c7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto auaioqeaqmeueemi; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto aocuemmuaaiiuiee; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto aeogsokusmsqcuaa; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; aeogsokusmsqcuaa: goto ugaaqomusosqmquw; aocuemmuaaiiuiee: $ksaameoqigiaoigg = $qgciuiagkkguykgs; ugaaqomusosqmquw: auaioqeaqmeueemi: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto kkcouemcsagaqiae; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); kkcouemcsagaqiae: return $sogksuscggsicmac; } }

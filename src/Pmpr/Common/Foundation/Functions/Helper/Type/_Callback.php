<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3fc3df2d9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto ugaaqomusosqmquw; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto aeogsokusmsqcuaa; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto emuqseyswwammumy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; emuqseyswwammumy: goto aocuemmuaaiiuiee; aeogsokusmsqcuaa: $ksaameoqigiaoigg = $qgciuiagkkguykgs; aocuemmuaaiiuiee: ugaaqomusosqmquw: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto auaioqeaqmeueemi; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); auaioqeaqmeueemi: return $sogksuscggsicmac; } }

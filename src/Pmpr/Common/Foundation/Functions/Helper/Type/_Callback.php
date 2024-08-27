<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6343424e0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto ygasycygmaumayys; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto mkqikqqsikqoqgwy; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto egukkoceuuaqqwqu; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; egukkoceuuaqqwqu: goto omusesiokggskasg; mkqikqqsikqoqgwy: $ksaameoqigiaoigg = $qgciuiagkkguykgs; omusesiokggskasg: ygasycygmaumayys: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cwcegeayeuuqccgs; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cwcegeayeuuqccgs: return $sogksuscggsicmac; } }

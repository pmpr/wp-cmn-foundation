<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ced75618540             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto cwcegeayeuuqccgs; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto omusesiokggskasg; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto mkqikqqsikqoqgwy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; mkqikqqsikqoqgwy: goto ygasycygmaumayys; omusesiokggskasg: $ksaameoqigiaoigg = $qgciuiagkkguykgs; ygasycygmaumayys: cwcegeayeuuqccgs: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto egcsgekkgiikcmsc; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); egcsgekkgiikcmsc: return $sogksuscggsicmac; } }

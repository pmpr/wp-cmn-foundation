<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4bac87f58             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto aoyasgammyaegmqk; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto egcsgekkgiikcmsc; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto cwcegeayeuuqccgs; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; cwcegeayeuuqccgs: goto somiowsyicsqgggg; egcsgekkgiikcmsc: $ksaameoqigiaoigg = $qgciuiagkkguykgs; somiowsyicsqgggg: aoyasgammyaegmqk: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto wwagacmausicisuq; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); wwagacmausicisuq: return $sogksuscggsicmac; } }

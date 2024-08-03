<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5dd1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto eicgugqewsqoeqyq; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto qwiwekqsmmeakmuw; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto ieqomucoayqoemog; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ieqomucoayqoemog: goto kauowiucwweueecy; qwiwekqsmmeakmuw: $ksaameoqigiaoigg = $qgciuiagkkguykgs; kauowiucwweueecy: eicgugqewsqoeqyq: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto mioukcqeukuoiowc; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); mioukcqeukuoiowc: return $sogksuscggsicmac; } }

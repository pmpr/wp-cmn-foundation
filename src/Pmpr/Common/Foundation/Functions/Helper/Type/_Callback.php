<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f45159400             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto xkqkamoamikwyksk; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto scuugaikcycgagqs; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto wuqecuowsgggioiw; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; wuqecuowsgggioiw: goto oysiqukyogokmmmm; scuugaikcycgagqs: $ksaameoqigiaoigg = $qgciuiagkkguykgs; oysiqukyogokmmmm: xkqkamoamikwyksk: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto skmcgcigmsyaguwq; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); skmcgcigmsyaguwq: return $sogksuscggsicmac; } }

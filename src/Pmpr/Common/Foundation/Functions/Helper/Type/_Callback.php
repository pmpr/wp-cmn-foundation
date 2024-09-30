<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77cb5a35c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto ouqgocoygmaiamou; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto igkameomykgywamu; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto eggowcqiawiuwski; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; eggowcqiawiuwski: goto awgyiumgyeockqoa; igkameomykgywamu: $ksaameoqigiaoigg = $qgciuiagkkguykgs; awgyiumgyeockqoa: ouqgocoygmaiamou: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto qaaymsuwqmigcoea; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); qaaymsuwqmigcoea: return $sogksuscggsicmac; } }

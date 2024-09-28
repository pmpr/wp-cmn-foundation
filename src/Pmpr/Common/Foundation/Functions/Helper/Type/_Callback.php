<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da660aa36             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto awgyiumgyeockqoa; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto eggowcqiawiuwski; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto weyuusiimkuykwca; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; weyuusiimkuykwca: goto igkameomykgywamu; eggowcqiawiuwski: $ksaameoqigiaoigg = $qgciuiagkkguykgs; igkameomykgywamu: awgyiumgyeockqoa: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto ouqgocoygmaiamou; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); ouqgocoygmaiamou: return $sogksuscggsicmac; } }

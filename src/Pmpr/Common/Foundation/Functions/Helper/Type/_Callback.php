<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04b9a178             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto igkameomykgywamu; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto weyuusiimkuykwca; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto zsscgecwckmocwqa; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; zsscgecwckmocwqa: goto eggowcqiawiuwski; weyuusiimkuykwca: $ksaameoqigiaoigg = $qgciuiagkkguykgs; eggowcqiawiuwski: igkameomykgywamu: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto awgyiumgyeockqoa; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); awgyiumgyeockqoa: return $sogksuscggsicmac; } }

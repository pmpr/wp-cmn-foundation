<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6d87474a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto eggowcqiawiuwski; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto zsscgecwckmocwqa; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto miocgmmkkkksmisy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; miocgmmkkkksmisy: goto weyuusiimkuykwca; zsscgecwckmocwqa: $ksaameoqigiaoigg = $qgciuiagkkguykgs; weyuusiimkuykwca: eggowcqiawiuwski: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto igkameomykgywamu; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); igkameomykgywamu: return $sogksuscggsicmac; } }

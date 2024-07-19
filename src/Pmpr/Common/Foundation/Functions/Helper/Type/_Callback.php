<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada81ac791             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto omkocsuyieykumsw; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gmcgckcqceckmacq; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto okimiwmewgssqemo; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; okimiwmewgssqemo: goto qmuyumaoyqiiqqki; gmcgckcqceckmacq: $ksaameoqigiaoigg = $qgciuiagkkguykgs; qmuyumaoyqiiqqki: omkocsuyieykumsw: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto iwoueqiswogoyeuk; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); iwoueqiswogoyeuk: return $sogksuscggsicmac; } }

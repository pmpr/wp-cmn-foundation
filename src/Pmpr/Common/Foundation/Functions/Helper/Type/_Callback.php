<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01b9d19d25             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq)) { if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $qgciuiagkkguykgs; } else { $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { $ksaameoqigiaoigg = $ukuacigyikaisiwu; } } } return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if ($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs)) { $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); } return $sogksuscggsicmac; } }

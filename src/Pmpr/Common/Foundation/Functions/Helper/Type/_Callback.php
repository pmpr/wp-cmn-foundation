<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90b39bd3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto qmiseemyqgoaemmo; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto imeaooemieqcmgag; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto aqwccmsqgqgumymq; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; aqwccmsqgqgumymq: goto soeawcescakswowc; imeaooemieqcmgag: $ksaameoqigiaoigg = $qgciuiagkkguykgs; soeawcescakswowc: qmiseemyqgoaemmo: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto bgkoceiksggsqacw; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); bgkoceiksggsqacw: return $sogksuscggsicmac; } }

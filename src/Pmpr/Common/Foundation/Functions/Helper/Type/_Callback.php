<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66846eedd73a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto oqmwiucmyoiwciws; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gqaiosgasmiekmma; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto kykgeuicqicmuucg; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; kykgeuicqicmuucg: goto eeyukwscccmigmuq; gqaiosgasmiekmma: $ksaameoqigiaoigg = $qgciuiagkkguykgs; eeyukwscccmigmuq: oqmwiucmyoiwciws: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto sqummycmewomisus; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); sqummycmewomisus: return $sogksuscggsicmac; } }

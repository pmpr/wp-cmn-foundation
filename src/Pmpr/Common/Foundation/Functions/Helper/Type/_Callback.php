<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668421067646d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto eeyukwscccmigmuq; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto kykgeuicqicmuucg; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto syuuameqwoymyswo; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; syuuameqwoymyswo: goto gqaiosgasmiekmma; kykgeuicqicmuucg: $ksaameoqigiaoigg = $qgciuiagkkguykgs; gqaiosgasmiekmma: eeyukwscccmigmuq: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto oqmwiucmyoiwciws; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); oqmwiucmyoiwciws: return $sogksuscggsicmac; } }

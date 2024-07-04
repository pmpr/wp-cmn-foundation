<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686678adfa89             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto sqummycmewomisus; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto eeyukwscccmigmuq; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gqaiosgasmiekmma; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gqaiosgasmiekmma: goto oqmwiucmyoiwciws; eeyukwscccmigmuq: $ksaameoqigiaoigg = $qgciuiagkkguykgs; oqmwiucmyoiwciws: sqummycmewomisus: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto uaeqweeeyaoceeae; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); uaeqweeeyaoceeae: return $sogksuscggsicmac; } }

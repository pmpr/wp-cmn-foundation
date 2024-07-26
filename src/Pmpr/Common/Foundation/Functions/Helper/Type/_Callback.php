<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a42a884e46e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto rogsumkasqmoigce; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto xkqkamoamikwyksk; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto oysiqukyogokmmmm; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; oysiqukyogokmmmm: goto skmcgcigmsyaguwq; xkqkamoamikwyksk: $ksaameoqigiaoigg = $qgciuiagkkguykgs; skmcgcigmsyaguwq: rogsumkasqmoigce: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto emscmyekmeyuwqwm; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); emscmyekmeyuwqwm: return $sogksuscggsicmac; } }

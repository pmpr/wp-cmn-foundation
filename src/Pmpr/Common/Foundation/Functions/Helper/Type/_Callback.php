<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5844728f1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto kimegcsekgymucck; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto emscmyekmeyuwqwm; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto rogsumkasqmoigce; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; rogsumkasqmoigce: goto kuysqaocycusiooc; emscmyekmeyuwqwm: $ksaameoqigiaoigg = $qgciuiagkkguykgs; kuysqaocycusiooc: kimegcsekgymucck: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto omeckagooayaagig; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); omeckagooayaagig: return $sogksuscggsicmac; } }

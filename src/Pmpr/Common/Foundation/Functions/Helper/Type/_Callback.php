<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c0bb2cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto umisqysaiumusiew; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto uqqwyiemackamkca; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto kayygiukegykiwas; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; kayygiukegykiwas: goto miumuoummqkyeeom; uqqwyiemackamkca: $ksaameoqigiaoigg = $qgciuiagkkguykgs; miumuoummqkyeeom: umisqysaiumusiew: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto ogsasqwsmasgymkq; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); ogsasqwsmasgymkq: return $sogksuscggsicmac; } }

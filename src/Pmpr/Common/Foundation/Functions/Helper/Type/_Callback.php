<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31f49a6686             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto wuiecqogyoemkmyo; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto wwagacmausicisuq; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto aoyasgammyaegmqk; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; aoyasgammyaegmqk: goto omgqccwciyuekagc; wwagacmausicisuq: $ksaameoqigiaoigg = $qgciuiagkkguykgs; omgqccwciyuekagc: wuiecqogyoemkmyo: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto nmkyycyeioimqmcc; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); nmkyycyeioimqmcc: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1dbc474879             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto omgqccwciyuekagc; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto aoyasgammyaegmqk; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto somiowsyicsqgggg; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; somiowsyicsqgggg: goto wwagacmausicisuq; aoyasgammyaegmqk: $ksaameoqigiaoigg = $qgciuiagkkguykgs; wwagacmausicisuq: omgqccwciyuekagc: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto wuiecqogyoemkmyo; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); wuiecqogyoemkmyo: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16aff73538             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto oykgoscoqcimcsqg; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gqiuuyygewuqosqe; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto awewuysgsucyuiqu; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; awewuysgsucyuiqu: goto egieyaugcwckokym; gqiuuyygewuqosqe: $ksaameoqigiaoigg = $qgciuiagkkguykgs; egieyaugcwckokym: oykgoscoqcimcsqg: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cqwcweokuiayeicq; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cqwcweokuiayeicq: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2c87384d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto awewuysgsucyuiqu; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto wayyaaaewkgkyayk; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto beesceygkkecsask; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; beesceygkkecsask: goto ameikuoiuqcsucgo; wayyaaaewkgkyayk: $ksaameoqigiaoigg = $qgciuiagkkguykgs; ameikuoiuqcsucgo: awewuysgsucyuiqu: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto gqiuuyygewuqosqe; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); gqiuuyygewuqosqe: return $sogksuscggsicmac; } }

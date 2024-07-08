<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b79bd636             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto wioguogamqaikqqy; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto euuqcskgauwamyuw; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gammgmwagsemkuua; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gammgmwagsemkuua: goto qkqkgaaomgkyowwy; euuqcskgauwamyuw: $ksaameoqigiaoigg = $qgciuiagkkguykgs; qkqkgaaomgkyowwy: wioguogamqaikqqy: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto aiaagscmgeyuqaky; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); aiaagscmgeyuqaky: return $sogksuscggsicmac; } }

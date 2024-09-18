<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae85ba078b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto uewomuwyiswwamwg; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto imwggkqiceiqwwyw; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto ueikeuosueikmmqy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ueikeuosueikmmqy: goto yoummmmsocscggua; imwggkqiceiqwwyw: $ksaameoqigiaoigg = $qgciuiagkkguykgs; yoummmmsocscggua: uewomuwyiswwamwg: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cceqaegwsqgaqges; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cceqaegwsqgaqges: return $sogksuscggsicmac; } }

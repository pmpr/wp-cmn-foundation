<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf63ece5a6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto iyayoqqcasquscwy; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gwggseoomcggqiim; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto ocykqucykqysewkc; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ocykqucykqysewkc: goto osiuigcwawuayisk; gwggseoomcggqiim: $ksaameoqigiaoigg = $qgciuiagkkguykgs; osiuigcwawuayisk: iyayoqqcasquscwy: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cmwgwwgycwmmssak; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cmwgwwgycwmmssak: return $sogksuscggsicmac; } }

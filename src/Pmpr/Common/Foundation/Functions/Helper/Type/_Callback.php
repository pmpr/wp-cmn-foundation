<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c5dc5dae             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto cmwgwwgycwmmssak; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto osiuigcwawuayisk; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gwggseoomcggqiim; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gwggseoomcggqiim: goto iyayoqqcasquscwy; osiuigcwawuayisk: $ksaameoqigiaoigg = $qgciuiagkkguykgs; iyayoqqcasquscwy: cmwgwwgycwmmssak: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto sqsawqgiyogosigw; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); sqsawqgiyogosigw: return $sogksuscggsicmac; } }

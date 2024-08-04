<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66afcf114dfe8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto cmmagyiwukeyqwsy; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto eicgugqewsqoeqyq; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto kauowiucwweueecy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; kauowiucwweueecy: goto mioukcqeukuoiowc; eicgugqewsqoeqyq: $ksaameoqigiaoigg = $qgciuiagkkguykgs; mioukcqeukuoiowc: cmmagyiwukeyqwsy: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto sicyosycsmuqsysq; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); sicyosycsmuqsysq: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66af633f8debd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto mioukcqeukuoiowc; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto kauowiucwweueecy; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto qwiwekqsmmeakmuw; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; qwiwekqsmmeakmuw: goto eicgugqewsqoeqyq; kauowiucwweueecy: $ksaameoqigiaoigg = $qgciuiagkkguykgs; eicgugqewsqoeqyq: mioukcqeukuoiowc: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cmmagyiwukeyqwsy; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cmmagyiwukeyqwsy: return $sogksuscggsicmac; } }

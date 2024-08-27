<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce38dda53fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto awcawqaigquqqywo; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto kgkuyiqwqsyqques; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto sugmesswcyyuwame; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; sugmesswcyyuwame: goto deigmocesygywwwq; kgkuyiqwqsyqques: $ksaameoqigiaoigg = $qgciuiagkkguykgs; deigmocesygywwwq: awcawqaigquqqywo: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto rkqioecyciickiga; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); rkqioecyciickiga: return $sogksuscggsicmac; } }

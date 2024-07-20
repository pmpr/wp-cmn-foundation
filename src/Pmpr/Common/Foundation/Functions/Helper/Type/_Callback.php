<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c3a21eaac3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto umuseoycuocwmkwq; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto ygawggoccwiqyaqy; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto ycyigosuicckquco; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ycyigosuicckquco: goto wiiyoqsikgcqqygi; ygawggoccwiqyaqy: $ksaameoqigiaoigg = $qgciuiagkkguykgs; wiiyoqsikgcqqygi: umuseoycuocwmkwq: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto cygwqimwgaceaogu; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); cygwqimwgaceaogu: return $sogksuscggsicmac; } }

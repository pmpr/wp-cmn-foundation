<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d714733e69             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto cygwqimwgaceaogu; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto wiiyoqsikgcqqygi; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto ygawggoccwiqyaqy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ygawggoccwiqyaqy: goto umuseoycuocwmkwq; wiiyoqsikgcqqygi: $ksaameoqigiaoigg = $qgciuiagkkguykgs; umuseoycuocwmkwq: cygwqimwgaceaogu: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto aakuioygmuqkiueu; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); aakuioygmuqkiueu: return $sogksuscggsicmac; } }

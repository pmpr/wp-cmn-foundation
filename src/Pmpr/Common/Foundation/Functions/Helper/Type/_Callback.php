<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b59cf46             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto acmmiiqmeggwcuis; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto cyomuwaeeaimesos; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gcsessaokiukkyig; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gcsessaokiukkyig: goto okywiecqsoykqemk; cyomuwaeeaimesos: $ksaameoqigiaoigg = $qgciuiagkkguykgs; okywiecqsoykqemk: acmmiiqmeggwcuis: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto ksugksoayiigqake; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); ksugksoayiigqake: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e3829f9fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto okywiecqsoykqemk; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gcsessaokiukkyig; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto iimgquoiiseikqug; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; iimgquoiiseikqug: goto cyomuwaeeaimesos; gcsessaokiukkyig: $ksaameoqigiaoigg = $qgciuiagkkguykgs; cyomuwaeeaimesos: okywiecqsoykqemk: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto acmmiiqmeggwcuis; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); acmmiiqmeggwcuis: return $sogksuscggsicmac; } }

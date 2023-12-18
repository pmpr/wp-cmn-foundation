<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             658012f9e1738             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto assaqeukweemagcm; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto agemwyemooogsiyc; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; agemwyemooogsiyc: goto mgkikasuaseesumm; assaqeukweemagcm: $ksaameoqigiaoigg = $qgciuiagkkguykgs; mgkikasuaseesumm: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto uossiqykiaouimca; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); uossiqykiaouimca: return $sogksuscggsicmac; } }

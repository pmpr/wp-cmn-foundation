<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d6bb4c8522             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto gcwuuuasqqocoics; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto uqcuqaucosyymciy; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; uqcuqaucosyymciy: goto mgcimqiiwsciocoy; gcwuuuasqqocoics: $ksaameoqigiaoigg = $qgciuiagkkguykgs; mgcimqiiwsciocoy: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto eowgoimkqygwiock; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); eowgoimkqygwiock: return $sogksuscggsicmac; } }

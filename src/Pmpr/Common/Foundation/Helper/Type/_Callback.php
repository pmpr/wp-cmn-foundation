<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655528d270d17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto awisawmceeigyqqm; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto eawayoqwuukkgywo; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; eawayoqwuukkgywo: goto muacgquwssyosaae; awisawmceeigyqqm: $ksaameoqigiaoigg = $qgciuiagkkguykgs; muacgquwssyosaae: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto ksemeemissoewyig; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); ksemeemissoewyig: return $sogksuscggsicmac; } }

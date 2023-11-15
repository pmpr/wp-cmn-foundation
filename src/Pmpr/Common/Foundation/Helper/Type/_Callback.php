<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6555101b0ce72             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto ayaawwiioeysswkm; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto gqwwymuckywoyimi; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gqwwymuckywoyimi: goto eawayoqwuukkgywo; ayaawwiioeysswkm: $ksaameoqigiaoigg = $qgciuiagkkguykgs; eawayoqwuukkgywo: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto awisawmceeigyqqm; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); awisawmceeigyqqm: return $sogksuscggsicmac; } }

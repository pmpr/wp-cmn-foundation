<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648879b8b8674             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto moqoommaoiemcoqk; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto ysgecwqkekegmywg; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; ysgecwqkekegmywg: goto cqiuouaccqyaiogc; moqoommaoiemcoqk: $ksaameoqigiaoigg = $qgciuiagkkguykgs; cqiuouaccqyaiogc: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto wcwsogoecyummieu; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); wcwsogoecyummieu: return $sogksuscggsicmac; } }

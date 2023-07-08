<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a9071795a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto gsscqquysycuswow; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto eisoouawyymkasou; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; eisoouawyymkasou: goto uwcgosckamuosimw; gsscqquysycuswow: $ksaameoqigiaoigg = $qgciuiagkkguykgs; uwcgosckamuosimw: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto quycsusswssyiqek; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); quycsusswssyiqek: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65536707cb9cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto ogqqumwguoeiwsks; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto wewoyqywmiuawquq; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; wewoyqywmiuawquq: goto giaiosokigwkciok; ogqqumwguoeiwsks: $ksaameoqigiaoigg = $qgciuiagkkguykgs; giaiosokigwkciok: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, array $ywmkwiwkosakssii = []) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto yksceugwkyaiuwym; } $sogksuscggsicmac = call_user_func_array([$mksyucucyswaukig, $qgciuiagkkguykgs], $ywmkwiwkosakssii); yksceugwkyaiuwym: return $sogksuscggsicmac; } }

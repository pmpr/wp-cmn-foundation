<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663029441b0a9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs) { $ksaameoqigiaoigg = false; if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) { goto mousymoamqcmauki; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) { goto qqicgmcqukmywgwu; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; qqicgmcqukmywgwu: goto yyiysucuymcuyycw; mousymoamqcmauki: $ksaameoqigiaoigg = $qgciuiagkkguykgs; yyiysucuymcuyycw: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto agcwmeycmgsyqeok; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); agcwmeycmgsyqeok: return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d819504ee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto wwsimimccosesome; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto mwqgcamgeuigkmag; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gkiswiyesyseqgyi; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gkiswiyesyseqgyi: goto psgawyoyqymeaqmg; mwqgcamgeuigkmag: $ksaameoqigiaoigg = $qgciuiagkkguykgs; psgawyoyqymeaqmg: wwsimimccosesome: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto ikccqyauagueyquo; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); ikccqyauagueyquo: return $sogksuscggsicmac; } }

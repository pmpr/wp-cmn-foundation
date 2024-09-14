<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdb08957             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto omkwqeiacwosgskq; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto emuyygwqumgmmqei; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gyqiqmsmeisgcyys; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gyqiqmsmeisgcyys: goto kgumycouuweoycwe; emuyygwqumgmmqei: $ksaameoqigiaoigg = $qgciuiagkkguykgs; kgumycouuweoycwe: omkwqeiacwosgskq: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto kimusawigieceeai; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); kimusawigieceeai: return $sogksuscggsicmac; } }

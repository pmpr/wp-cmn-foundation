<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d8c7809438d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto cqeyqcauamscauiq; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto ymiiquygeeucsgaq; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto cwuakumskisqyogc; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; cwuakumskisqyogc: goto ewaqcgwowgogwaqi; ymiiquygeeucsgaq: $ksaameoqigiaoigg = $qgciuiagkkguykgs; ewaqcgwowgogwaqi: cqeyqcauamscauiq: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto smqiciaewkmmyswu; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); smqiciaewkmmyswu: return $sogksuscggsicmac; } }

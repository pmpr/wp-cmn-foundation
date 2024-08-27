<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce54af64690             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto egukkoceuuaqqwqu; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto rkqioecyciickiga; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto awcawqaigquqqywo; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; awcawqaigquqqywo: goto hkcqsqgccmogcyim; rkqioecyciickiga: $ksaameoqigiaoigg = $qgciuiagkkguykgs; hkcqsqgccmogcyim: egukkoceuuaqqwqu: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto mkqikqqsikqoqgwy; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); mkqikqqsikqoqgwy: return $sogksuscggsicmac; } }

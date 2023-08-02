<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ca49f8d1372             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yeecswicmoyiqssi; } try { if (class_exists($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } wp_die("\x63\141\156\x20\x6e\157\164\x20\x63\x72\145\141\x74\145\x20\x69\156\x73\x74\141\156\143\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\161\165\145\163\164\x65\144\x20\x63\154\141\x73\163\x20\156\157\164\40\145\170\151\163\x74\163\x2e"); goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kewsuqsoqkyikkis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqiqyekweaomiwgy; yeecswicmoyiqssi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqiqyekweaomiwgy: return $owgumcsyqsamiemg; } }

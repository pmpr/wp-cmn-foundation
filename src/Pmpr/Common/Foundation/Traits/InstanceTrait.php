<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ca5286e3f2a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yeecswicmoyiqssi; } try { if (class_exists($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } wp_die("\x63\x61\156\x20\x6e\157\164\x20\x63\x72\145\x61\x74\x65\40\x69\156\x73\x74\141\x6e\143\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\x65\161\x75\145\x73\164\145\144\x20\143\x6c\141\x73\x73\40\156\x6f\164\40\x65\x78\x69\x73\164\x73\x2e"); goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kewsuqsoqkyikkis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqiqyekweaomiwgy; yeecswicmoyiqssi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqiqyekweaomiwgy: return $owgumcsyqsamiemg; } }

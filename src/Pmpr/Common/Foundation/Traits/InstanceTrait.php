<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bffaeeb13ae             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yeecswicmoyiqssi; } try { if (class_exists($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } wp_die("\x63\141\x6e\x20\x6e\157\164\40\x63\x72\x65\x61\164\145\40\151\156\x73\164\x61\x6e\x63\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\x65\163\164\145\144\40\x63\x6c\141\163\163\40\156\157\164\x20\x65\x78\151\163\164\x73\x2e"); goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kewsuqsoqkyikkis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqiqyekweaomiwgy; yeecswicmoyiqssi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqiqyekweaomiwgy: return $owgumcsyqsamiemg; } }

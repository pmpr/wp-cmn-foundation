<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ca4b63c4bba             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yeecswicmoyiqssi; } try { if (class_exists($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } wp_die("\x63\x61\156\40\x6e\157\164\x20\143\162\145\x61\x74\145\x20\151\x6e\163\164\141\156\x63\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\145\163\164\145\144\x20\143\x6c\141\x73\163\40\x6e\x6f\x74\x20\x65\170\151\163\x74\x73\56"); goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kewsuqsoqkyikkis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqiqyekweaomiwgy; yeecswicmoyiqssi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqiqyekweaomiwgy: return $owgumcsyqsamiemg; } }

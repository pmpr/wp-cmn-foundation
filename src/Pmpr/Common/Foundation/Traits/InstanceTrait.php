<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ca123209c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yeecswicmoyiqssi; } try { if (class_exists($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } wp_die("\143\141\156\40\156\157\x74\x20\x63\162\145\141\164\145\x20\151\156\x73\164\x61\156\143\x65\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\165\x65\x73\164\x65\144\x20\143\x6c\x61\163\163\40\156\x6f\164\40\145\x78\x69\163\164\x73\x2e"); goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kewsuqsoqkyikkis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqiqyekweaomiwgy; yeecswicmoyiqssi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqiqyekweaomiwgy: return $owgumcsyqsamiemg; } }

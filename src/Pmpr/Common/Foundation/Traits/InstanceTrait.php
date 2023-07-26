<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c1434343f91             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } try { if (class_exists($egkyssmuqcwaciya)) { goto aqakqumsuimkkkus; } wp_die("\143\141\x6e\40\x6e\x6f\x74\x20\143\162\x65\x61\x74\x65\40\151\x6e\x73\164\141\156\x63\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\161\x75\145\163\x74\145\144\40\143\154\141\x73\x73\x20\x6e\x6f\x74\x20\145\170\151\163\x74\x73\56"); goto qkeogqcekgawsgwe; aqakqumsuimkkkus: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qkeogqcekgawsgwe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kewsuqsoqkyikkis: return $owgumcsyqsamiemg; } }

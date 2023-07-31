<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c7bf6e09c6f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qseiiaweiykcwacy; } try { if (class_exists($egkyssmuqcwaciya)) { goto aqakqumsuimkkkus; } wp_die("\x63\x61\x6e\x20\x6e\x6f\x74\x20\143\162\145\141\x74\x65\x20\151\x6e\163\x74\x61\156\143\x65\40\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\162\145\161\x75\145\163\164\x65\x64\x20\x63\x6c\x61\163\x73\40\x6e\157\164\40\x65\170\151\x73\x74\163\56"); goto qkeogqcekgawsgwe; aqakqumsuimkkkus: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qkeogqcekgawsgwe: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kewsuqsoqkyikkis; qseiiaweiykcwacy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kewsuqsoqkyikkis: return $owgumcsyqsamiemg; } }

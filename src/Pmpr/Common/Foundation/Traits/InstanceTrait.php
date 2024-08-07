<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b401a7b88a0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aeesioaqmuoeyoga; } try { if (class_exists($egkyssmuqcwaciya)) { goto ugasccoeokgqkses; } wp_die("\x63\x61\x6e\x20\x6e\157\x74\40\x63\x72\x65\x61\164\x65\x20\151\156\x73\164\141\156\x63\145\x20\146\x72\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\145\163\164\x65\x64\x20\143\154\x61\x73\163\40\x6e\157\164\x20\x65\x78\x69\163\164\163\56"); goto mmkooaugaqyqgyww; ugasccoeokgqkses: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mmkooaugaqyqgyww: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ikseiooeakoewqqu; aeesioaqmuoeyoga: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ikseiooeakoewqqu: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b415b03b4c7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aeesioaqmuoeyoga; } try { if (class_exists($egkyssmuqcwaciya)) { goto ugasccoeokgqkses; } wp_die("\143\x61\156\40\x6e\x6f\x74\x20\x63\162\x65\141\164\x65\x20\x69\x6e\163\164\x61\156\x63\145\40\146\162\157\x20{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\145\163\x74\145\x64\x20\x63\154\141\x73\163\x20\x6e\157\x74\x20\145\170\151\163\x74\163\56"); goto mmkooaugaqyqgyww; ugasccoeokgqkses: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mmkooaugaqyqgyww: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ikseiooeakoewqqu; aeesioaqmuoeyoga: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ikseiooeakoewqqu: return $owgumcsyqsamiemg; } }

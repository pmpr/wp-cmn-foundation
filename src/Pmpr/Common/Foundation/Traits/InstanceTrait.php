<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b40da17e832             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aeesioaqmuoeyoga; } try { if (class_exists($egkyssmuqcwaciya)) { goto ugasccoeokgqkses; } wp_die("\x63\141\156\40\x6e\x6f\164\40\x63\162\x65\x61\164\145\40\151\x6e\x73\164\141\156\143\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\162\x65\161\165\x65\163\x74\145\x64\40\143\154\x61\x73\163\x20\x6e\157\164\40\x65\x78\x69\x73\x74\x73\x2e"); goto mmkooaugaqyqgyww; ugasccoeokgqkses: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mmkooaugaqyqgyww: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ikseiooeakoewqqu; aeesioaqmuoeyoga: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ikseiooeakoewqqu: return $owgumcsyqsamiemg; } }

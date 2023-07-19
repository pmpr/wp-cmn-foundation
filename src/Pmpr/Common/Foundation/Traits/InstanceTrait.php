<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b7fa8ee3c80             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } try { if (class_exists($egkyssmuqcwaciya)) { goto uikqgasygyaeqcac; } wp_die("\x63\141\x6e\40\x6e\x6f\164\40\x63\x72\x65\x61\164\x65\40\151\x6e\163\x74\141\156\143\x65\40\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\x65\x73\x74\145\x64\x20\143\154\x61\163\163\40\156\x6f\164\x20\145\x78\x69\x73\164\x73\56"); goto gsiegqomuuccaoos; uikqgasygyaeqcac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gsiegqomuuccaoos: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; swqkecoseauacwio: return $owgumcsyqsamiemg; } }

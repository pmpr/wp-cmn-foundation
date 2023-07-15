<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b2ad39d8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } try { if (class_exists($egkyssmuqcwaciya)) { goto uikqgasygyaeqcac; } wp_die("\x63\x61\x6e\40\156\x6f\x74\x20\x63\162\x65\x61\x74\x65\40\x69\156\x73\164\141\156\143\x65\40\146\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\x65\163\x74\x65\x64\40\143\154\x61\x73\x73\x20\x6e\x6f\164\40\145\170\151\163\x74\x73\x2e"); goto gsiegqomuuccaoos; uikqgasygyaeqcac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gsiegqomuuccaoos: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; swqkecoseauacwio: return $owgumcsyqsamiemg; } }

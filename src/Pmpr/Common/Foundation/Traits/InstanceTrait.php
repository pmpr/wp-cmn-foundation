<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b788ef4d9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } try { if (class_exists($egkyssmuqcwaciya)) { goto uikqgasygyaeqcac; } wp_die("\143\141\156\x20\x6e\157\164\40\x63\162\145\141\164\145\40\x69\x6e\x73\x74\x61\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\145\163\x74\x65\x64\40\143\154\x61\x73\163\x20\x6e\x6f\164\x20\145\x78\x69\x73\164\163\x2e"); goto gsiegqomuuccaoos; uikqgasygyaeqcac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gsiegqomuuccaoos: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; swqkecoseauacwio: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bd0160360a6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto swqkecoseauacwio; } try { if (class_exists($egkyssmuqcwaciya)) { goto gsiegqomuuccaoos; } wp_die("\143\141\x6e\x20\x6e\x6f\x74\40\x63\162\x65\141\x74\x65\40\x69\156\x73\x74\x61\x6e\x63\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\x75\145\x73\164\145\x64\40\x63\x6c\141\x73\x73\40\x6e\157\164\x20\145\170\151\163\164\163\56"); goto kcieymewycqwegis; gsiegqomuuccaoos: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcieymewycqwegis: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ksiuacaiaiauywae; swqkecoseauacwio: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ksiuacaiaiauywae: return $owgumcsyqsamiemg; } }

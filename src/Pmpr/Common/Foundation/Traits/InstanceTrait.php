<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b299fa3c89f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } try { if (class_exists($egkyssmuqcwaciya)) { goto uikqgasygyaeqcac; } wp_die("\143\141\156\x20\156\x6f\164\x20\x63\162\145\x61\x74\145\40\x69\156\x73\164\x61\x6e\x63\145\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\161\x75\145\163\x74\145\144\40\143\154\x61\x73\x73\40\x6e\157\164\40\x65\170\x69\x73\x74\x73\x2e"); goto gsiegqomuuccaoos; uikqgasygyaeqcac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gsiegqomuuccaoos: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; swqkecoseauacwio: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b784ef9c783             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } try { if (class_exists($egkyssmuqcwaciya)) { goto uikqgasygyaeqcac; } wp_die("\x63\x61\156\x20\156\x6f\x74\x20\143\x72\145\x61\x74\x65\40\151\156\x73\x74\x61\x6e\x63\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\165\x65\163\164\x65\144\40\143\x6c\141\163\x73\40\x6e\157\164\x20\x65\170\151\x73\x74\163\x2e"); goto gsiegqomuuccaoos; uikqgasygyaeqcac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gsiegqomuuccaoos: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; swqkecoseauacwio: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64cbb6afe4c2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eskcocwimiseewmu; } try { if (class_exists($egkyssmuqcwaciya)) { goto scymgswieuyiqwmm; } wp_die("\143\141\x6e\40\156\157\x74\40\x63\x72\x65\141\164\145\x20\151\x6e\163\x74\141\156\x63\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\161\x75\x65\x73\164\145\144\x20\x63\154\x61\x73\163\40\x6e\157\x74\x20\145\x78\x69\163\164\x73\x2e"); goto gymqkieyuiawacwi; scymgswieuyiqwmm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gymqkieyuiawacwi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iymwycosumimggmu; eskcocwimiseewmu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iymwycosumimggmu: return $owgumcsyqsamiemg; } }

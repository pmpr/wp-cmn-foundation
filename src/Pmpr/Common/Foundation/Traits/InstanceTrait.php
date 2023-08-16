<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcd0bece3ce             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iymwycosumimggmu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gymqkieyuiawacwi; } wp_die("\143\141\x6e\x20\x6e\157\x74\40\143\x72\145\141\x74\x65\40\151\156\x73\x74\141\156\143\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\x65\163\164\145\144\40\x63\x6c\x61\163\163\40\156\x6f\164\x20\x65\170\x69\163\x74\x73\56"); goto eskcocwimiseewmu; gymqkieyuiawacwi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eskcocwimiseewmu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wmismwqqqagsomky; iymwycosumimggmu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wmismwqqqagsomky: return $owgumcsyqsamiemg; } }

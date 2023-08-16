<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcfa315b8c5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iymwycosumimggmu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gymqkieyuiawacwi; } wp_die("\143\141\x6e\x20\156\157\x74\40\x63\x72\145\141\x74\x65\x20\151\x6e\x73\x74\141\x6e\143\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\145\x73\x74\145\x64\40\143\x6c\141\163\163\40\x6e\x6f\x74\40\x65\x78\151\x73\164\x73\56"); goto eskcocwimiseewmu; gymqkieyuiawacwi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eskcocwimiseewmu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wmismwqqqagsomky; iymwycosumimggmu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wmismwqqqagsomky: return $owgumcsyqsamiemg; } }

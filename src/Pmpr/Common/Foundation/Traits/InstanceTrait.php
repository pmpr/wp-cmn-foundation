<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64cdf329ec7a2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eskcocwimiseewmu; } try { if (class_exists($egkyssmuqcwaciya)) { goto scymgswieuyiqwmm; } wp_die("\x63\141\x6e\x20\x6e\x6f\164\40\143\x72\x65\x61\x74\145\x20\151\x6e\x73\164\x61\x6e\x63\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\x65\x73\x74\145\144\40\x63\x6c\x61\163\x73\40\156\157\x74\x20\145\170\151\x73\164\x73\56"); goto gymqkieyuiawacwi; scymgswieuyiqwmm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gymqkieyuiawacwi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iymwycosumimggmu; eskcocwimiseewmu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iymwycosumimggmu: return $owgumcsyqsamiemg; } }

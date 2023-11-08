<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654bf14facd85             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } try { if (class_exists($egkyssmuqcwaciya)) { goto oieaoouoioamiqme; } wp_die("\x63\x61\156\40\x6e\x6f\164\40\x63\x72\145\x61\164\x65\40\151\x6e\163\164\x61\x6e\143\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\145\x73\164\x65\x64\40\143\154\141\x73\x73\x20\156\x6f\x74\40\x65\170\151\163\164\163\x2e"); goto eqysgewmuookykug; oieaoouoioamiqme: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eqysgewmuookykug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yeycmwocyqoegmaq: return $owgumcsyqsamiemg; } }

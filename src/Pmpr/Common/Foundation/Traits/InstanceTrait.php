<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a7b692763d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } try { if (class_exists($egkyssmuqcwaciya)) { goto oieaoouoioamiqme; } wp_die("\143\141\156\40\x6e\157\164\40\143\162\145\141\164\145\40\x69\x6e\163\x74\x61\156\143\x65\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\145\x71\165\145\163\x74\x65\x64\40\x63\154\x61\163\163\40\x6e\157\x74\x20\145\x78\x69\163\164\x73\56"); goto eqysgewmuookykug; oieaoouoioamiqme: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eqysgewmuookykug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yeycmwocyqoegmaq: return $owgumcsyqsamiemg; } }

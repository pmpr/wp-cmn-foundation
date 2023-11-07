<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a10d4af097             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } try { if (class_exists($egkyssmuqcwaciya)) { goto oieaoouoioamiqme; } wp_die("\143\141\x6e\40\156\157\x74\x20\143\x72\x65\x61\164\x65\x20\x69\156\x73\164\x61\156\x63\x65\40\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\145\163\164\145\x64\40\x63\x6c\141\x73\163\x20\x6e\157\164\x20\x65\170\x69\163\164\x73\56"); goto eqysgewmuookykug; oieaoouoioamiqme: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eqysgewmuookykug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yeycmwocyqoegmaq: return $owgumcsyqsamiemg; } }

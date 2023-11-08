<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654ad6215abfb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } try { if (class_exists($egkyssmuqcwaciya)) { goto oieaoouoioamiqme; } wp_die("\143\x61\x6e\40\x6e\x6f\x74\x20\143\x72\145\141\x74\x65\x20\151\156\x73\164\141\156\x63\x65\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\145\x73\164\145\x64\40\143\x6c\141\163\163\40\x6e\157\164\x20\x65\x78\151\x73\x74\163\56"); goto eqysgewmuookykug; oieaoouoioamiqme: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eqysgewmuookykug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yeycmwocyqoegmaq: return $owgumcsyqsamiemg; } }

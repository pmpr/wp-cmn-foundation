<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a75e50b42e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } try { if (class_exists($egkyssmuqcwaciya)) { goto oieaoouoioamiqme; } wp_die("\143\x61\156\40\x6e\157\x74\40\143\x72\x65\141\x74\x65\x20\x69\x6e\163\x74\141\156\x63\145\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\165\x65\x73\164\x65\144\x20\x63\x6c\141\x73\x73\40\x6e\157\164\x20\x65\x78\x69\163\164\163\56"); goto eqysgewmuookykug; oieaoouoioamiqme: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eqysgewmuookykug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yeycmwocyqoegmaq: return $owgumcsyqsamiemg; } }

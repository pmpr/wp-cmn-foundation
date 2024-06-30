<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66812ccd0a7ad             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wamgcqkaieummksu; } try { if (class_exists($egkyssmuqcwaciya)) { goto isaouwiaamimceeg; } wp_die("\x63\141\156\x20\156\157\x74\x20\143\162\145\141\x74\x65\x20\x69\156\x73\164\x61\x6e\x63\x65\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\162\x65\x71\165\145\x73\164\x65\144\40\143\x6c\x61\x73\163\40\x6e\x6f\x74\40\145\x78\x69\163\x74\163\x2e"); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcwyeqmysgqkoqcm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mwgaaiaswusakkaq; wamgcqkaieummksu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mwgaaiaswusakkaq: return $owgumcsyqsamiemg; } }

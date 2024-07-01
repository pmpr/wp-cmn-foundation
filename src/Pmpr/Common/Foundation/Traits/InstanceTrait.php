<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66827cae43f2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wamgcqkaieummksu; } try { if (class_exists($egkyssmuqcwaciya)) { goto isaouwiaamimceeg; } wp_die("\143\x61\156\x20\156\x6f\164\x20\x63\x72\x65\x61\164\x65\x20\151\x6e\163\x74\141\x6e\143\145\40\146\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\x65\163\x74\x65\144\40\143\154\141\x73\x73\x20\x6e\x6f\164\40\145\170\x69\x73\164\x73\x2e"); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcwyeqmysgqkoqcm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mwgaaiaswusakkaq; wamgcqkaieummksu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mwgaaiaswusakkaq: return $owgumcsyqsamiemg; } }

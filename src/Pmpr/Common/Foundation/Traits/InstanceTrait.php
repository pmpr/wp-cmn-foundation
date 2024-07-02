<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6683feed6b6ac             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wamgcqkaieummksu; } try { if (class_exists($egkyssmuqcwaciya)) { goto isaouwiaamimceeg; } wp_die("\x63\141\x6e\40\156\157\x74\x20\x63\x72\145\x61\x74\x65\40\x69\x6e\163\x74\x61\156\x63\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\x75\x65\x73\x74\145\144\x20\x63\154\141\163\x73\40\x6e\157\164\x20\x65\x78\x69\163\x74\163\x2e"); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcwyeqmysgqkoqcm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mwgaaiaswusakkaq; wamgcqkaieummksu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mwgaaiaswusakkaq: return $owgumcsyqsamiemg; } }

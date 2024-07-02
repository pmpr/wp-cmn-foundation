<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668421067646d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wamgcqkaieummksu; } try { if (class_exists($egkyssmuqcwaciya)) { goto isaouwiaamimceeg; } wp_die("\143\141\156\x20\x6e\x6f\164\40\x63\x72\145\x61\164\145\40\151\156\x73\x74\x61\156\x63\145\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\145\x73\164\145\144\x20\143\154\x61\x73\x73\x20\156\157\x74\x20\145\170\151\163\164\163\x2e"); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcwyeqmysgqkoqcm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mwgaaiaswusakkaq; wamgcqkaieummksu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mwgaaiaswusakkaq: return $owgumcsyqsamiemg; } }

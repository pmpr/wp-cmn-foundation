<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6678838402338             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wamgcqkaieummksu; } try { if (class_exists($egkyssmuqcwaciya)) { goto isaouwiaamimceeg; } wp_die("\143\141\156\x20\x6e\x6f\x74\x20\143\x72\x65\141\164\x65\40\x69\156\163\x74\141\x6e\143\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\145\161\165\x65\x73\x74\x65\x64\40\x63\x6c\x61\x73\x73\40\x6e\x6f\x74\x20\145\170\151\x73\164\x73\56"); goto kcwyeqmysgqkoqcm; isaouwiaamimceeg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kcwyeqmysgqkoqcm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mwgaaiaswusakkaq; wamgcqkaieummksu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mwgaaiaswusakkaq: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668682dc087fe             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcwyeqmysgqkoqcm; } wp_die("\x63\x61\156\40\156\157\x74\40\x63\162\145\x61\x74\145\40\151\x6e\x73\164\x61\156\x63\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\54\40\162\x65\x71\165\145\x73\x74\x65\144\x20\x63\154\141\x73\163\40\x6e\x6f\x74\40\145\170\x69\x73\164\x73\56"); goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wamgcqkaieummksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ugowqoisymsioeye: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668707cd96a67             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcwyeqmysgqkoqcm; } wp_die("\x63\141\156\x20\156\x6f\x74\40\x63\x72\x65\x61\x74\145\40\151\x6e\x73\x74\141\156\143\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\x65\161\x75\145\x73\x74\145\x64\40\x63\x6c\141\163\163\40\x6e\157\164\x20\x65\170\151\x73\164\x73\56"); goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wamgcqkaieummksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ugowqoisymsioeye: return $owgumcsyqsamiemg; } }

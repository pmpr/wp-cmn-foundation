<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6688fb4d374d1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcwyeqmysgqkoqcm; } wp_die("\x63\x61\x6e\x20\156\157\x74\x20\143\x72\x65\141\x74\145\40\x69\x6e\x73\164\x61\x6e\x63\145\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\x65\x73\164\x65\x64\x20\x63\154\141\x73\163\40\x6e\157\x74\x20\x65\170\151\163\164\x73\x2e"); goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wamgcqkaieummksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ugowqoisymsioeye: return $owgumcsyqsamiemg; } }

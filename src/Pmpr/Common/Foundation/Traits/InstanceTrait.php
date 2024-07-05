<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687509c8d906             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcwyeqmysgqkoqcm; } wp_die("\x63\x61\156\x20\156\157\164\x20\x63\162\145\141\x74\145\40\151\156\x73\x74\x61\156\x63\145\40\146\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\161\x75\145\x73\x74\145\144\40\143\154\x61\x73\163\40\156\x6f\x74\x20\145\x78\x69\x73\164\163\x2e"); goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wamgcqkaieummksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ugowqoisymsioeye: return $owgumcsyqsamiemg; } }

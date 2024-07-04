<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686678adfa89             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcwyeqmysgqkoqcm; } wp_die("\143\x61\156\40\156\157\164\x20\x63\162\x65\141\164\145\40\151\x6e\163\164\141\156\x63\x65\x20\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\40\x72\145\161\x75\x65\163\x74\x65\144\40\143\x6c\141\163\163\x20\x6e\157\x74\40\x65\x78\x69\163\164\163\x2e"); goto wamgcqkaieummksu; kcwyeqmysgqkoqcm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wamgcqkaieummksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ugowqoisymsioeye: return $owgumcsyqsamiemg; } }

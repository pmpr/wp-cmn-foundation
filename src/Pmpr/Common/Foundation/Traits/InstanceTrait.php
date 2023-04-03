<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a74ea46da2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugwoygiyecgymgw; } try { if (class_exists($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } wp_die("\x63\x61\x6e\40\x6e\157\164\x20\x63\162\145\141\164\145\40\151\156\x73\164\x61\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\x65\x73\164\145\x64\x20\143\154\x61\x73\163\x20\156\157\x74\x20\x65\170\151\x73\x74\x73\x2e"); goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gusgywuaimwooawc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acmgueaoaaweiqqu: return $owgumcsyqsamiemg; } }

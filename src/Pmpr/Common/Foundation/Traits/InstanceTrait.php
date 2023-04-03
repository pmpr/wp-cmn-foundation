<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac68c390f0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugwoygiyecgymgw; } try { if (class_exists($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } wp_die("\143\141\x6e\40\x6e\x6f\164\40\143\x72\145\x61\x74\x65\40\x69\156\x73\164\141\x6e\x63\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\145\x71\165\145\x73\164\145\x64\x20\143\154\141\163\163\x20\156\157\164\40\x65\x78\151\163\x74\163\x2e"); goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gusgywuaimwooawc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acmgueaoaaweiqqu: return $owgumcsyqsamiemg; } }

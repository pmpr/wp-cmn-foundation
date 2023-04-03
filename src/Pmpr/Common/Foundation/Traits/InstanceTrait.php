<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a8a824614f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugwoygiyecgymgw; } try { if (class_exists($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } wp_die("\143\x61\x6e\x20\156\157\164\x20\x63\x72\x65\x61\x74\145\x20\x69\x6e\x73\164\141\156\x63\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\163\x74\145\x64\40\x63\154\141\x73\x73\x20\x6e\157\x74\x20\145\170\151\x73\x74\x73\56"); goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gusgywuaimwooawc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acmgueaoaaweiqqu: return $owgumcsyqsamiemg; } }

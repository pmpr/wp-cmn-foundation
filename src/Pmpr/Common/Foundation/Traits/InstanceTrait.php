<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a7a3ec9dbe             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugwoygiyecgymgw; } try { if (class_exists($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } wp_die("\143\141\x6e\40\156\x6f\x74\40\x63\162\x65\x61\x74\145\x20\x69\x6e\163\164\x61\x6e\143\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\x75\145\x73\x74\145\x64\x20\143\x6c\141\163\x73\x20\x6e\x6f\x74\x20\145\170\x69\x73\164\163\x2e"); goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gusgywuaimwooawc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acmgueaoaaweiqqu: return $owgumcsyqsamiemg; } }

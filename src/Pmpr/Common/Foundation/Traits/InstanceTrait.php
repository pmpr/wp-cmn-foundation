<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a628fc7d76             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugwoygiyecgymgw; } try { if (class_exists($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } wp_die("\x63\x61\x6e\x20\x6e\157\164\40\143\x72\x65\141\x74\145\40\151\x6e\x73\164\141\156\143\x65\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\x75\x65\163\x74\x65\144\40\x63\x6c\141\163\163\40\156\157\x74\x20\x65\170\151\x73\164\x73\56"); goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gusgywuaimwooawc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acmgueaoaaweiqqu: return $owgumcsyqsamiemg; } }

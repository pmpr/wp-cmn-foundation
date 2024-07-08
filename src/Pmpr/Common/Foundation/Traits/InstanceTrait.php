<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b79bd636             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gooqkmwgsmseuiwq; } try { if (class_exists($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } wp_die("\143\141\156\x20\156\x6f\x74\40\x63\162\x65\141\164\145\x20\151\x6e\163\164\x61\x6e\143\x65\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\x73\x74\x65\144\40\143\154\x61\163\163\40\x6e\x6f\164\40\145\x78\151\x73\x74\x73\x2e"); goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugowqoisymsioeye: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oeosugomyqyekmuq; gooqkmwgsmseuiwq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oeosugomyqyekmuq: return $owgumcsyqsamiemg; } }

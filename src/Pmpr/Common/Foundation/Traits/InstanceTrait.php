<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dab8c1d99f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gooqkmwgsmseuiwq; } try { if (class_exists($egkyssmuqcwaciya)) { goto mwgaaiaswusakkaq; } wp_die("\x63\141\x6e\x20\156\x6f\164\40\x63\162\x65\x61\x74\145\40\x69\x6e\163\164\141\x6e\x63\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\x75\x65\x73\164\x65\x64\40\x63\x6c\x61\x73\x73\40\x6e\x6f\x74\x20\x65\x78\x69\x73\164\163\x2e"); goto ugowqoisymsioeye; mwgaaiaswusakkaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugowqoisymsioeye: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oeosugomyqyekmuq; gooqkmwgsmseuiwq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oeosugomyqyekmuq: return $owgumcsyqsamiemg; } }

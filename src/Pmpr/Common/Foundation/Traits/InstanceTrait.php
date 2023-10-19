<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6530ee0ae0c70             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwauyogieqaqueyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksiskiqygouakumc; } wp_die("\x63\141\156\40\156\x6f\x74\x20\143\x72\x65\x61\164\x65\40\x69\x6e\x73\x74\x61\156\143\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\145\x73\164\x65\144\40\143\154\x61\163\163\x20\x6e\157\x74\x20\x65\x78\x69\x73\164\x73\x2e"); goto gksysyaaaaeasgmg; ksiskiqygouakumc: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gksysyaaaaeasgmg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto suycymikusukkyio; gwauyogieqaqueyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; suycymikusukkyio: return $owgumcsyqsamiemg; } }

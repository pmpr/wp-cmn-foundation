<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653108ce5641e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mkseiiygswgckuyi; } try { if (class_exists($egkyssmuqcwaciya)) { goto gwauyogieqaqueyu; } wp_die("\x63\x61\x6e\40\156\157\x74\x20\x63\x72\x65\x61\x74\x65\40\151\x6e\x73\x74\141\156\x63\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\161\x75\145\163\x74\x65\x64\x20\143\154\x61\x73\x73\x20\156\157\164\40\145\x78\151\x73\x74\x73\56"); goto suycymikusukkyio; gwauyogieqaqueyu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; suycymikusukkyio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ogksggygiqgccsgs; mkseiiygswgckuyi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ogksggygiqgccsgs: return $owgumcsyqsamiemg; } }

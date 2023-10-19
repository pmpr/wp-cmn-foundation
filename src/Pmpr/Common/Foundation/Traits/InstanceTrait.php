<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6531217057f43             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mkseiiygswgckuyi; } try { if (class_exists($egkyssmuqcwaciya)) { goto gwauyogieqaqueyu; } wp_die("\143\x61\x6e\40\156\x6f\x74\x20\143\x72\x65\x61\x74\x65\x20\x69\x6e\x73\x74\x61\x6e\x63\145\40\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\x65\163\x74\145\x64\x20\143\x6c\141\163\x73\40\156\157\x74\x20\x65\170\x69\x73\164\163\56"); goto suycymikusukkyio; gwauyogieqaqueyu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; suycymikusukkyio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ogksggygiqgccsgs; mkseiiygswgckuyi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ogksggygiqgccsgs: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6533a350c4f2c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suycymikusukkyio; } try { if (class_exists($egkyssmuqcwaciya)) { goto gksysyaaaaeasgmg; } wp_die("\143\141\156\40\156\x6f\164\x20\143\162\145\x61\164\x65\40\x69\156\163\x74\141\156\143\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\165\145\x73\164\145\x64\x20\x63\x6c\141\x73\163\40\x6e\x6f\x74\x20\145\170\x69\163\164\163\56"); goto gwauyogieqaqueyu; gksysyaaaaeasgmg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gwauyogieqaqueyu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mkseiiygswgckuyi; suycymikusukkyio: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mkseiiygswgckuyi: return $owgumcsyqsamiemg; } }

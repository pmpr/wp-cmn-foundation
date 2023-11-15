<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554b2009bcf5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto cgamwegmkwmmsoow; } try { if (class_exists($egkyssmuqcwaciya)) { goto eeiseascemqaocmo; } wp_die("\x63\141\156\40\x6e\157\164\40\x63\162\145\141\164\145\40\x69\156\x73\x74\x61\x6e\143\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\145\x73\x74\145\x64\40\x63\x6c\141\x73\163\40\156\x6f\164\40\145\170\151\x73\164\x73\x2e"); goto iukkuoewgiwcoukw; eeiseascemqaocmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iukkuoewgiwcoukw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto faeciyigcmyieesm; cgamwegmkwmmsoow: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; faeciyigcmyieesm: return $owgumcsyqsamiemg; } }

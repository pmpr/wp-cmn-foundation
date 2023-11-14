<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65533aaec3c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto cgamwegmkwmmsoow; } try { if (class_exists($egkyssmuqcwaciya)) { goto eeiseascemqaocmo; } wp_die("\x63\141\156\40\156\x6f\164\x20\143\x72\x65\141\x74\x65\40\x69\156\x73\164\141\x6e\x63\145\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\x75\145\163\x74\x65\x64\40\x63\x6c\141\163\x73\x20\156\x6f\164\40\x65\x78\151\x73\164\x73\x2e"); goto iukkuoewgiwcoukw; eeiseascemqaocmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iukkuoewgiwcoukw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto faeciyigcmyieesm; cgamwegmkwmmsoow: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; faeciyigcmyieesm: return $owgumcsyqsamiemg; } }

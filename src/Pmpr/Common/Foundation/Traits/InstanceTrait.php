<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65536707cb9cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto cgamwegmkwmmsoow; } try { if (class_exists($egkyssmuqcwaciya)) { goto eeiseascemqaocmo; } wp_die("\143\x61\156\x20\156\157\164\40\x63\x72\145\x61\164\x65\40\151\156\163\164\x61\156\143\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\145\163\164\145\144\x20\143\x6c\x61\163\163\40\x6e\x6f\x74\x20\x65\x78\151\163\164\x73\56"); goto iukkuoewgiwcoukw; eeiseascemqaocmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iukkuoewgiwcoukw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto faeciyigcmyieesm; cgamwegmkwmmsoow: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; faeciyigcmyieesm: return $owgumcsyqsamiemg; } }

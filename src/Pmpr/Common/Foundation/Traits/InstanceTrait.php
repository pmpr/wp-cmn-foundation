<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554a82d799f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto cgamwegmkwmmsoow; } try { if (class_exists($egkyssmuqcwaciya)) { goto eeiseascemqaocmo; } wp_die("\x63\x61\156\40\x6e\157\x74\x20\143\x72\145\x61\x74\x65\40\151\156\163\164\x61\156\143\145\x20\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\x65\163\164\145\144\x20\x63\154\x61\x73\163\40\156\157\x74\40\x65\170\151\163\164\163\x2e"); goto iukkuoewgiwcoukw; eeiseascemqaocmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iukkuoewgiwcoukw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto faeciyigcmyieesm; cgamwegmkwmmsoow: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; faeciyigcmyieesm: return $owgumcsyqsamiemg; } }

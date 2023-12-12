<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657886ea347f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oykskeiyeqqmqgaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto mycwwkyauoegscee; } wp_die("\x63\x61\x6e\x20\156\157\x74\40\143\x72\145\141\x74\145\x20\x69\x6e\163\164\x61\x6e\143\145\x20\x66\162\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\145\x73\x74\145\x64\x20\143\154\141\163\x73\40\x6e\157\164\x20\145\x78\x69\x73\x74\163\56"); goto oyysyqcickwskiwq; mycwwkyauoegscee: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oyysyqcickwskiwq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eoweieoeouuiesea; oykskeiyeqqmqgaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eoweieoeouuiesea: return $owgumcsyqsamiemg; } }

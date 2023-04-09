<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432aa1c2adcc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ubsguocwequeoicm; } try { if (class_exists($egkyssmuqcwaciya)) { goto meywqwweoiaqwwiu; } wp_die("\x63\141\x6e\40\156\x6f\x74\40\143\x72\145\x61\164\x65\x20\x69\x6e\163\164\x61\x6e\143\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\165\x65\163\164\145\x64\x20\143\154\x61\163\163\x20\x6e\x6f\164\x20\x65\170\x69\x73\x74\163\56"); goto umseiamyiyksuyim; meywqwweoiaqwwiu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umseiamyiyksuyim: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakegewkccyyeuwc; ubsguocwequeoicm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakegewkccyyeuwc: return $owgumcsyqsamiemg; } }

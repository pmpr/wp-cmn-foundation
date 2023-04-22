<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644402fcab147             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aewqyqksisqayska; } try { if (class_exists($egkyssmuqcwaciya)) { goto omeukkwiesseygwy; } wp_die("\x63\141\x6e\40\156\x6f\x74\40\143\162\x65\x61\164\x65\40\151\156\x73\164\x61\156\x63\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\165\145\x73\164\x65\x64\40\x63\x6c\141\163\163\40\x6e\157\164\40\145\x78\x69\163\164\x73\56"); goto gewecumqwgcuwikk; omeukkwiesseygwy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gewecumqwgcuwikk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ayegqigqcsuoqess; aewqyqksisqayska: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ayegqigqcsuoqess: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644534841fd66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aewqyqksisqayska; } try { if (class_exists($egkyssmuqcwaciya)) { goto omeukkwiesseygwy; } wp_die("\x63\x61\156\x20\x6e\x6f\164\x20\143\x72\145\141\164\145\40\151\156\163\x74\x61\156\x63\x65\40\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\145\x73\164\x65\x64\x20\x63\154\141\163\x73\x20\x6e\157\164\x20\x65\170\x69\163\x74\x73\56"); goto gewecumqwgcuwikk; omeukkwiesseygwy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gewecumqwgcuwikk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ayegqigqcsuoqess; aewqyqksisqayska: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ayegqigqcsuoqess: return $owgumcsyqsamiemg; } }

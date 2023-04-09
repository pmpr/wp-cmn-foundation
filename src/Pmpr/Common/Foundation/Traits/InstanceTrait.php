<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432bc716b635             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ubsguocwequeoicm; } try { if (class_exists($egkyssmuqcwaciya)) { goto meywqwweoiaqwwiu; } wp_die("\x63\141\x6e\x20\x6e\x6f\164\x20\143\x72\145\141\164\x65\40\151\x6e\x73\164\141\156\x63\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\x65\x73\164\x65\144\x20\x63\154\x61\x73\163\x20\156\157\x74\x20\x65\170\151\x73\164\163\56"); goto umseiamyiyksuyim; meywqwweoiaqwwiu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umseiamyiyksuyim: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakegewkccyyeuwc; ubsguocwequeoicm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakegewkccyyeuwc: return $owgumcsyqsamiemg; } }

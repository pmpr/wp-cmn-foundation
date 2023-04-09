<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b13b888d6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ubsguocwequeoicm; } try { if (class_exists($egkyssmuqcwaciya)) { goto meywqwweoiaqwwiu; } wp_die("\143\141\x6e\40\x6e\157\164\x20\143\x72\x65\141\x74\145\x20\x69\x6e\x73\164\141\156\143\145\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\x71\x75\x65\163\164\145\x64\x20\143\154\x61\x73\x73\40\156\x6f\x74\40\145\x78\151\x73\x74\163\56"); goto umseiamyiyksuyim; meywqwweoiaqwwiu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umseiamyiyksuyim: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakegewkccyyeuwc; ubsguocwequeoicm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakegewkccyyeuwc: return $owgumcsyqsamiemg; } }

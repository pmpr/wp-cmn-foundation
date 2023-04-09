<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432beb117511             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ubsguocwequeoicm; } try { if (class_exists($egkyssmuqcwaciya)) { goto meywqwweoiaqwwiu; } wp_die("\143\141\156\x20\156\x6f\x74\x20\143\162\x65\x61\x74\145\x20\151\156\x73\164\141\156\x63\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\x65\x73\164\145\144\40\x63\154\x61\163\163\x20\156\x6f\x74\x20\x65\170\x69\x73\x74\163\56"); goto umseiamyiyksuyim; meywqwweoiaqwwiu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umseiamyiyksuyim: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakegewkccyyeuwc; ubsguocwequeoicm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakegewkccyyeuwc: return $owgumcsyqsamiemg; } }

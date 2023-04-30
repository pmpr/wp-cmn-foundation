<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644e7898157f4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qiiigwkqeoewsuwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto esikeyqyuikmaiek; } wp_die("\143\141\156\x20\x6e\157\164\40\x63\x72\145\141\164\145\40\x69\x6e\x73\164\141\x6e\x63\145\40\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\x75\145\163\x74\145\x64\x20\143\154\x61\163\x73\x20\156\x6f\164\40\145\170\x69\163\164\x73\x2e"); goto okkmcocqokkskasy; esikeyqyuikmaiek: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okkmcocqokkskasy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; esaqcqqwuussiiwo: return $owgumcsyqsamiemg; } }

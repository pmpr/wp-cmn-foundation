<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645b55b56129e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qiiigwkqeoewsuwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto esikeyqyuikmaiek; } wp_die("\143\141\156\40\x6e\x6f\x74\x20\x63\x72\145\x61\x74\x65\40\x69\156\163\164\x61\156\143\x65\40\x66\x72\157\40{$egkyssmuqcwaciya}\54\40\x72\x65\161\x75\145\x73\164\145\x64\40\143\154\x61\x73\163\40\x6e\x6f\x74\40\145\x78\x69\x73\164\x73\56"); goto okkmcocqokkskasy; esikeyqyuikmaiek: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okkmcocqokkskasy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; esaqcqqwuussiiwo: return $owgumcsyqsamiemg; } }

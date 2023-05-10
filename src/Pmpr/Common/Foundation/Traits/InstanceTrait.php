<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645b588b1c7bc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qiiigwkqeoewsuwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto esikeyqyuikmaiek; } wp_die("\x63\141\x6e\40\156\x6f\x74\40\x63\x72\145\x61\164\145\x20\x69\x6e\x73\164\x61\x6e\x63\x65\40\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\145\x73\x74\145\144\x20\143\x6c\x61\x73\x73\x20\156\x6f\164\40\x65\x78\x69\x73\x74\163\x2e"); goto okkmcocqokkskasy; esikeyqyuikmaiek: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okkmcocqokkskasy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; esaqcqqwuussiiwo: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6457943204913             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qiiigwkqeoewsuwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto esikeyqyuikmaiek; } wp_die("\x63\141\156\40\156\x6f\x74\x20\x63\162\145\x61\x74\x65\x20\151\x6e\163\x74\x61\156\143\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\162\145\161\165\x65\163\164\x65\x64\x20\x63\154\141\x73\163\x20\x6e\157\x74\x20\145\170\x69\163\164\163\x2e"); goto okkmcocqokkskasy; esikeyqyuikmaiek: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okkmcocqokkskasy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; esaqcqqwuussiiwo: return $owgumcsyqsamiemg; } }

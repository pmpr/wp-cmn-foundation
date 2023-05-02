<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645116792e298             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qiiigwkqeoewsuwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto esikeyqyuikmaiek; } wp_die("\x63\x61\156\40\156\157\x74\x20\x63\x72\x65\x61\164\145\40\x69\x6e\163\x74\141\156\x63\145\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\163\x74\145\144\40\x63\x6c\x61\163\163\x20\156\x6f\x74\40\145\x78\151\163\x74\x73\56"); goto okkmcocqokkskasy; esikeyqyuikmaiek: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; okkmcocqokkskasy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; esaqcqqwuussiiwo: return $owgumcsyqsamiemg; } }

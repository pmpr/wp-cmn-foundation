<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6474902fed27f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ugwqwcgoswkkwcee; } try { if (class_exists($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } wp_die("\x63\x61\x6e\40\156\157\x74\x20\x63\162\x65\141\x74\x65\40\x69\156\163\x74\141\156\143\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\x65\x71\165\145\163\164\x65\144\40\143\154\141\x73\x73\x20\156\157\164\40\x65\x78\x69\x73\164\x73\x2e"); goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cigcsyiesymkuywu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kgigsakiwsqqioim: return $owgumcsyqsamiemg; } }

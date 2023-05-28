<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64730c5e7e474             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ugwqwcgoswkkwcee; } try { if (class_exists($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } wp_die("\143\141\x6e\x20\156\x6f\164\40\143\162\x65\141\x74\x65\40\x69\156\163\164\x61\x6e\x63\x65\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\x65\x73\164\x65\x64\40\x63\154\x61\x73\163\40\156\x6f\164\x20\x65\x78\151\163\x74\163\x2e"); goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cigcsyiesymkuywu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kgigsakiwsqqioim: return $owgumcsyqsamiemg; } }

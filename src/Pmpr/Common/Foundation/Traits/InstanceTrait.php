<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64733d2b6de2c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ugwqwcgoswkkwcee; } try { if (class_exists($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } wp_die("\x63\x61\156\x20\x6e\x6f\164\x20\143\x72\x65\x61\164\x65\40\151\x6e\x73\x74\141\156\x63\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\163\164\145\144\40\x63\x6c\x61\x73\163\40\x6e\157\164\40\145\x78\151\x73\x74\163\x2e"); goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cigcsyiesymkuywu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kgigsakiwsqqioim: return $owgumcsyqsamiemg; } }

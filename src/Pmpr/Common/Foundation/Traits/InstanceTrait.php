<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646e287f9b7c2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ugwqwcgoswkkwcee; } try { if (class_exists($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } wp_die("\143\141\156\40\156\157\164\x20\x63\x72\x65\x61\x74\145\x20\151\x6e\x73\x74\x61\x6e\143\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\x65\x73\x74\x65\144\40\143\154\141\x73\163\x20\x6e\157\x74\x20\x65\170\151\163\164\163\x2e"); goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cigcsyiesymkuywu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kgigsakiwsqqioim: return $owgumcsyqsamiemg; } }

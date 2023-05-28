<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64733b1238622             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ugwqwcgoswkkwcee; } try { if (class_exists($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } wp_die("\143\141\156\x20\156\157\x74\40\143\162\145\x61\164\x65\40\151\x6e\163\x74\x61\156\143\145\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\145\163\164\x65\144\x20\143\x6c\141\163\163\x20\x6e\x6f\164\40\145\170\x69\x73\x74\163\56"); goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cigcsyiesymkuywu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kgigsakiwsqqioim: return $owgumcsyqsamiemg; } }

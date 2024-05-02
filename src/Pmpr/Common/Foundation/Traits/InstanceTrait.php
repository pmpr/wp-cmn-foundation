<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66339ce56ba44             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oysgkcoiouaikyys; } try { if (class_exists($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } wp_die("\x63\141\x6e\40\156\x6f\164\x20\x63\162\145\x61\164\x65\40\x69\156\163\x74\x61\x6e\x63\x65\x20\x66\162\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\163\x74\145\x64\40\143\154\x61\x73\x73\x20\156\x6f\164\40\145\170\151\163\164\163\56"); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aiegomwmomwugkaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gikmiimsmmugmewi; oysgkcoiouaikyys: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gikmiimsmmugmewi: return $owgumcsyqsamiemg; } }

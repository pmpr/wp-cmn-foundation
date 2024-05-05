<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637d2d16186c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oysgkcoiouaikyys; } try { if (class_exists($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } wp_die("\143\141\156\40\x6e\x6f\164\x20\143\162\145\x61\x74\x65\40\x69\156\163\x74\x61\156\143\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\165\145\163\x74\x65\144\x20\143\x6c\141\x73\163\x20\156\157\x74\40\145\170\151\163\164\163\x2e"); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aiegomwmomwugkaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gikmiimsmmugmewi; oysgkcoiouaikyys: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gikmiimsmmugmewi: return $owgumcsyqsamiemg; } }

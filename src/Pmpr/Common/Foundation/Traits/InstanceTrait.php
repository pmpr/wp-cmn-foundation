<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630fafa1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oysgkcoiouaikyys; } try { if (class_exists($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } wp_die("\143\x61\x6e\40\x6e\x6f\164\40\143\x72\145\141\x74\x65\40\151\156\163\164\141\156\x63\145\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\145\x73\164\x65\144\x20\143\154\141\163\x73\40\x6e\157\164\x20\x65\x78\151\163\x74\163\x2e"); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aiegomwmomwugkaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gikmiimsmmugmewi; oysgkcoiouaikyys: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gikmiimsmmugmewi: return $owgumcsyqsamiemg; } }

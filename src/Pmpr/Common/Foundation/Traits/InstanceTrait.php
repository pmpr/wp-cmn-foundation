<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6631f3cdaf20f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oysgkcoiouaikyys; } try { if (class_exists($egkyssmuqcwaciya)) { goto gmwcswqmcyogosia; } wp_die("\143\x61\x6e\40\x6e\157\x74\x20\143\162\145\141\x74\x65\40\151\x6e\163\164\141\x6e\143\145\40\146\x72\157\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\x75\145\163\164\x65\x64\x20\x63\154\x61\163\163\x20\156\x6f\x74\x20\x65\x78\x69\163\x74\163\56"); goto aiegomwmomwugkaa; gmwcswqmcyogosia: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aiegomwmomwugkaa: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gikmiimsmmugmewi; oysgkcoiouaikyys: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gikmiimsmmugmewi: return $owgumcsyqsamiemg; } }

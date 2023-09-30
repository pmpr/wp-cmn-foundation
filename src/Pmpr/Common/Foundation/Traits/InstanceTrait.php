<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651831595d0db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ossuaoyigeyoisgo; } try { if (class_exists($egkyssmuqcwaciya)) { goto gouiyyuwcgwgsyis; } wp_die("\143\x61\x6e\40\156\157\164\x20\143\162\145\x61\164\145\x20\151\156\163\164\x61\x6e\x63\x65\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\x65\x73\x74\x65\144\40\143\x6c\x61\x73\163\x20\156\157\x74\40\145\170\151\163\x74\163\56"); goto egmkgyusyyyaqcyu; gouiyyuwcgwgsyis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; egmkgyusyyyaqcyu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto essyuyoweqekagsi; ossuaoyigeyoisgo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; essyuyoweqekagsi: return $owgumcsyqsamiemg; } }

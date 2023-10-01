<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65197b7ad20fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ossuaoyigeyoisgo; } try { if (class_exists($egkyssmuqcwaciya)) { goto gouiyyuwcgwgsyis; } wp_die("\143\x61\156\40\x6e\157\164\40\x63\162\x65\x61\164\x65\40\x69\156\x73\164\x61\x6e\x63\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\163\164\145\144\x20\x63\154\141\x73\163\40\x6e\157\x74\x20\145\170\x69\163\x74\x73\x2e"); goto egmkgyusyyyaqcyu; gouiyyuwcgwgsyis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; egmkgyusyyyaqcyu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto essyuyoweqekagsi; ossuaoyigeyoisgo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; essyuyoweqekagsi: return $owgumcsyqsamiemg; } }

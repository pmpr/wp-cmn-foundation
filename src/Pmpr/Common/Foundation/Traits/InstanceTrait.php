<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66080baef0c26             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto omgkuuyoiugcymmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto uiqycwuommmmuowy; } wp_die("\143\141\156\40\x6e\157\164\40\x63\162\145\x61\x74\145\40\x69\156\x73\x74\x61\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\x65\x73\x74\x65\x64\40\x63\154\x61\163\x73\40\x6e\x6f\x74\40\145\x78\x69\163\164\x73\56"); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moqcomgmwiamuomq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kumuckkicykgwqqm; omgkuuyoiugcymmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kumuckkicykgwqqm: return $owgumcsyqsamiemg; } }

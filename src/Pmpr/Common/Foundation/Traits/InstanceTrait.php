<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65fee406e227f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto omgkuuyoiugcymmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto uiqycwuommmmuowy; } wp_die("\143\141\x6e\x20\x6e\157\x74\40\x63\x72\x65\x61\x74\145\x20\x69\156\x73\164\x61\156\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\x65\163\x74\x65\x64\x20\x63\x6c\141\163\163\x20\x6e\x6f\x74\40\145\170\x69\163\164\163\x2e"); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moqcomgmwiamuomq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kumuckkicykgwqqm; omgkuuyoiugcymmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kumuckkicykgwqqm: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ff085d9018d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto omgkuuyoiugcymmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto uiqycwuommmmuowy; } wp_die("\143\141\x6e\40\156\157\164\x20\x63\x72\145\x61\x74\145\x20\x69\156\163\164\x61\x6e\143\145\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\165\145\163\164\x65\144\40\143\154\x61\163\163\40\x6e\157\164\40\145\170\x69\163\164\x73\x2e"); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moqcomgmwiamuomq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kumuckkicykgwqqm; omgkuuyoiugcymmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kumuckkicykgwqqm: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65fd7defcd6f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto omgkuuyoiugcymmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto uiqycwuommmmuowy; } wp_die("\x63\141\x6e\40\x6e\x6f\x74\x20\143\x72\x65\141\164\145\40\x69\156\x73\x74\141\156\x63\x65\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\x65\163\x74\145\x64\40\143\154\x61\163\x73\40\x6e\157\164\x20\145\x78\x69\x73\x74\163\x2e"); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moqcomgmwiamuomq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kumuckkicykgwqqm; omgkuuyoiugcymmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kumuckkicykgwqqm: return $owgumcsyqsamiemg; } }

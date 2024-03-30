<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6607f7878f09f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto omgkuuyoiugcymmy; } try { if (class_exists($egkyssmuqcwaciya)) { goto uiqycwuommmmuowy; } wp_die("\x63\x61\x6e\x20\x6e\157\x74\x20\143\162\x65\x61\164\x65\40\x69\x6e\163\164\x61\156\x63\x65\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\145\x71\165\145\x73\164\x65\144\40\x63\x6c\x61\163\163\40\x6e\x6f\x74\40\145\x78\151\x73\164\x73\x2e"); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; moqcomgmwiamuomq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kumuckkicykgwqqm; omgkuuyoiugcymmy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kumuckkicykgwqqm: return $owgumcsyqsamiemg; } }

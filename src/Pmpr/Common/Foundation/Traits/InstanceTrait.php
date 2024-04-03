<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dbf68a5a6d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto moqcomgmwiamuomq; } try { if (class_exists($egkyssmuqcwaciya)) { goto iqamwyasyoqsugeu; } wp_die("\143\141\x6e\x20\x6e\x6f\164\x20\x63\x72\145\141\164\x65\40\151\x6e\x73\164\x61\x6e\143\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\x65\x73\x74\145\x64\40\x63\154\141\x73\x73\x20\x6e\157\x74\40\x65\x78\x69\163\164\163\56"); goto uiqycwuommmmuowy; iqamwyasyoqsugeu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uiqycwuommmmuowy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; omgkuuyoiugcymmy: return $owgumcsyqsamiemg; } }

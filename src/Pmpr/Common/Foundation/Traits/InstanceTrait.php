<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dc37b26b22             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto moqcomgmwiamuomq; } try { if (class_exists($egkyssmuqcwaciya)) { goto iqamwyasyoqsugeu; } wp_die("\x63\141\x6e\x20\156\157\x74\x20\x63\162\x65\141\x74\145\40\x69\x6e\163\x74\141\156\x63\145\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\145\x73\x74\145\x64\x20\x63\154\141\x73\163\40\x6e\157\164\x20\x65\x78\x69\163\x74\163\x2e"); goto uiqycwuommmmuowy; iqamwyasyoqsugeu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uiqycwuommmmuowy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; omgkuuyoiugcymmy: return $owgumcsyqsamiemg; } }

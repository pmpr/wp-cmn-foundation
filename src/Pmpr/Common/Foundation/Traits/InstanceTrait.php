<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65709cce278e5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uugioomkywkukaki; } try { if (class_exists($egkyssmuqcwaciya)) { goto wqoysqscuiyuqsai; } wp_die("\143\141\x6e\x20\156\157\x74\40\x63\162\x65\x61\x74\145\40\151\156\x73\164\141\x6e\x63\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\165\145\x73\x74\x65\x64\40\143\154\x61\163\x73\x20\x6e\157\x74\40\x65\170\151\163\164\x73\x2e"); goto gimuoawsewokwcky; wqoysqscuiyuqsai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; gimuoawsewokwcky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqeieoywwiqsqwke; uugioomkywkukaki: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqeieoywwiqsqwke: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65622cf540ce2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqoysqscuiyuqsai; } try { if (class_exists($egkyssmuqcwaciya)) { goto oassyegiwmwsmiwg; } wp_die("\143\x61\x6e\40\156\x6f\x74\40\143\162\145\x61\x74\x65\40\151\x6e\x73\x74\141\x6e\143\x65\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\145\x73\x74\x65\x64\40\143\x6c\x61\x73\x73\40\x6e\x6f\x74\x20\145\x78\x69\163\x74\163\x2e"); goto ikmqssocqayyakge; oassyegiwmwsmiwg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikmqssocqayyakge: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gimuoawsewokwcky; wqoysqscuiyuqsai: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gimuoawsewokwcky: return $owgumcsyqsamiemg; } }

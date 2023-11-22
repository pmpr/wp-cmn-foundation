<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655dfeabddd0c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqoysqscuiyuqsai; } try { if (class_exists($egkyssmuqcwaciya)) { goto oassyegiwmwsmiwg; } wp_die("\x63\141\x6e\40\156\x6f\164\x20\143\162\x65\x61\164\145\x20\151\156\163\164\x61\x6e\x63\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\x65\x71\x75\x65\163\164\145\144\x20\143\x6c\x61\x73\163\x20\156\157\164\40\145\x78\151\163\164\x73\56"); goto ikmqssocqayyakge; oassyegiwmwsmiwg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikmqssocqayyakge: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gimuoawsewokwcky; wqoysqscuiyuqsai: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gimuoawsewokwcky: return $owgumcsyqsamiemg; } }

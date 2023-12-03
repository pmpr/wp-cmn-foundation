<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             656c9d111e521             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wqoysqscuiyuqsai; } try { if (class_exists($egkyssmuqcwaciya)) { goto oassyegiwmwsmiwg; } wp_die("\143\141\156\40\156\x6f\164\x20\143\x72\x65\141\x74\145\40\151\156\163\164\141\x6e\x63\x65\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\165\x65\x73\164\145\x64\40\143\154\141\x73\x73\40\156\157\164\40\x65\170\x69\x73\x74\163\56"); goto ikmqssocqayyakge; oassyegiwmwsmiwg: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ikmqssocqayyakge: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gimuoawsewokwcky; wqoysqscuiyuqsai: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gimuoawsewokwcky: return $owgumcsyqsamiemg; } }

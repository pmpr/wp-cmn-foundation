<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661cd12b2710d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wwcigociomqoaoqi; } try { if (class_exists($egkyssmuqcwaciya)) { goto iaeyawwyysiausks; } wp_die("\143\x61\156\x20\156\x6f\164\x20\x63\x72\145\x61\164\x65\x20\151\156\163\x74\141\x6e\143\145\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\145\x73\x74\x65\x64\x20\143\x6c\x61\x73\163\40\156\157\x74\x20\x65\170\x69\x73\164\x73\x2e"); goto ksqyowwamkygmwak; iaeyawwyysiausks: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ksqyowwamkygmwak: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yccwykccuswcswwg; wwcigociomqoaoqi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yccwykccuswcswwg: return $owgumcsyqsamiemg; } }

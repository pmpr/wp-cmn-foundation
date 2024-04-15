<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661cfd76efa9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wwcigociomqoaoqi; } try { if (class_exists($egkyssmuqcwaciya)) { goto iaeyawwyysiausks; } wp_die("\143\x61\156\40\156\157\164\40\143\x72\x65\x61\164\x65\x20\151\x6e\x73\164\x61\156\143\x65\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\x75\x65\163\164\145\144\x20\143\154\x61\x73\x73\x20\x6e\157\164\x20\x65\x78\151\x73\164\x73\56"); goto ksqyowwamkygmwak; iaeyawwyysiausks: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ksqyowwamkygmwak: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yccwykccuswcswwg; wwcigociomqoaoqi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yccwykccuswcswwg: return $owgumcsyqsamiemg; } }

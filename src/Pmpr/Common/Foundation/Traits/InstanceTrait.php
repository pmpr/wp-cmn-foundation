<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66165045ef72c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wwcigociomqoaoqi; } try { if (class_exists($egkyssmuqcwaciya)) { goto iaeyawwyysiausks; } wp_die("\143\141\156\40\x6e\x6f\x74\x20\x63\x72\x65\141\164\145\x20\151\156\x73\164\x61\x6e\143\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\145\x73\x74\145\144\40\143\x6c\141\163\163\x20\x6e\x6f\x74\x20\x65\170\151\163\164\x73\56"); goto ksqyowwamkygmwak; iaeyawwyysiausks: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ksqyowwamkygmwak: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yccwykccuswcswwg; wwcigociomqoaoqi: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yccwykccuswcswwg: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e7712c63c0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yccwykccuswcswwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksqyowwamkygmwak; } wp_die("\143\141\156\x20\156\x6f\x74\x20\x63\162\x65\141\164\x65\40\x69\x6e\x73\164\141\x6e\143\x65\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\x75\x65\163\164\x65\144\x20\143\x6c\x61\163\163\x20\x6e\x6f\x74\x20\145\170\x69\x73\x74\163\56"); goto wwcigociomqoaoqi; ksqyowwamkygmwak: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcigociomqoaoqi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssagawackwyimseu; yccwykccuswcswwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssagawackwyimseu: return $owgumcsyqsamiemg; } }

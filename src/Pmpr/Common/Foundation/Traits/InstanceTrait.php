<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e7a51a0cc2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yccwykccuswcswwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksqyowwamkygmwak; } wp_die("\143\x61\156\40\x6e\x6f\x74\x20\143\x72\145\141\164\145\40\151\x6e\x73\164\x61\x6e\143\145\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\165\x65\x73\164\x65\144\x20\x63\154\x61\x73\x73\40\156\157\x74\x20\x65\170\151\163\164\x73\56"); goto wwcigociomqoaoqi; ksqyowwamkygmwak: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcigociomqoaoqi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssagawackwyimseu; yccwykccuswcswwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssagawackwyimseu: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e7bb13eba7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yccwykccuswcswwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksqyowwamkygmwak; } wp_die("\x63\141\x6e\40\x6e\x6f\164\x20\x63\162\145\141\164\x65\x20\151\156\163\x74\141\156\143\145\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\165\145\x73\x74\x65\x64\40\x63\x6c\141\x73\163\40\x6e\x6f\x74\40\145\170\x69\163\x74\x73\56"); goto wwcigociomqoaoqi; ksqyowwamkygmwak: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcigociomqoaoqi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssagawackwyimseu; yccwykccuswcswwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssagawackwyimseu: return $owgumcsyqsamiemg; } }

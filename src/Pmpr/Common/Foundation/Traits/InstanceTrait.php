<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f8da76305b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yccwykccuswcswwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksqyowwamkygmwak; } wp_die("\143\141\x6e\40\x6e\x6f\164\x20\x63\x72\x65\141\x74\145\40\x69\156\x73\x74\141\x6e\x63\145\x20\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\x65\x73\x74\145\144\x20\143\x6c\141\x73\163\x20\156\157\x74\x20\145\170\151\163\x74\x73\56"); goto wwcigociomqoaoqi; ksqyowwamkygmwak: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcigociomqoaoqi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssagawackwyimseu; yccwykccuswcswwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssagawackwyimseu: return $owgumcsyqsamiemg; } }

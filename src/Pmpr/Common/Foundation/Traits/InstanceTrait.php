<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e1d4f314eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yccwykccuswcswwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ksqyowwamkygmwak; } wp_die("\143\141\156\40\156\157\164\x20\143\x72\x65\x61\164\145\40\151\156\163\164\141\x6e\143\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\x75\x65\163\x74\x65\x64\x20\x63\x6c\x61\163\163\40\156\157\x74\40\x65\x78\151\x73\164\x73\56"); goto wwcigociomqoaoqi; ksqyowwamkygmwak: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcigociomqoaoqi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssagawackwyimseu; yccwykccuswcswwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssagawackwyimseu: return $owgumcsyqsamiemg; } }

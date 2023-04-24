<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64464454174ab             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } try { if (class_exists($egkyssmuqcwaciya)) { goto aewqyqksisqayska; } wp_die("\x63\141\156\40\156\x6f\164\x20\x63\162\145\141\x74\145\x20\151\156\163\164\x61\x6e\x63\145\x20\146\x72\157\40{$egkyssmuqcwaciya}\54\x20\162\145\161\x75\x65\163\164\145\144\40\143\x6c\x61\x73\x73\x20\156\x6f\164\x20\145\170\x69\x73\164\x73\56"); goto ayegqigqcsuoqess; aewqyqksisqayska: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ayegqigqcsuoqess: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; muooqqykkmuismwk: return $owgumcsyqsamiemg; } }

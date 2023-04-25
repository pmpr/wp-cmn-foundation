<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644780f1967b5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto auucmoqsmsouecag; } try { if (class_exists($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } wp_die("\143\141\156\x20\156\157\164\40\x63\162\145\x61\x74\145\40\151\156\163\x74\x61\x6e\x63\x65\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\x65\163\x74\x65\144\x20\143\x6c\141\x73\163\x20\x6e\x6f\164\x20\145\x78\151\163\x74\x73\x2e"); goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; muooqqykkmuismwk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto euiiaygickweagiw; auucmoqsmsouecag: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; euiiaygickweagiw: return $owgumcsyqsamiemg; } }

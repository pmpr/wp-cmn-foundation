<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6447dd2d6d44e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto auucmoqsmsouecag; } try { if (class_exists($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } wp_die("\143\141\x6e\40\156\157\164\40\143\x72\x65\x61\x74\145\40\151\x6e\163\x74\x61\156\143\145\40\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\145\163\x74\x65\144\x20\x63\154\x61\x73\x73\x20\156\157\x74\x20\145\x78\x69\163\164\163\x2e"); goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; muooqqykkmuismwk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto euiiaygickweagiw; auucmoqsmsouecag: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; euiiaygickweagiw: return $owgumcsyqsamiemg; } }

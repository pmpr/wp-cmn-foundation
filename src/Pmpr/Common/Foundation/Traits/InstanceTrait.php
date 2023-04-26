<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6448ec8d7fe9e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto auucmoqsmsouecag; } try { if (class_exists($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } wp_die("\x63\141\156\40\156\x6f\x74\40\x63\x72\145\x61\x74\x65\x20\x69\156\x73\164\x61\156\143\x65\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\165\145\x73\164\x65\144\40\x63\154\141\x73\163\40\156\x6f\x74\x20\145\x78\151\x73\164\x73\x2e"); goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; muooqqykkmuismwk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto euiiaygickweagiw; auucmoqsmsouecag: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; euiiaygickweagiw: return $owgumcsyqsamiemg; } }

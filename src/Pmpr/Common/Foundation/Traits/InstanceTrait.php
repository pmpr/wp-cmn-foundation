<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644783315822d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto auucmoqsmsouecag; } try { if (class_exists($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } wp_die("\143\141\156\40\x6e\157\164\40\143\x72\145\141\x74\x65\x20\151\156\163\x74\x61\156\143\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\x65\x73\x74\x65\x64\x20\x63\154\141\x73\163\40\156\x6f\164\x20\145\170\x69\163\164\x73\56"); goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; muooqqykkmuismwk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto euiiaygickweagiw; auucmoqsmsouecag: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; euiiaygickweagiw: return $owgumcsyqsamiemg; } }

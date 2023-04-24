<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6446a7988c5a4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto auucmoqsmsouecag; } try { if (class_exists($egkyssmuqcwaciya)) { goto scqwioawomamygwa; } wp_die("\x63\x61\x6e\x20\x6e\157\x74\40\x63\162\145\141\x74\145\x20\151\156\x73\164\x61\x6e\143\145\40\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\x65\163\164\145\x64\40\x63\x6c\x61\163\163\40\156\157\x74\x20\x65\170\151\x73\164\x73\56"); goto muooqqykkmuismwk; scqwioawomamygwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; muooqqykkmuismwk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto euiiaygickweagiw; auucmoqsmsouecag: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; euiiaygickweagiw: return $owgumcsyqsamiemg; } }

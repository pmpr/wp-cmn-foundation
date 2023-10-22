<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6534ff49d5f34             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uokamacqkkiqccku; } try { if (class_exists($egkyssmuqcwaciya)) { goto pkueqgmoqweqmssi; } wp_die("\143\141\x6e\40\156\157\164\x20\x63\162\x65\x61\164\x65\x20\x69\156\x73\164\141\x6e\143\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\145\x73\164\x65\x64\40\143\154\x61\x73\163\x20\x6e\157\x74\x20\x65\170\151\x73\x74\x73\x2e"); goto niiosgywwiykokkq; pkueqgmoqweqmssi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; niiosgywwiykokkq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmocwmmyommsqkky; uokamacqkkiqccku: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmocwmmyommsqkky: return $owgumcsyqsamiemg; } }

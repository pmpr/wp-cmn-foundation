<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6534f9ce1d715             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto niiosgywwiykokkq; } try { if (class_exists($egkyssmuqcwaciya)) { goto wccqiqisegqowemu; } wp_die("\143\141\156\x20\156\x6f\x74\40\143\x72\x65\x61\x74\x65\x20\151\x6e\163\x74\x61\x6e\143\145\40\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\x75\145\163\164\x65\144\x20\x63\154\141\x73\163\40\156\x6f\x74\x20\x65\x78\151\x73\x74\x73\x2e"); goto pkueqgmoqweqmssi; wccqiqisegqowemu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; pkueqgmoqweqmssi: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uokamacqkkiqccku; niiosgywwiykokkq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uokamacqkkiqccku: return $owgumcsyqsamiemg; } }

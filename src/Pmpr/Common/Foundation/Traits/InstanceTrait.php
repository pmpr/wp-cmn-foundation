<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f2a487f65c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kucqcqeesaiacekm; } try { if (class_exists($egkyssmuqcwaciya)) { goto acisycocoswkekik; } wp_die("\x63\x61\x6e\40\x6e\157\x74\x20\143\162\x65\141\x74\145\x20\151\x6e\163\x74\141\156\143\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\145\x73\x74\145\144\40\143\154\x61\163\163\40\x6e\x6f\164\40\x65\x78\x69\163\164\163\56"); goto aaiymmkqmocgakei; acisycocoswkekik: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aaiymmkqmocgakei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cewyaqiqmmwmauce; kucqcqeesaiacekm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cewyaqiqmmwmauce: return $owgumcsyqsamiemg; } }

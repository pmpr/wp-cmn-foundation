<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c0bb2cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kucqcqeesaiacekm; } try { if (class_exists($egkyssmuqcwaciya)) { goto acisycocoswkekik; } wp_die("\x63\141\x6e\x20\156\157\x74\x20\143\162\145\141\x74\x65\40\151\x6e\x73\164\x61\x6e\143\x65\40\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\145\x73\x74\x65\144\x20\143\154\141\x73\163\40\x6e\157\x74\40\x65\x78\151\x73\x74\x73\56"); goto aaiymmkqmocgakei; acisycocoswkekik: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aaiymmkqmocgakei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cewyaqiqmmwmauce; kucqcqeesaiacekm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cewyaqiqmmwmauce: return $owgumcsyqsamiemg; } }

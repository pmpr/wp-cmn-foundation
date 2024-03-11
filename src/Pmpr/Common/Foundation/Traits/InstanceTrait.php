<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ef31aeeb33c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eekeksysqeuoskoo; } try { if (class_exists($egkyssmuqcwaciya)) { goto kiwiesucugwoiuum; } wp_die("\x63\x61\156\40\156\157\164\40\x63\x72\x65\x61\164\x65\x20\x69\x6e\x73\164\141\x6e\x63\145\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\165\145\x73\164\x65\144\x20\143\x6c\x61\x73\x73\40\156\157\x74\40\x65\170\x69\x73\x74\163\56"); goto cmagycousakeeaei; kiwiesucugwoiuum: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cmagycousakeeaei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto okemsmmeceoeaswi; eekeksysqeuoskoo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; okemsmmeceoeaswi: return $owgumcsyqsamiemg; } }

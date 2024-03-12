<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65f00b402ca7e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eekeksysqeuoskoo; } try { if (class_exists($egkyssmuqcwaciya)) { goto kiwiesucugwoiuum; } wp_die("\143\x61\156\40\156\157\x74\40\x63\162\x65\x61\164\x65\40\x69\x6e\x73\x74\x61\x6e\x63\x65\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\x65\x73\164\145\144\40\143\x6c\x61\x73\x73\x20\156\157\x74\40\x65\x78\151\163\164\x73\x2e"); goto cmagycousakeeaei; kiwiesucugwoiuum: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cmagycousakeeaei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto okemsmmeceoeaswi; eekeksysqeuoskoo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; okemsmmeceoeaswi: return $owgumcsyqsamiemg; } }

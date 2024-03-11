<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ef357e86046             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eekeksysqeuoskoo; } try { if (class_exists($egkyssmuqcwaciya)) { goto kiwiesucugwoiuum; } wp_die("\143\x61\x6e\40\x6e\157\164\40\143\x72\145\x61\x74\145\40\x69\156\163\164\141\x6e\143\145\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\145\163\x74\145\144\x20\143\x6c\141\x73\163\x20\156\157\x74\40\x65\x78\x69\x73\164\x73\x2e"); goto cmagycousakeeaei; kiwiesucugwoiuum: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cmagycousakeeaei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto okemsmmeceoeaswi; eekeksysqeuoskoo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; okemsmmeceoeaswi: return $owgumcsyqsamiemg; } }

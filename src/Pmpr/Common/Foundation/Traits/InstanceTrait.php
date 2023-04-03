<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5cc3c612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto skaayekywasksoug; } try { if (class_exists($egkyssmuqcwaciya)) { goto uqiekawkwcegsumy; } wp_die("\x63\141\x6e\x20\156\x6f\164\40\x63\162\x65\x61\164\x65\40\151\x6e\163\164\141\x6e\x63\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\x71\165\x65\163\164\145\x64\x20\x63\x6c\141\x73\163\x20\156\x6f\164\x20\145\x78\x69\163\x74\x73\x2e"); goto kgikoagqwkuocesg; uqiekawkwcegsumy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kgikoagqwkuocesg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gkoyqgogsukuowqi; skaayekywasksoug: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gkoyqgogsukuowqi: return $owgumcsyqsamiemg; } }

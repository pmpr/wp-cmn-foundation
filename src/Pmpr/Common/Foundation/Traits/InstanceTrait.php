<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64342785a8bf3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto csouyaoieqauoyww; } try { if (class_exists($egkyssmuqcwaciya)) { goto gikgmkgewswggoou; } wp_die("\x63\x61\156\40\x6e\157\164\x20\x63\x72\145\141\164\x65\x20\x69\x6e\x73\x74\141\156\x63\x65\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\x65\x73\x74\145\144\40\x63\154\141\163\x73\x20\x6e\x6f\164\x20\145\x78\151\163\x74\163\56"); goto wiqmeiaaqqauqeme; gikgmkgewswggoou: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wiqmeiaaqqauqeme: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ewyqasqeksiqauuw; csouyaoieqauoyww: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ewyqasqeksiqauuw: return $owgumcsyqsamiemg; } }

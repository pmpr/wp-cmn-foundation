<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6436cb9ec208c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto csouyaoieqauoyww; } try { if (class_exists($egkyssmuqcwaciya)) { goto gikgmkgewswggoou; } wp_die("\x63\x61\156\x20\156\x6f\x74\x20\143\x72\x65\141\164\145\x20\151\156\163\164\141\156\143\x65\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\x65\x73\164\x65\144\40\143\154\x61\163\x73\40\156\157\164\40\145\170\151\163\x74\x73\56"); goto wiqmeiaaqqauqeme; gikgmkgewswggoou: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wiqmeiaaqqauqeme: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ewyqasqeksiqauuw; csouyaoieqauoyww: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ewyqasqeksiqauuw: return $owgumcsyqsamiemg; } }

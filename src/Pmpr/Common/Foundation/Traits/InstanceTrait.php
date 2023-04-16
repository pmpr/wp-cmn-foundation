<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643baf2730c00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eyoiasswoyuyuuco; } try { if (class_exists($egkyssmuqcwaciya)) { goto csouyaoieqauoyww; } wp_die("\x63\141\x6e\x20\x6e\x6f\x74\40\143\162\x65\141\164\145\x20\x69\156\x73\164\141\x6e\x63\x65\40\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\x65\163\x74\145\x64\40\x63\x6c\x61\163\163\x20\156\157\x74\40\x65\170\x69\x73\x74\x73\x2e"); goto ewyqasqeksiqauuw; csouyaoieqauoyww: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ewyqasqeksiqauuw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ssocqyqwsyyekiik; eyoiasswoyuyuuco: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ssocqyqwsyyekiik: return $owgumcsyqsamiemg; } }

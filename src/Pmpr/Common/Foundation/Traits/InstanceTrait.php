<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655528d270d17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto syycscyugcgsquwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyiigmyweugmgckw; } wp_die("\143\141\156\x20\x6e\x6f\x74\x20\143\x72\x65\141\x74\145\x20\151\x6e\163\164\x61\x6e\x63\145\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\165\145\163\x74\x65\x64\x20\143\x6c\141\x73\x73\x20\x6e\x6f\164\x20\145\170\151\163\x74\x73\56"); goto mgkgeuqasqcaimou; eyiigmyweugmgckw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mgkgeuqasqcaimou: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wcsicmaoskwcaqou; syycscyugcgsquwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wcsicmaoskwcaqou: return $owgumcsyqsamiemg; } }

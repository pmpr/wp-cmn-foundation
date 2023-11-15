<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65552c57724f2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto syycscyugcgsquwm; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyiigmyweugmgckw; } wp_die("\x63\141\x6e\40\x6e\157\x74\40\143\x72\x65\141\164\x65\40\x69\156\163\x74\141\x6e\143\x65\x20\146\x72\157\40{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\145\163\x74\x65\x64\x20\143\x6c\x61\x73\x73\40\x6e\157\164\40\x65\x78\x69\x73\x74\x73\56"); goto mgkgeuqasqcaimou; eyiigmyweugmgckw: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mgkgeuqasqcaimou: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wcsicmaoskwcaqou; syycscyugcgsquwm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wcsicmaoskwcaqou: return $owgumcsyqsamiemg; } }

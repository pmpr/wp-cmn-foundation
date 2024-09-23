<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d819504ee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto yoikmmqgsuecwqse; } try { if (class_exists($egkyssmuqcwaciya)) { goto yumwmakewcuceeeq; } wp_die("\x63\x61\x6e\x20\156\157\164\40\x63\x72\145\141\164\x65\40\151\x6e\163\164\x61\156\x63\145\x20\x66\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\162\145\161\x75\145\163\164\x65\x64\x20\x63\x6c\141\163\x73\40\156\157\164\x20\145\x78\x69\163\x74\x73\56"); goto iksqmycekaokseuk; yumwmakewcuceeeq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iksqmycekaokseuk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto emwgmewoyckawiaa; yoikmmqgsuecwqse: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; emwgmewoyckawiaa: return $owgumcsyqsamiemg; } }

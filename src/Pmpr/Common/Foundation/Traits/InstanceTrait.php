<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae85ba078b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto ioqaysioauoiookm; } try { if (class_exists($egkyssmuqcwaciya)) { goto icguisyymukwkoac; } wp_die("\x63\x61\x6e\x20\x6e\157\x74\x20\x63\162\145\141\164\x65\x20\x69\156\x73\x74\x61\156\x63\145\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\165\x65\x73\164\145\x64\x20\x63\x6c\x61\163\x73\x20\x6e\x6f\164\40\x65\170\151\163\164\163\56"); goto wwcyucesakwqmigu; icguisyymukwkoac: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wwcyucesakwqmigu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto caeywemyokumoaki; ioqaysioauoiookm: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; caeywemyokumoaki: return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d8c7809438d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto msqmakqaiawgqeau; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmukeceewgmekoae; } wp_die("\143\x61\x6e\40\x6e\157\164\40\x63\162\x65\x61\164\x65\40\x69\156\163\164\x61\156\143\x65\x20\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\165\x65\163\164\x65\144\40\143\x6c\141\x73\163\x20\156\x6f\x74\40\x65\170\151\163\x74\x73\56"); goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; somsmcmoyaiiwuyk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iuukukcykqykisaa; msqmakqaiawgqeau: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iuukukcykqykisaa: return $owgumcsyqsamiemg; } }

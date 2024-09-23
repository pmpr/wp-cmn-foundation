<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2c87384d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto qyauskeceyuommay; } try { if (class_exists($egkyssmuqcwaciya)) { goto waekkoqkywowucqm; } wp_die("\x63\141\156\40\x6e\157\164\40\143\162\x65\141\164\x65\40\151\156\x73\164\x61\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\x65\163\x74\x65\x64\x20\143\x6c\x61\163\x73\40\156\157\x74\x20\x65\170\x69\x73\164\163\x2e"); goto iyyoksuqkyayycyo; waekkoqkywowucqm: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto skuiqymemkkmcasa; qyauskeceyuommay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; skuiqymemkkmcasa: return $owgumcsyqsamiemg; } }

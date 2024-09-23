<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16aff73538             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto gquwcimccausouey; } try { if (class_exists($egkyssmuqcwaciya)) { goto skuiqymemkkmcasa; } wp_die("\x63\x61\x6e\x20\156\x6f\164\40\143\x72\x65\x61\164\145\40\151\x6e\163\x74\141\x6e\143\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\145\163\164\145\144\x20\x63\154\x61\x73\x73\40\156\x6f\x74\40\145\170\151\x73\x74\163\x2e"); goto mgqoggoasugsqoqm; skuiqymemkkmcasa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mgqoggoasugsqoqm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kwocuyyugaqsicqy; gquwcimccausouey: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kwocuyyugaqsicqy: return $owgumcsyqsamiemg; } }

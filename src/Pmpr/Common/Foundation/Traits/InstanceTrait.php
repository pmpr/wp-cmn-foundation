<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671269d4e15e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\x63\x61\x6e\40\x6e\157\164\40\x63\x72\145\141\164\145\x20\151\x6e\x73\x74\x61\x6e\x63\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\161\165\145\x73\x74\145\144\x20\x63\154\141\163\x73\40\156\x6f\164\40\145\170\151\x73\164\163\x2e"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }

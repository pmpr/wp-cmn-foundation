<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574b80d243             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; } else { try { if (class_exists($egkyssmuqcwaciya)) { $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; } else { wp_die("\x63\141\156\x20\156\x6f\x74\x20\143\162\145\x61\164\x65\x20\x69\x6e\163\164\x61\x6e\143\x65\x20\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\x75\145\163\164\x65\x64\x20\143\x6c\x61\163\163\40\x6e\x6f\x74\40\145\170\x69\x73\164\163\56"); } } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } } return $owgumcsyqsamiemg; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c5dc5dae             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aakueiomkcyiiows; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygqwqqiowseokqyy; } wp_die("\x63\141\x6e\x20\156\157\164\x20\143\x72\145\x61\164\145\40\151\156\163\x74\141\156\143\x65\x20\x66\x72\157\40{$egkyssmuqcwaciya}\54\40\162\x65\161\165\x65\163\x74\x65\x64\x20\143\x6c\x61\163\x73\40\156\157\164\x20\145\x78\x69\163\164\163\56"); goto cckaqseuwsokgqky; ygqwqqiowseokqyy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cckaqseuwsokgqky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iauiowaaqsooooco; aakueiomkcyiiows: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauiowaaqsooooco: return $owgumcsyqsamiemg; } }

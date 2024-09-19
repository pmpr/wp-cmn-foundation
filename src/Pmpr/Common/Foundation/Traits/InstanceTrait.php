<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf63ece5a6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto cckaqseuwsokgqky; } try { if (class_exists($egkyssmuqcwaciya)) { goto cmqcmgwesykwwosy; } wp_die("\143\141\156\x20\156\x6f\164\x20\x63\x72\145\141\x74\145\x20\x69\156\163\164\x61\156\143\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\162\145\161\165\145\163\164\x65\144\40\x63\154\141\x73\x73\x20\x6e\x6f\x74\40\x65\x78\x69\x73\164\x73\56"); goto ygqwqqiowseokqyy; cmqcmgwesykwwosy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygqwqqiowseokqyy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakueiomkcyiiows; cckaqseuwsokgqky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakueiomkcyiiows: return $owgumcsyqsamiemg; } }

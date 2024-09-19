<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe0a571651             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto cckaqseuwsokgqky; } try { if (class_exists($egkyssmuqcwaciya)) { goto cmqcmgwesykwwosy; } wp_die("\143\141\156\40\156\x6f\164\x20\x63\162\x65\x61\x74\x65\x20\x69\156\x73\x74\x61\156\143\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\54\40\x72\x65\x71\x75\145\x73\x74\145\144\x20\x63\x6c\141\x73\163\40\x6e\157\164\x20\145\170\151\x73\x74\163\56"); goto ygqwqqiowseokqyy; cmqcmgwesykwwosy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ygqwqqiowseokqyy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aakueiomkcyiiows; cckaqseuwsokgqky: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aakueiomkcyiiows: return $owgumcsyqsamiemg; } }

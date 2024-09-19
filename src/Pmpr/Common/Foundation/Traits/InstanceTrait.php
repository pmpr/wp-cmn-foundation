<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08eec428e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto aakueiomkcyiiows; } try { if (class_exists($egkyssmuqcwaciya)) { goto ygqwqqiowseokqyy; } wp_die("\x63\141\x6e\40\x6e\157\164\x20\x63\x72\145\x61\x74\x65\40\x69\x6e\x73\164\141\x6e\x63\x65\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\163\164\x65\144\40\x63\x6c\x61\163\163\40\x6e\x6f\164\40\x65\170\x69\x73\x74\x73\x2e"); goto cckaqseuwsokgqky; ygqwqqiowseokqyy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cckaqseuwsokgqky: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iauiowaaqsooooco; aakueiomkcyiiows: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauiowaaqsooooco: return $owgumcsyqsamiemg; } }

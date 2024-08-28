<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ced35949c89             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto eowskcomgqqwcyui; } try { if (class_exists($egkyssmuqcwaciya)) { goto qwuwcoeiguyqekuy; } wp_die("\143\141\x6e\x20\156\157\x74\x20\143\x72\145\x61\x74\x65\40\x69\156\163\164\x61\156\143\x65\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\165\x65\163\x74\145\x64\x20\143\x6c\141\x73\163\x20\156\157\x74\x20\145\170\151\163\x74\163\x2e"); goto osskmmsaekmgemwc; qwuwcoeiguyqekuy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; osskmmsaekmgemwc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wococciimesuaeys; eowskcomgqqwcyui: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wococciimesuaeys: return $owgumcsyqsamiemg; } }

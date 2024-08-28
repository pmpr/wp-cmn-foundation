<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ced75618540             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto eowskcomgqqwcyui; } try { if (class_exists($egkyssmuqcwaciya)) { goto qwuwcoeiguyqekuy; } wp_die("\x63\x61\x6e\x20\x6e\x6f\164\x20\x63\x72\145\141\x74\145\x20\151\156\x73\164\x61\156\143\x65\40\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\x75\145\x73\x74\145\x64\x20\143\x6c\x61\x73\163\x20\x6e\x6f\x74\40\145\x78\x69\x73\164\x73\56"); goto osskmmsaekmgemwc; qwuwcoeiguyqekuy: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; osskmmsaekmgemwc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wococciimesuaeys; eowskcomgqqwcyui: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wococciimesuaeys: return $owgumcsyqsamiemg; } }

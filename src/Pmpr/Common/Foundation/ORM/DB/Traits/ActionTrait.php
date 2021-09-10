<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB\Traits;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

trait ActionTrait
{
    
    protected array $viewActions = [];
    
    private function sqgeouqsaemqsaoc() : array
    {
        return $this->viewActions;
    }
    
    public function wqaqomooqiiaeoew() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), 'add', []);
    }
    
    private function oecasaciwaammwsa(?string $qqomumygoacsmsie, ?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'page-title-action');
        $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = ['wwgucssaecqekuek' => $wwgucssaecqekuek, 'meqocwsecsywiiqs' => $meqocwsecsywiiqs];
        return $this;
    }
    
    public function kecqycomykimqiim(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa('add', $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function easkmgsoqaqeyayo() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), 'index', []);
    }
    
    public function icyamyikwyaaoqya(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa('index', $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function nwuqkwkgugcqsgyq() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), 'edit', []);
    }
    
    public function qeiuscikgegousks(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa('edit', $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
}

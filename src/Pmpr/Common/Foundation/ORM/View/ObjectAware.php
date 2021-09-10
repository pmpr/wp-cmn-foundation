<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Manipulate\ManipulateServer;

class ObjectAware extends View
{
    
    protected ?int $id = 0;
    
    protected ?object $object = null;
    
    public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function mwikyscisascoeea() : int
    {
        return $this->id;
    }
    
    public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self
    {
        $this->object = $mksyucucyswaukig;
        return $this;
    }
    
    public function imgymusqgccqsqqq() : ?object
    {
        return $this->object;
    }
    public function mqyuagguukgcoeka()
    {
        parent::mqyuagguukgcoeka();
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        if ($aokagokqyuysuksm) {
            
            $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
            
            if (!$this->mwikyscisascoeea()) {
                wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
                exit;
            }
            $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
            
            if (!$this->imgymusqgccqsqqq()) {
                wp_die(__('You attempted to edit an item that doesn\'t exist. Perhaps it was deleted?', PR__CMN__FOUNDATION));
            }
        }
    }
}

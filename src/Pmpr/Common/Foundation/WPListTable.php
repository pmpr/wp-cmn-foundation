<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;
use Pmpr\Common\Foundation\Traits\TranslateTrait;
use WP_List_Table;

class WPListTable extends WP_List_Table implements ConstantInterface
{
    use TranslateTrait, ComponentTrait, TemplateTrait, HookTrait;
    
    protected int $count = 0;
    
    protected int $perPage = 10;
    
    public function wasgwsogmuquqeaa() : array
    {
        return $this->items;
    }
    
    public function __construct($ywmkwiwkosakssii = [])
    {
        $this->perPage = ManipulateSetting::omkaowmygoqwsywq();
        parent::__construct($ywmkwiwkosakssii);
    }
    
    public function ygmcsmegcysyeoss() : int
    {
        return $this->count;
    }
    
    public function sooksiiooeywkyaq() : int
    {
        return $this->perPage;
    }
    
    public function prepare_items()
    {
        goto mqumsuwmsseemikc;
        qeqioikysugyqquk:
        $this->set_pagination_args(["\160\145\x72\x5f\160\141\x67\145" => $weyoqgcesqgeusiu, "\x74\x6f\x74\x61\x6c\137\x70\141\147\145\163" => ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu), "\x74\157\164\141\x6c\x5f\x69\164\145\x6d\x73" => $gaeqamemwmwsyukm]);
        goto wkukmciiegoeqsek;
        mqumsuwmsseemikc:
        $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss();
        goto jsusmokimcoyuqyo;
        jsusmokimcoyuqyo:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto qeqioikysugyqquk;
        wkukmciiegoeqsek:
        $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()];
        goto qaaeeyysicyecigm;
        qaaeeyysicyecigm:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto sooowgiqueeqkuey;
        sooowgiqueeqkuey:
        $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss();
        goto eukgyqwumyckyiyo;
        waqsouimkiiiagis:
        $this->set_pagination_args(["\x70\145\x72\x5f\x70\141\147\145" => $weyoqgcesqgeusiu, "\164\157\x74\141\154\x5f\x70\141\x67\x65\163" => ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu), "\164\x6f\164\x61\154\x5f\x69\x74\x65\155\x73" => $gaeqamemwmwsyukm]);
        goto iegswgukwsmcasgs;
        iegswgukwsmcasgs:
        $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()];
        goto msqiqgiuckeymuae;
        eukgyqwumyckyiyo:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto waqsouimkiiiagis;
        msqiqgiuckeymuae:
    }
}

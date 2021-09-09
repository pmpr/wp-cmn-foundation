<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto yagasegkqgewyyaw;
        mswmikumamcegkss:
        $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()];
        goto wsgcoqwuiemsesck;
        yukmsawciwkeuusw:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto agycsismscqmqgck;
        agycsismscqmqgck:
        $this->set_pagination_args(["\x70\145\x72\137\160\141\147\145" => $weyoqgcesqgeusiu, "\164\157\164\141\x6c\137\x70\x61\x67\145\163" => ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu), "\164\157\x74\x61\154\x5f\x69\164\145\x6d\x73" => $gaeqamemwmwsyukm]);
        goto mswmikumamcegkss;
        yagasegkqgewyyaw:
        $gaeqamemwmwsyukm = $this->ygmcsmegcysyeoss();
        goto yukmsawciwkeuusw;
        wsgcoqwuiemsesck:
    }
}

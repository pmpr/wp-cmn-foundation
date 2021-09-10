<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Notice;

class Index extends View
{
    
    protected int $perPage = 20;
    
    protected ?ListTable $listTable = null;
    
    public function waeasakssissiuqg() : ListTable
    {
        if (!$this->listTable) {
            $this->listTable = new ListTable($this->mgogaykgkoogasim());
        }
        return $this->listTable;
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("get_{$this->aakmagwggmkoiiyu()}_list_table");
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, 'uoeemokeowaiecco']);
        parent::wigskegsqequoeks();
    }
    public function render()
    {
        parent::render();
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $oyeykykuuckycumg = $this->waeasakssissiuqg();
        $oyeykykuuckycumg->prepare_items();
        echo $this->iuygowkemiiwqmiw('index', ['name' => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), 'title' => $this->mmqossqsksemasay('plural_name'), 'table' => $this->waeasakssissiuqg(), 'items' => $this->oyeskqayoscwciem()->uikgwcuascgeissw('search_items'), 'actions' => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), 'filter_name' => $meywaqqsugaoeyys->aakiaoueckoiyoew(), 'filter_value' => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        $ksaameoqigiaoigg = false;
        $uamcoiueqaamsqma = '';
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie('delete_item', $aokagokqyuysuksm)) {
                $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
                if (!$ksaameoqigiaoigg) {
                    $uamcoiueqaamsqma = __('Error in deleting.', PR__CMN__FOUNDATION);
                }
            } else {
                $uamcoiueqaamsqma = __('Sorry, you are not allowed to delete items of this type.', PR__CMN__FOUNDATION);
            }
        }
        if ($uamcoiueqaamsqma) {
            Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, 'orm-notice');
        } else {
            Notice::kigowwqauiumummw(__('Item successfully deleted.', PR__CMN__FOUNDATION), 'orm-notice');
        }
        return $ksaameoqigiaoigg;
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        $ksaameoqigiaoigg = false;
        $meisgakuwcmwosms = 0;
        $uamcoiueqaamsqma = '';
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
                if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie('delete_item', $aokagokqyuysuksm)) {
                    if (!$this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                        $uamcoiueqaamsqma = __('Error in deleting.', PR__CMN__FOUNDATION);
                        $ksaameoqigiaoigg = false;
                        goto qwigomakwmyiwkgo;
                    }
                    $meisgakuwcmwosms++;
                    $ksaameoqigiaoigg = true;
                } else {
                    $uamcoiueqaamsqma = __('Sorry, you are not allowed to delete items of this type.', PR__CMN__FOUNDATION);
                    goto qwigomakwmyiwkgo;
                }
                myoicgcuugciueis:
            }
            qwigomakwmyiwkgo:
        }
        if ($uamcoiueqaamsqma) {
            Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, 'orm-action');
        } else {
            Notice::kigowwqauiumummw(__('Requested items deleted.', PR__CMN__FOUNDATION), 'orm-notice');
        }
        return $ksaameoqigiaoigg;
    }
    public function mqyuagguukgcoeka()
    {
        parent::mqyuagguukgcoeka();
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        if ($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq()) {
            $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
            $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
            $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
            if ($tsuauommsquiesmk && $eqgoocgaqwqcimie) {
                $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
                $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
                $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
            }
            wp_redirect($igscmsiuisqaqwkk);
            exit;
        }
    }
    
    public function ycogikomoygcmimg() : bool
    {
        $ksaameoqigiaoigg = false;
        $aiamqeawckcsuaou = ManipulateServer::get('action');
        if ($aiamqeawckcsuaou) {
            $this->myyqwyswweswiuwu($aiamqeawckcsuaou);
            $ksaameoqigiaoigg = true;
        }
        return $ksaameoqigiaoigg;
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou)
    {
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey('item', []);
        $oysoyeaucuawyaky = [];
        if ($igqsaukqcqscimok) {
            $oysoyeaucuawyaky = array_map('intval', $igqsaukqcqscimok);
        }
        if ($aiamqeawckcsuaou && $oysoyeaucuawyaky) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_do_bulk_action"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
            if ($aiamqeawckcsuaou == 'delete') {
                $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
            }
        }
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        $ksaameoqigiaoigg = false;
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, 'orm-action', false);
        if ($aiamqeawckcsuaou) {
            $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
            $ksaameoqigiaoigg = true;
        }
        return $ksaameoqigiaoigg;
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        if ($aiamqeawckcsuaou == 'delete') {
            $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_do_single_action"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
            if ($aiamqeawckcsuaou === 'delete') {
                $this->delete($aokagokqyuysuksm);
            }
        }
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu('per_page', ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        $icwicymcioeyeyek = $_POST;
        ManipulateSetting::wwckmeoskuagomki('FOUNDATION_ORM_AJAX_LIST_TABLE', true);
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, 'paged', 1), ManipulateArray::get($icwicymcioeyeyek, 'per_page', 20));
        ob_start();
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        $keccaugmemegoimu = ob_get_clean();
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
    }
    public function qiekckyaeisgcmok()
    {
        if ($this->sooksiiooeywkyaq()) {
            $omkysikckkcieckq = str_replace('-', '_', "edit_{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_per_page");
            $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
            if ($weyoqgcesqgeusiu < 1) {
                $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
            }
            
            $this->cecaguuoecmccuse('screen_options_show_submit', '__return_true');
            echo $this->iuygowkemiiwqmiw('options', ['per_page' => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), 'label' => __('Number of items per page:', PR__CMN__FOUNDATION)]);
        }
    }
    public function wsockamcwmiaooya()
    {
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        $qqkyekmackggcick = get_hidden_columns($this->mgogaykgkoogasim()->miwqiiqeegeqcwis());
        if ($wkkweuacukumqmya) {
            $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, '_title', __('Columns', PR__CMN__FOUNDATION));
            $ikgwqyuyckaewsow = '';
            $yemgmmgogcwccuky = ['_title', 'cb'];
            foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                if (!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs) {
                    $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}-hide";
                    $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq('label', [], [ManipulateHTML::qgsekwygcgawekeq('input', ['id' => $aokagokqyuysuksm, 'name' => $aokagokqyuysuksm, 'class' => 'hide-column-tog', 'type' => 'checkbox', 'value' => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
                }
                csscmcacoikwsecs:
            }
            asmecuqiyyswueqe:
            ManipulateHTML::awwqwouuoioauoaw('fieldset', ['class' => 'metabox-prefs'], true, [ManipulateHTML::uuccukgasskgimsq('legend', [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        }
    }
    
    public function kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc)
    {
        $this->wsockamcwmiaooya();
        $this->qiekckyaeisgcmok();
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        $oowiawssoycsoiku = [str_replace('-', '_', "edit_{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_per_page")];
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        $yemgmmgogcwccuky = ['_title', 'cb'];
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            
            if (!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs) {
                $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}-hide";
            }
            kuicqywysciceggs:
        }
        cuykwgmswkskqkyi:
        
        if (in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        }
        return $wsayskqwkoauuyks;
    }
}

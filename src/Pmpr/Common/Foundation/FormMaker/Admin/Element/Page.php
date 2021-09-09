<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Page extends Element
{
    
    protected ?string $type = '';
    
    protected ?string $label = '';
    
    protected ?string $pageTitle = '';
    
    protected ?string $menuTitle = '';
    
    protected ?MetaTab $metaTab = null;
    
    protected ?string $parentMenu = '';
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x63\x6d\x62\x32\137\x61\x64\x6d\151\156\137\151\x6e\151\164", [$this, "\x69\x63\167\155\153\145\163\171\163\153\147\163\x6b\x71\165\x75"], 12)->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\145\x6e\x71\x75\145\x75\x65\x5f\163\x63\162\x69\x70\164\163", [$this, "\145\165\x79\x77\171\x77\x67\163\x73\x69\161\157\163\157\157\x63"]);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get("\160\x61\147\x65", false);
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm === self::symcgieuakksimmu()->cisyiemkeykgkomc();
    }
    public function imsomwwswyoquoqk()
    {
        
    }
    public function myyikeyuuomqoyew()
    {
        
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie);
        return $this;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce);
        return $this;
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self
    {
        $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
        return $this;
    }
    
    public function gueasuouwqysmomu() : ?string
    {
        return $this->type;
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function aeqcqgsamsqomowm() : ?MetaTab
    {
        return $this->metaTab;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label;
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
        return $this;
    }
    
    public function mmqossqsksemasay() : ?string
    {
        return $this->pageTitle;
    }
    
    public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self
    {
        $this->pageTitle = $cmyoswawcimsecyy;
        return $this;
    }
    
    public function kigkkuoayyscqiuq() : ?string
    {
        return $this->menuTitle;
    }
    
    public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self
    {
        $this->menuTitle = $kuysccmeoqgaiumc;
        return $this;
    }
    
    public function cgugaaoykcyiomuk() : ?string
    {
        return $this->parentMenu;
    }
    
    public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self
    {
        $this->parentMenu = $cicseccwqcweeksc;
        return $this;
    }
    
    public function icwmkesyskgskquu() : ?bool
    {
        try {
            goto iygooyusgigoeoow;
            muweikgaeoamyaaw:
            if (!$ywoucyskcquysiwc) {
                goto qkyuwiqqgkuikgwy;
            }
            goto cwqkqyekyqamcacc;
            imicgeaucyyaycau:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto smsgucswuyeoaeoc;
            acwcacwmkgyykoqq:
            self::asimeyiqqkeawyoq();
            goto wqsyawgogiswmkgo;
            imcaayemagekyysy:
            qkyuwiqqgkuikgwy:
            goto acwcacwmkgyykoqq;
            qyaiqywcawamgqko:
            $this->ecwgiiuacoaokqkw();
            goto gmgqmceekqkkccmq;
            wqsyawgogiswmkgo:
            aycikwgsmgssgeui:
            goto iuiioagqmsigmmqw;
            iygooyusgigoeoow:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto wuquqskocseageai;
            }
            goto imicgeaucyyaycau;
            mskcmsyuewcoicaa:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto msoscooawisocoia;
            gmgqmceekqkkccmq:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\164\x61\x62\x73"), [], $uqcooyiiyysckskk);
            goto muweikgaeoamyaaw;
            msoscooawisocoia:
            $this->metaTab = $uqcooyiiyysckskk;
            goto kegscyoeseeqkwqo;
            iuiioagqmsigmmqw:
            wuquqskocseageai:
            goto koqwiwoycwuewsqi;
            smsgucswuyeoaeoc:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\x72\x2d\x70\x61\147\x65\x20\x70\x72\x2d\x6d\x65\164\x61\x62\x6f\170\55\160\x61\x67\x65")->qaygoqgeieeugsey("\160\141\x67\x65\x5f\x74\x69\164\x6c\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\x65\x6e\x75\137\x74\151\x74\154\145", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x63\141\x70\x61\142\151\154\x69\x74\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\166\x69\145\x77\137\143\141\x70\141\142\151\154\x69\164\171", $this->gwaeeegmgggawiyi());
            goto mskcmsyuewcoicaa;
            cwqkqyekyqamcacc:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto imcaayemagekyysy;
            kegscyoeseeqkwqo:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto aycikwgsmgssgeui;
            }
            goto qyaiqywcawamgqko;
            koqwiwoycwuewsqi:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        return parent::icwmkesyskgskquu();
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        return $uqcooyiiyysckskk;
    }
    
    public function suegwaomueaiseeo() : ?string
    {
        goto guuqakcckyuiwweq;
        sguygkqsmgcuciyo:
        if (!$ugwmmoaywcoucski) {
            goto qyeuammiwmguogks;
        }
        goto gsawyomckqmowaoy;
        sggogwaomwkwyics:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto sguygkqsmgcuciyo;
        gmkwgkeaysqucoac:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto sggogwaomwkwyics;
        wmagsimyuceuawoy:
        return $eeamcawaiqocomwy;
        goto auyyeawsgkagaaau;
        yweyyywyogmugiuy:
        qyeuammiwmguogks:
        goto wmagsimyuceuawoy;
        guuqakcckyuiwweq:
        $eeamcawaiqocomwy = null;
        goto gmkwgkeaysqucoac;
        gsawyomckqmowaoy:
        $eeamcawaiqocomwy = add_query_arg(["\x70\x61\x67\x65" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto yweyyywyogmugiuy;
        auyyeawsgkagaaau:
    }
    public function euywywgssiqosooc()
    {
        goto ywsygyaqaosmsowe;
        accqceameoskmmau:
        if (!($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay())) {
            goto qcayciumgumuqcka;
        }
        goto umekamuowemeygwq;
        kiywwuogciceaawk:
        qcayciumgumuqcka:
        goto migagswgousikqii;
        ywsygyaqaosmsowe:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto accqceameoskmmau;
        qiqwwkqsiuoumgio:
        $this->myyikeyuuomqoyew();
        goto kiywwuogciceaawk;
        umekamuowemeygwq:
        $this->imsomwwswyoquoqk();
        goto qiqwwkqsiuoumgio;
        migagswgousikqii:
    }
}

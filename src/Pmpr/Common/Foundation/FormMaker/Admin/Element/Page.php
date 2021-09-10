<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\x63\x6d\142\62\137\141\144\x6d\151\156\137\151\156\x69\164", [$this, "\x69\x63\167\155\153\145\163\x79\163\153\147\x73\153\161\x75\165"], 12)->qcsmikeggeemccuu("\141\x64\155\x69\156\x5f\x65\156\x71\x75\145\165\145\137\163\143\x72\x69\x70\x74\x73", [$this, "\x65\165\171\x77\171\x77\147\x73\163\151\x71\157\163\x6f\157\143"]);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get("\x70\x61\x67\x65", false);
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
            goto kaouwuwuskmkaywg;
            ygkmmwmsieikuems:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto uaqcoucyikqkammy;
            cwoayakioeqceusi:
            self::asimeyiqqkeawyoq();
            goto wwmkoqokkskyuekq;
            uaqcoucyikqkammy:
            eqeucceequokccoi:
            goto cwoayakioeqceusi;
            qkmmkqkcawysiaaa:
            wesowwqqaiomikya:
            goto uagqkwouosysccgi;
            kikoaeaaaucqagam:
            $this->ecwgiiuacoaokqkw();
            goto mcsisoyoaamuisic;
            kiskowmsagqskggy:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto kicgoukiikukyiuc;
            }
            goto kikoaeaaaucqagam;
            mcsisoyoaamuisic:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\164\141\142\x73"), [], $uqcooyiiyysckskk);
            goto sicoimimywuoysai;
            esyoswagukeaaocg:
            $this->metaTab = $uqcooyiiyysckskk;
            goto kiskowmsagqskggy;
            swgikmkgugcugwcy:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto qiowumwasmcikiwq;
            sicoimimywuoysai:
            if (!$ywoucyskcquysiwc) {
                goto eqeucceequokccoi;
            }
            goto ygkmmwmsieikuems;
            wwmkoqokkskyuekq:
            kicgoukiikukyiuc:
            goto qkmmkqkcawysiaaa;
            kaouwuwuskmkaywg:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto wesowwqqaiomikya;
            }
            goto swgikmkgugcugwcy;
            qiowumwasmcikiwq:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\x72\x2d\x70\141\147\145\x20\160\x72\55\155\145\x74\141\142\157\x78\x2d\x70\x61\147\145")->qaygoqgeieeugsey("\160\x61\147\145\x5f\164\x69\x74\x6c\145", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\x65\x6e\165\137\164\151\164\154\145", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\143\x61\160\141\x62\151\x6c\151\x74\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\x76\151\145\167\x5f\143\x61\x70\141\142\x69\x6c\151\x74\x79", $this->gwaeeegmgggawiyi());
            goto moaceakyeiggqeia;
            moaceakyeiggqeia:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto esyoswagukeaaocg;
            uagqkwouosysccgi:
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
        goto skyauqccisaigqiu;
        skyauqccisaigqiu:
        $eeamcawaiqocomwy = null;
        goto ueoskkoqeyomkyec;
        yumuggiwmooqgome:
        ykocacegcqwqwmik:
        goto ouaqykaiyqgwegiu;
        waiiccycqigseygw:
        $eeamcawaiqocomwy = add_query_arg(["\160\x61\x67\x65" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto yumuggiwmooqgome;
        amkukyigkwwygaas:
        if (!$ugwmmoaywcoucski) {
            goto ykocacegcqwqwmik;
        }
        goto waiiccycqigseygw;
        qssaiieiqmasocwm:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto amkukyigkwwygaas;
        ueoskkoqeyomkyec:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto qssaiieiqmasocwm;
        ouaqykaiyqgwegiu:
        return $eeamcawaiqocomwy;
        goto aykiqckaguuiyymq;
        aykiqckaguuiyymq:
    }
    public function euywywgssiqosooc()
    {
        goto vakkcikysowwccma;
        vakkcikysowwccma:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto awuwykyqggymwyme;
        awuwykyqggymwyme:
        if (!($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay())) {
            goto okuamysuweaiiwcm;
        }
        goto aaakiyauimugqske;
        ekmowyyeqsocgaai:
        okuamysuweaiiwcm:
        goto oqocgwgmguywkwwm;
        aaakiyauimugqske:
        $this->imsomwwswyoquoqk();
        goto wgywcekyokwoococ;
        wgywcekyokwoococ:
        $this->myyikeyuuomqoyew();
        goto ekmowyyeqsocgaai;
        oqocgwgmguywkwwm:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->qcsmikeggeemccuu("\x63\x6d\x62\x32\137\x61\x64\x6d\x69\156\x5f\151\156\x69\164", [$this, "\x69\143\167\x6d\x6b\145\163\171\163\x6b\x67\163\x6b\161\x75\165"], 12)->qcsmikeggeemccuu("\141\x64\155\151\156\137\145\156\x71\x75\x65\165\x65\137\x73\x63\x72\151\x70\x74\x73", [$this, "\145\165\x79\x77\x79\x77\147\163\x73\x69\x71\157\x73\x6f\x6f\143"]);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get("\x70\x61\147\145", false);
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
            goto oeqcguogcymoaumy;
            swgikmkgugcugwcy:
            $this->ecwgiiuacoaokqkw();
            goto qiowumwasmcikiwq;
            kicgoukiikukyiuc:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto wesowwqqaiomikya;
            qiowumwasmcikiwq:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\164\141\x62\x73"), [], $uqcooyiiyysckskk);
            goto moaceakyeiggqeia;
            oeqcguogcymoaumy:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto mucwgogisqikigky;
            }
            goto uuoasawseskowkkq;
            eqeucceequokccoi:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\x70\162\55\160\x61\147\x65\x20\160\x72\55\155\x65\x74\x61\142\x6f\x78\55\x70\141\x67\145")->qaygoqgeieeugsey("\160\141\147\145\137\x74\151\164\154\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\145\156\165\x5f\x74\151\164\x6c\145", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x63\141\x70\x61\142\151\154\x69\164\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\166\x69\145\x77\x5f\x63\x61\160\141\x62\151\x6c\151\x74\171", $this->gwaeeegmgggawiyi());
            goto kicgoukiikukyiuc;
            wesowwqqaiomikya:
            $this->metaTab = $uqcooyiiyysckskk;
            goto kaouwuwuskmkaywg;
            esyoswagukeaaocg:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto kiskowmsagqskggy;
            moaceakyeiggqeia:
            if (!$ywoucyskcquysiwc) {
                goto yewmgwogkoscccca;
            }
            goto esyoswagukeaaocg;
            uuoasawseskowkkq:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto eqeucceequokccoi;
            kaouwuwuskmkaywg:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto iqgyemmowuemqccs;
            }
            goto swgikmkgugcugwcy;
            sicoimimywuoysai:
            mucwgogisqikigky:
            goto ygkmmwmsieikuems;
            kiskowmsagqskggy:
            yewmgwogkoscccca:
            goto kikoaeaaaucqagam;
            mcsisoyoaamuisic:
            iqgyemmowuemqccs:
            goto sicoimimywuoysai;
            kikoaeaaaucqagam:
            self::asimeyiqqkeawyoq();
            goto mcsisoyoaamuisic;
            ygkmmwmsieikuems:
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
        goto cwoayakioeqceusi;
        qkmmkqkcawysiaaa:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto uagqkwouosysccgi;
        ueoskkoqeyomkyec:
        return $eeamcawaiqocomwy;
        goto qssaiieiqmasocwm;
        uagqkwouosysccgi:
        if (!$ugwmmoaywcoucski) {
            goto uaqcoucyikqkammy;
        }
        goto ykocacegcqwqwmik;
        ykocacegcqwqwmik:
        $eeamcawaiqocomwy = add_query_arg(["\160\x61\x67\x65" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto skyauqccisaigqiu;
        wwmkoqokkskyuekq:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto qkmmkqkcawysiaaa;
        skyauqccisaigqiu:
        uaqcoucyikqkammy:
        goto ueoskkoqeyomkyec;
        cwoayakioeqceusi:
        $eeamcawaiqocomwy = null;
        goto wwmkoqokkskyuekq;
        qssaiieiqmasocwm:
    }
    public function euywywgssiqosooc()
    {
        goto waiiccycqigseygw;
        waiiccycqigseygw:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto yumuggiwmooqgome;
        yumuggiwmooqgome:
        if (!($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay())) {
            goto amkukyigkwwygaas;
        }
        goto ouaqykaiyqgwegiu;
        ouaqykaiyqgwegiu:
        $this->imsomwwswyoquoqk();
        goto aykiqckaguuiyymq;
        okuamysuweaiiwcm:
        amkukyigkwwygaas:
        goto vakkcikysowwccma;
        aykiqckaguuiyymq:
        $this->myyikeyuuomqoyew();
        goto okuamysuweaiiwcm;
        vakkcikysowwccma:
    }
}

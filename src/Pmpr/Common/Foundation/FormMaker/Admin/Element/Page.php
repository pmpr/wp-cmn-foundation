<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->qcsmikeggeemccuu("\143\155\x62\62\x5f\x61\x64\155\x69\156\x5f\x69\x6e\151\x74", [$this, "\151\x63\x77\x6d\153\145\163\x79\163\153\x67\163\153\161\165\165"], 12)->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\x65\x6e\x71\165\145\165\x65\137\163\x63\x72\x69\x70\x74\x73", [$this, "\x65\165\x79\x77\x79\x77\x67\163\163\x69\161\157\x73\x6f\x6f\143"]);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get("\160\x61\x67\x65", false);
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
            goto wesowwqqaiomikya;
            qiowumwasmcikiwq:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto moaceakyeiggqeia;
            wesowwqqaiomikya:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto kicgoukiikukyiuc;
            }
            goto kaouwuwuskmkaywg;
            ygkmmwmsieikuems:
            uuoasawseskowkkq:
            goto uaqcoucyikqkammy;
            cwoayakioeqceusi:
            eqeucceequokccoi:
            goto wwmkoqokkskyuekq;
            kaouwuwuskmkaywg:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto swgikmkgugcugwcy;
            moaceakyeiggqeia:
            $this->metaTab = $uqcooyiiyysckskk;
            goto esyoswagukeaaocg;
            esyoswagukeaaocg:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto eqeucceequokccoi;
            }
            goto kiskowmsagqskggy;
            kikoaeaaaucqagam:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\164\x61\142\x73"), [], $uqcooyiiyysckskk);
            goto mcsisoyoaamuisic;
            kiskowmsagqskggy:
            $this->ecwgiiuacoaokqkw();
            goto kikoaeaaaucqagam;
            swgikmkgugcugwcy:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\162\x2d\x70\x61\147\x65\x20\x70\x72\x2d\x6d\145\x74\141\x62\157\170\55\160\141\x67\145")->qaygoqgeieeugsey("\x70\x61\147\x65\x5f\164\x69\x74\x6c\145", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\x6d\145\156\165\x5f\164\151\164\154\x65", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\143\x61\x70\x61\142\151\x6c\151\164\x79", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\x76\151\x65\167\137\143\x61\160\141\142\x69\x6c\x69\164\x79", $this->gwaeeegmgggawiyi());
            goto qiowumwasmcikiwq;
            sicoimimywuoysai:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto ygkmmwmsieikuems;
            uaqcoucyikqkammy:
            self::asimeyiqqkeawyoq();
            goto cwoayakioeqceusi;
            wwmkoqokkskyuekq:
            kicgoukiikukyiuc:
            goto qkmmkqkcawysiaaa;
            mcsisoyoaamuisic:
            if (!$ywoucyskcquysiwc) {
                goto uuoasawseskowkkq;
            }
            goto sicoimimywuoysai;
            qkmmkqkcawysiaaa:
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
        goto ykocacegcqwqwmik;
        waiiccycqigseygw:
        uagqkwouosysccgi:
        goto yumuggiwmooqgome;
        yumuggiwmooqgome:
        return $eeamcawaiqocomwy;
        goto ouaqykaiyqgwegiu;
        skyauqccisaigqiu:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto ueoskkoqeyomkyec;
        qssaiieiqmasocwm:
        if (!$ugwmmoaywcoucski) {
            goto uagqkwouosysccgi;
        }
        goto amkukyigkwwygaas;
        ueoskkoqeyomkyec:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto qssaiieiqmasocwm;
        ykocacegcqwqwmik:
        $eeamcawaiqocomwy = null;
        goto skyauqccisaigqiu;
        amkukyigkwwygaas:
        $eeamcawaiqocomwy = add_query_arg(["\160\141\147\145" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto waiiccycqigseygw;
        ouaqykaiyqgwegiu:
    }
    public function euywywgssiqosooc()
    {
        goto okuamysuweaiiwcm;
        vakkcikysowwccma:
        if (!($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay())) {
            goto aykiqckaguuiyymq;
        }
        goto awuwykyqggymwyme;
        wgywcekyokwoococ:
        aykiqckaguuiyymq:
        goto ekmowyyeqsocgaai;
        okuamysuweaiiwcm:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto vakkcikysowwccma;
        awuwykyqggymwyme:
        $this->imsomwwswyoquoqk();
        goto aaakiyauimugqske;
        aaakiyauimugqske:
        $this->myyikeyuuomqoyew();
        goto wgywcekyokwoococ;
        ekmowyyeqsocgaai:
    }
}

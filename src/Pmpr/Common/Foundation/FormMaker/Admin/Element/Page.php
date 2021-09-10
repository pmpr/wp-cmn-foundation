<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->qcsmikeggeemccuu("\x63\155\142\62\x5f\x61\144\155\151\156\x5f\151\156\151\x74", [$this, "\x69\x63\x77\155\x6b\x65\163\x79\163\x6b\x67\163\153\x71\165\x75"], 12)->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\145\156\x71\165\145\x75\x65\x5f\163\143\162\x69\x70\x74\x73", [$this, "\x65\165\x79\167\171\x77\147\x73\x73\151\x71\157\163\x6f\x6f\143"]);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get("\x70\x61\147\x65", false);
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
            goto kicgoukiikukyiuc;
            wesowwqqaiomikya:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto kaouwuwuskmkaywg;
            kikoaeaaaucqagam:
            if (!$ywoucyskcquysiwc) {
                goto oeqcguogcymoaumy;
            }
            goto mcsisoyoaamuisic;
            sicoimimywuoysai:
            oeqcguogcymoaumy:
            goto ygkmmwmsieikuems;
            swgikmkgugcugwcy:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto qiowumwasmcikiwq;
            esyoswagukeaaocg:
            $this->ecwgiiuacoaokqkw();
            goto kiskowmsagqskggy;
            mcsisoyoaamuisic:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto sicoimimywuoysai;
            uaqcoucyikqkammy:
            uuoasawseskowkkq:
            goto cwoayakioeqceusi;
            qiowumwasmcikiwq:
            $this->metaTab = $uqcooyiiyysckskk;
            goto moaceakyeiggqeia;
            kicgoukiikukyiuc:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto eqeucceequokccoi;
            }
            goto wesowwqqaiomikya;
            moaceakyeiggqeia:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto uuoasawseskowkkq;
            }
            goto esyoswagukeaaocg;
            kaouwuwuskmkaywg:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\162\55\x70\141\x67\x65\40\x70\162\55\x6d\x65\x74\141\142\x6f\170\x2d\x70\141\147\145")->qaygoqgeieeugsey("\x70\141\x67\x65\137\164\151\164\154\145", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\x65\156\x75\137\x74\151\164\x6c\145", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x63\x61\160\x61\142\151\x6c\151\164\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\166\x69\x65\167\137\x63\141\160\x61\142\x69\154\x69\x74\x79", $this->gwaeeegmgggawiyi());
            goto swgikmkgugcugwcy;
            cwoayakioeqceusi:
            eqeucceequokccoi:
            goto wwmkoqokkskyuekq;
            kiskowmsagqskggy:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\164\141\x62\x73"), [], $uqcooyiiyysckskk);
            goto kikoaeaaaucqagam;
            ygkmmwmsieikuems:
            self::asimeyiqqkeawyoq();
            goto uaqcoucyikqkammy;
            wwmkoqokkskyuekq:
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
        goto uagqkwouosysccgi;
        waiiccycqigseygw:
        return $eeamcawaiqocomwy;
        goto yumuggiwmooqgome;
        ykocacegcqwqwmik:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto skyauqccisaigqiu;
        ueoskkoqeyomkyec:
        if (!$ugwmmoaywcoucski) {
            goto qkmmkqkcawysiaaa;
        }
        goto qssaiieiqmasocwm;
        skyauqccisaigqiu:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto ueoskkoqeyomkyec;
        uagqkwouosysccgi:
        $eeamcawaiqocomwy = null;
        goto ykocacegcqwqwmik;
        amkukyigkwwygaas:
        qkmmkqkcawysiaaa:
        goto waiiccycqigseygw;
        qssaiieiqmasocwm:
        $eeamcawaiqocomwy = add_query_arg(["\160\141\x67\x65" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto amkukyigkwwygaas;
        yumuggiwmooqgome:
    }
    public function euywywgssiqosooc()
    {
        goto aykiqckaguuiyymq;
        aaakiyauimugqske:
        ouaqykaiyqgwegiu:
        goto wgywcekyokwoococ;
        aykiqckaguuiyymq:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto okuamysuweaiiwcm;
        awuwykyqggymwyme:
        $this->myyikeyuuomqoyew();
        goto aaakiyauimugqske;
        vakkcikysowwccma:
        $this->imsomwwswyoquoqk();
        goto awuwykyqggymwyme;
        okuamysuweaiiwcm:
        if (!($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay())) {
            goto ouaqykaiyqgwegiu;
        }
        goto vakkcikysowwccma;
        wgywcekyokwoococ:
    }
}

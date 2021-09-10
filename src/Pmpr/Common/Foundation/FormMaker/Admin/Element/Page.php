<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\x63\x6d\x62\62\x5f\x61\144\x6d\x69\156\x5f\151\156\151\x74", [$this, "\151\143\167\155\153\145\x73\x79\163\x6b\x67\163\x6b\x71\165\x75"], 12)->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x65\156\161\x75\x65\x75\x65\137\163\143\162\x69\160\164\x73", [$this, "\x65\165\171\x77\x79\x77\147\163\163\151\161\157\163\157\x6f\143"]);
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
            goto kicgoukiikukyiuc;
            uaqcoucyikqkammy:
            uuoasawseskowkkq:
            goto cwoayakioeqceusi;
            moaceakyeiggqeia:
            if (!$uqcooyiiyysckskk->csaueuycewaiuaay()) {
                goto uuoasawseskowkkq;
            }
            goto esyoswagukeaaocg;
            wesowwqqaiomikya:
            $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
            goto kaouwuwuskmkaywg;
            ygkmmwmsieikuems:
            self::asimeyiqqkeawyoq();
            goto uaqcoucyikqkammy;
            esyoswagukeaaocg:
            $this->ecwgiiuacoaokqkw();
            goto kiskowmsagqskggy;
            mcsisoyoaamuisic:
            $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
            goto sicoimimywuoysai;
            kikoaeaaaucqagam:
            if (!$ywoucyskcquysiwc) {
                goto oeqcguogcymoaumy;
            }
            goto mcsisoyoaamuisic;
            swgikmkgugcugwcy:
            $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
            goto qiowumwasmcikiwq;
            kicgoukiikukyiuc:
            if (ManipulateAjax::mcgoysmkqsqooceq()) {
                goto eqeucceequokccoi;
            }
            goto wesowwqqaiomikya;
            kaouwuwuskmkaywg:
            $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\x72\x2d\x70\x61\x67\x65\x20\x70\x72\x2d\155\x65\x74\x61\142\157\170\55\x70\x61\x67\145")->qaygoqgeieeugsey("\x70\141\x67\x65\137\x74\151\x74\154\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\x65\156\165\137\x74\x69\164\x6c\x65", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x63\141\160\141\142\151\154\151\x74\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\166\151\x65\167\137\x63\141\160\141\142\151\x6c\151\164\171", $this->gwaeeegmgggawiyi());
            goto swgikmkgugcugwcy;
            sicoimimywuoysai:
            oeqcguogcymoaumy:
            goto ygkmmwmsieikuems;
            qiowumwasmcikiwq:
            $this->metaTab = $uqcooyiiyysckskk;
            goto moaceakyeiggqeia;
            kiskowmsagqskggy:
            $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\x74\141\142\x73"), [], $uqcooyiiyysckskk);
            goto kikoaeaaaucqagam;
            cwoayakioeqceusi:
            eqeucceequokccoi:
            goto wwmkoqokkskyuekq;
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
        uagqkwouosysccgi:
        $eeamcawaiqocomwy = null;
        goto ykocacegcqwqwmik;
        amkukyigkwwygaas:
        qkmmkqkcawysiaaa:
        goto waiiccycqigseygw;
        skyauqccisaigqiu:
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        goto ueoskkoqeyomkyec;
        waiiccycqigseygw:
        return $eeamcawaiqocomwy;
        goto yumuggiwmooqgome;
        qssaiieiqmasocwm:
        $eeamcawaiqocomwy = add_query_arg(["\160\141\147\145" => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        goto amkukyigkwwygaas;
        ykocacegcqwqwmik:
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        goto skyauqccisaigqiu;
        ueoskkoqeyomkyec:
        if (!$ugwmmoaywcoucski) {
            goto qkmmkqkcawysiaaa;
        }
        goto qssaiieiqmasocwm;
        yumuggiwmooqgome:
    }
    public function euywywgssiqosooc()
    {
        goto aykiqckaguuiyymq;
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
        aaakiyauimugqske:
        ouaqykaiyqgwegiu:
        goto wgywcekyokwoococ;
        aykiqckaguuiyymq:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto okuamysuweaiiwcm;
        wgywcekyokwoococ:
    }
}

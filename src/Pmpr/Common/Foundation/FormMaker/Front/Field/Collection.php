<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class Collection extends Field
{
    
    protected array $cols = [];
    
    protected array $fields = [];
    
    public function __construct(string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto iismyqyayagiyios;
        cssukoaykymkugys:
        DecoratorHook::qcsmikeggeemccuu("\167\160\x5f\x65\x6e\161\x75\x65\x75\x65\137\163\x63\x72\151\x70\x74\163", [$this, "\145\156\161\x75\x65\165\x65"]);
        goto yooyasyggysysqco;
        cmussggwecawauwc:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\x72\x65\x70\145\141\x74\145\x72\x2d\x6c\151\163\x74", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\144" => "\143\157\x6c\154\145\143\164\151\157\x6e\x5f{$aokagokqyuysuksm}", "\x63\x6c\141\163\x73" => "\146\157\162\x6d\x2d\143\157\154\x6c\x65\143\x74\x69\157\x6e"]);
        goto cssukoaykymkugys;
        iismyqyayagiyios:
        parent::__construct("\144\151\166", "\143\x6f\154\154\145\143\x74\x69\x6f\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto cmussggwecawauwc;
        yooyasyggysysqco:
    }
    public static function enqueue()
    {
        goto uqymcyyiewiiwqqu;
        uqsigcyiocicmiqm:
        $ymqmyyeuycgmigyo = "\x63\157\x6c\x6c\x65\143\164\151\x6f\x6e";
        goto gmwksskckoeggoau;
        gmwksskckoeggoau:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\x73"))->ayuciigykaswwqeo("\152\161\165\145\x72\x79")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\x6c\157\x62\141\x6c")));
        goto gugqwiqqeesskwqw;
        uqymcyyiewiiwqqu:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto uqsigcyiocicmiqm;
        gugqwiqqeesskwqw:
    }
    
    public function essgykyeoymwgsgg() : array
    {
        return $this->cols;
    }
    
    public function saosoymyamkakomm(array $waaaiiqwsmggwsak) : self
    {
        $this->cols = $waaaiiqwsmggwsak;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto eukogiuaicuoagkw;
        gwgisgmcmgcasskc:
        eomyiygumegiacam:
        goto mmesoimsyqeiowoo;
        scayemgqcsisqqag:
        if (!$ikgwqyuyckaewsow) {
            goto qwicaaakcymkqgcu;
        }
        goto aasaocqscwkksuom;
        aasaocqscwkksuom:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            qqcieyikoqueosyo:
        }
        goto gwgisgmcmgcasskc;
        eukogiuaicuoagkw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\143\154\141\x73\x73" => "\143\x6f\154\x2d\155\x64\x2d\61"], $this->kwkmeiyiomikmcoc());
        goto eqooyueyyiqqgygc;
        mmesoimsyqeiowoo:
        qwicaaakcymkqgcu:
        goto guqakeyeceygukgo;
        guqakeyeceygukgo:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\x63\154\x61\x73\163" => "\146\x6f\162\155\x2d\x72\157\167", "\x64\x61\164\141\55\x72\145\160\145\141\164\x65\x72\55\x69\x74\145\155"], $nsmgceoqaqogqmuw);
        goto kioecaokqiyeyimw;
        eqooyueyyiqqgygc:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto scayemgqcsisqqag;
        kioecaokqiyeyimw:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto seqicmqaumeoweik;
        lowoswoqauswsswm:
        return $nsmgceoqaqogqmuw;
        goto qasqismygkemyaka;
        seqicmqaumeoweik:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto eikwaewqcysuywmw;
        wayumgcgmkiqwouu:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\154\x61\x73\163" => "\155\154\x2d\x34", self::TYPE => "\143\154\145\x61\162", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\x43\x6c\145\141\x72", PR__CMN__FOUNDATION)]);
        goto lowoswoqauswsswm;
        eikwaewqcysuywmw:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\x63\x72\x65\x61\x74\x65", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\x41\144\x64", PR__CMN__FOUNDATION)]);
        goto wayumgcgmkiqwouu;
        qasqismygkemyaka:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\151\x7a\145" => "\x78\163", "\143\x6c\141\163\163" => '', self::TYPE => "\x64\145\x6c\x65\x74\145", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\x44\145\x6c\145\x74\x65", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\142\x75\x74\164\157\x6e", ["\x63\x6c\141\x73\163" => "\x62\x74\x6e\40\x62\x74\156\55\x73\155\x20\142\164\x6e\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\40" . ManipulateArray::get($ywmkwiwkosakssii, "\143\154\x61\x73\163"), self::TYPE => "\142\165\164\x74\x6f\x6e", "\x64\141\164\141\x2d\164\x69\x74\x6c\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\141\x72\x69\141\x2d\154\x61\142\x65\x6c" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\144\141\x74\x61\55\x72\145\160\145\141\x74\x65\x72\55" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\143\154\141\x73\x73" => "\x69\x63\x6f\156\55\x77\x68\x69\x74\145\x20\x66\x75\154\x6c\x2d\x6f\x70\141\143\151\164\x79\x20\151\143\x6f\156\x2d" . ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\172\x65")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\144\x61\164\x61\55\151\x6e\151\x74\x2d\145\155\160\164\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\x74\141\55\x66\151\162\163\164\55\165\156\x64\x65\x6c\x65\164\141\142\154\x65", true);
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function iqoyuqgssusgimwa() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto sgsuggymsisiisya;
        sgsuggymsisiisya:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto kemseeaykemmgosi;
        cyakakoyscyyseim:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto kegswsuciueamysc;
        kemseeaykemmgosi:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto rsiscqyuuaqqukaq;
        wmmicyyikqyykeqm:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto cmsosmamsmyuogsi;
        rsiscqyuuaqqukaq:
        if ($imgcoakmmgqsckkm) {
            goto yaigsowoksoegqig;
        }
        goto cyakakoyscyyseim;
        cmsosmamsmyuogsi:
        return $this;
        goto gsiggywymmcuoyow;
        gcwsyykomkieycmo:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\143\x6c\x61\x73\x73" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\143\x6f\x6c\x6c\145\x63\164\x69\157\x6e\x2d\x66\x69\145\154\144");
        goto wmmicyyikqyykeqm;
        kegswsuciueamysc:
        yaigsowoksoegqig:
        goto gcwsyykomkieycmo;
        gsiggywymmcuoyow:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto sgwigiywwyuoakok;
        esaiikawuuqsiwuq:
        return $this;
        goto uqecisqimkeikumi;
        oqweykgimegoiqik:
        ecoyeceqcymocmge:
        goto esaiikawuuqsiwuq;
        sgwigiywwyuoakok:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            ayekommagiogccge:
        }
        goto oqweykgimegoiqik;
        uqecisqimkeikumi:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto uakcauwwqmwgsyue;
        aqeiymmmiygmoyws:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wkikiuscuumkuoew;
            syycweoceqmkaqcu:
            qoiwsygocigycosk:
            goto cwqasqacoeoymgwm;
            cwqasqacoeoymgwm:
            kysgskkmgemwecqu:
            goto ksiiqwkugmasuwum;
            wkikiuscuumkuoew:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto qoiwsygocigycosk;
            }
            goto eukiiwcwsiiugcsa;
            eukiiwcwsiiugcsa:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto syycweoceqmkaqcu;
            ksiiqwkugmasuwum:
        }
        goto gasiswcuyygasqye;
        akcowwacsiuucuca:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\55\144\145\x66\141\x75\154\x74\55\166\141\154\165\145\163", $ycmguuqqaiisymgg);
        goto uemcgsaisgakauyw;
        ueageciuwyowgsyy:
        if (!$ikgwqyuyckaewsow) {
            goto mkqosogckkycsqow;
        }
        goto yaisawwqsacugoem;
        uakcauwwqmwgsyue:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ueageciuwyowgsyy;
        uemcgsaisgakauyw:
        mkqosogckkycsqow:
        goto aqeogmeyeguaqckw;
        yaisawwqsacugoem:
        $ycmguuqqaiisymgg = [];
        goto aqeiymmmiygmoyws;
        gasiswcuyygasqye:
        myqoamuyekasyauk:
        goto akcowwacsiuucuca;
        aqeogmeyeguaqckw:
    }
}

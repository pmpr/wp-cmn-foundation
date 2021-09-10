<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto gqimacywyeawgyaa;
        ioiumiumouowyygc:
        DecoratorHook::qcsmikeggeemccuu("\x77\160\137\x65\x6e\161\x75\145\165\x65\x5f\x73\143\x72\151\x70\x74\x73", [$this, "\145\156\x71\165\x65\x75\145"]);
        goto xoqugcgcausywooc;
        gqimacywyeawgyaa:
        parent::__construct("\144\x69\166", "\143\x6f\x6c\154\x65\143\x74\151\157\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        goto oiaiuqmgiesgcqyk;
        oiaiuqmgiesgcqyk:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\162\x65\x70\x65\x61\164\145\162\x2d\x6c\x69\163\164", $aokagokqyuysuksm)->cgeiiwakumywwowu(["\x69\x64" => "\x63\157\x6c\154\x65\x63\x74\151\x6f\x6e\x5f{$aokagokqyuysuksm}", "\143\x6c\x61\163\163" => "\146\x6f\x72\155\55\x63\x6f\x6c\154\145\x63\164\x69\157\156"]);
        goto ioiumiumouowyygc;
        xoqugcgcausywooc:
    }
    public static function enqueue()
    {
        goto yacyygsucqcwygis;
        iismyqyayagiyios:
        $ymqmyyeuycgmigyo = "\x63\157\x6c\154\x65\x63\x74\x69\x6f\x6e";
        goto cmussggwecawauwc;
        cmussggwecawauwc:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\152\163"))->ayuciigykaswwqeo("\152\161\165\x65\162\x79")->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\154\157\x62\141\154")));
        goto cssukoaykymkugys;
        yacyygsucqcwygis:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto iismyqyayagiyios;
        cssukoaykymkugys:
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
        goto gmwksskckoeggoau;
        qwicaaakcymkqgcu:
        yooyasyggysysqco:
        goto eukogiuaicuoagkw;
        eomyiygumegiacam:
        if (!$ikgwqyuyckaewsow) {
            goto uqsigcyiocicmiqm;
        }
        goto qqcieyikoqueosyo;
        gmwksskckoeggoau:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\x6c\x61\x73\x73" => "\143\x6f\x6c\x2d\155\x64\55\x31"], $this->kwkmeiyiomikmcoc());
        goto gugqwiqqeesskwqw;
        eqooyueyyiqqgygc:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\x63\x6c\141\163\163" => "\x66\157\162\155\x2d\162\x6f\167", "\x64\141\x74\x61\55\x72\145\160\x65\x61\164\x65\162\55\151\164\145\x6d"], $nsmgceoqaqogqmuw);
        goto scayemgqcsisqqag;
        gugqwiqqeesskwqw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eomyiygumegiacam;
        eukogiuaicuoagkw:
        uqsigcyiocicmiqm:
        goto eqooyueyyiqqgygc;
        qqcieyikoqueosyo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
            uqymcyyiewiiwqqu:
        }
        goto qwicaaakcymkqgcu;
        scayemgqcsisqqag:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto aasaocqscwkksuom;
        guqakeyeceygukgo:
        return $nsmgceoqaqogqmuw;
        goto kioecaokqiyeyimw;
        mmesoimsyqeiowoo:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(["\x63\x6c\x61\163\163" => "\x6d\x6c\55\64", self::TYPE => "\143\154\145\141\x72", self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __("\x43\x6c\145\x61\x72", PR__CMN__FOUNDATION)]);
        goto guqakeyeceygukgo;
        gwgisgmcmgcasskc:
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => "\143\162\145\x61\x74\145", self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __("\101\x64\144", PR__CMN__FOUNDATION)]);
        goto mmesoimsyqeiowoo;
        aasaocqscwkksuom:
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto gwgisgmcmgcasskc;
        kioecaokqiyeyimw:
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x69\x7a\145" => "\x78\163", "\143\154\x61\x73\x73" => '', self::TYPE => "\144\x65\154\x65\x74\x65", self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __("\104\145\154\x65\164\145", PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq("\x62\165\x74\164\157\156", ["\x63\x6c\141\x73\163" => "\142\x74\x6e\40\142\x74\x6e\x2d\x73\155\x20\x62\164\x6e\x2d" . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . "\40" . ManipulateArray::get($ywmkwiwkosakssii, "\x63\x6c\141\x73\163"), self::TYPE => "\142\x75\164\164\x6f\x6e", "\144\141\x74\141\x2d\164\x69\164\154\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\141\162\151\x61\x2d\x6c\x61\x62\145\154" => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), "\144\x61\164\141\x2d\x72\x65\x70\x65\x61\164\145\x72\55" . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ["\x63\x6c\141\163\x73" => "\151\x63\157\156\55\x77\150\x69\x74\145\x20\146\x75\154\x6c\55\157\x70\x61\x63\x69\x74\x79\x20\x69\143\x6f\156\55" . ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\172\x65")], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\151\156\151\x74\55\x65\x6d\x70\164\171", true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\141\55\x66\151\162\163\x74\x2d\165\156\144\x65\154\x65\164\x61\x62\154\145", true);
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
        goto eikwaewqcysuywmw;
        sgsuggymsisiisya:
        $aiowsaccomcoikus->cgeiiwakumywwowu(["\x63\x6c\x61\x73\163" => $imgcoakmmgqsckkm])->qigsyyqgewgskemg("\x63\157\x6c\x6c\145\x63\164\x69\x6f\156\55\x66\151\x65\x6c\x64");
        goto kemseeaykemmgosi;
        rsiscqyuuaqqukaq:
        return $this;
        goto cyakakoyscyyseim;
        qasqismygkemyaka:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        goto yaigsowoksoegqig;
        wayumgcgmkiqwouu:
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        goto lowoswoqauswsswm;
        lowoswoqauswsswm:
        if ($imgcoakmmgqsckkm) {
            goto seqicmqaumeoweik;
        }
        goto qasqismygkemyaka;
        kemseeaykemmgosi:
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        goto rsiscqyuuaqqukaq;
        eikwaewqcysuywmw:
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        goto wayumgcgmkiqwouu;
        yaigsowoksoegqig:
        seqicmqaumeoweik:
        goto sgsuggymsisiisya;
        cyakakoyscyyseim:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        goto wmmicyyikqyykeqm;
        cmsosmamsmyuogsi:
        kegswsuciueamysc:
        goto gsiggywymmcuoyow;
        wmmicyyikqyykeqm:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gcwsyykomkieycmo:
        }
        goto cmsosmamsmyuogsi;
        gsiggywymmcuoyow:
        return $this;
        goto ecoyeceqcymocmge;
        ecoyeceqcymocmge:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto eukiiwcwsiiugcsa;
        uakcauwwqmwgsyue:
        $this->igmaewykumgwoaoy("\144\141\x74\141\x2d\144\145\x66\x61\x75\x6c\164\x2d\166\x61\x6c\x75\145\x73", $ycmguuqqaiisymgg);
        goto ueageciuwyowgsyy;
        ksiiqwkugmasuwum:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto esaiikawuuqsiwuq;
            kysgskkmgemwecqu:
            sgwigiywwyuoakok:
            goto qoiwsygocigycosk;
            esaiikawuuqsiwuq:
            if (!($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae())) {
                goto oqweykgimegoiqik;
            }
            goto uqecisqimkeikumi;
            uqecisqimkeikumi:
            $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
            goto myqoamuyekasyauk;
            myqoamuyekasyauk:
            oqweykgimegoiqik:
            goto kysgskkmgemwecqu;
            qoiwsygocigycosk:
        }
        goto mkqosogckkycsqow;
        mkqosogckkycsqow:
        ayekommagiogccge:
        goto uakcauwwqmwgsyue;
        cwqasqacoeoymgwm:
        $ycmguuqqaiisymgg = [];
        goto ksiiqwkugmasuwum;
        eukiiwcwsiiugcsa:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto syycweoceqmkaqcu;
        syycweoceqmkaqcu:
        if (!$ikgwqyuyckaewsow) {
            goto wkikiuscuumkuoew;
        }
        goto cwqasqacoeoymgwm;
        ueageciuwyowgsyy:
        wkikiuscuumkuoew:
        goto yaisawwqsacugoem;
        yaisawwqsacugoem:
    }
}

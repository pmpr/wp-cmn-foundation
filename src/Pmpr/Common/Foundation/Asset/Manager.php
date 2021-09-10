<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Asset;

use Exception;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Data\Source;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class Manager extends Common
{
    
    protected ?Component $component = null;
    
    protected ?UrlPackage $package = null;
    
    protected bool $attributeAdded = false;
    
    protected array $localize = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    protected array $sources = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    public function __construct(Component $wksoawcgagcgoask)
    {
        goto kmskmqcgkamsgkcm;
        qigkseceeiekiaic:
        $this->ygegioggqgwwqooe();
        goto isaykouuuwsgwywi;
        kmskmqcgkamsgkcm:
        $this->component = $wksoawcgagcgoask;
        goto qigkseceeiekiaic;
        isaykouuuwsgwywi:
        parent::__construct();
        goto ucwaiqcuysmskowc;
        ucwaiqcuysmskowc:
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            goto ueiyyiokueymucqa;
            oaiikqqsscmywqyk:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto wgmscmycmmwagaqe;
            }
            goto geoygkiuccaqcumg;
            geoygkiuccaqcumg:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto cyeoiysigumciuma;
            ueiyyiokueymucqa:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto ugiskommysmcugig;
            cyeoiysigumciuma:
            if (!$wksoawcgagcgoask) {
                goto oskssywmqgoauwke;
            }
            goto uekmgwcumckmqwsu;
            gqeeocimioewyyou:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\x6d\x61\156\x69\x66\x65\163\x74\x2e\152\163\x6f\156"));
            goto wcckccugqkukymay;
            oeqkeqgkwyayuogc:
            oskssywmqgoauwke:
            goto gqeeocimioewyyou;
            ugiskommysmcugig:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oaiikqqsscmywqyk;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy .= "\57{$wksoawcgagcgoask}";
            goto kwguusaseiauseoi;
            wcckccugqkukymay:
            wgmscmycmmwagaqe:
            goto sokakmqsquykwcmo;
            kwguusaseiauseoi:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto oeqkeqgkwyayuogc;
            sokakmqsquykwcmo:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\155\x69\156\x5f\145\x6e\x71\165\145\165\x65\x5f\x61\x73\x73\145\x74\x73"), [$this, "\163\x77\161\145\161\x77\167\x69\x6f\x65\x79\x6b\x69\145\x75\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\x6f\x67\151\x6e\137\145\x6e\x71\165\145\x75\145\x5f\x61\x73\163\x65\164\x73"), [$this, "\153\x71\x79\167\145\143\165\161\141\x67\145\161\163\167\165\x77"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\162\x6f\x6e\x74\x5f\145\x6e\x71\x75\x65\165\145\x5f\x61\163\163\x65\x74\x73"), [$this, "\x79\145\163\155\x71\x63\x63\x75\141\x65\x63\x67\x65\147\155\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\155\151\156\x5f\154\157\x63\141\x6c\x69\x7a\145\x5f\x76\x61\x72\x69\141\142\x6c\145\x73"), [$this, "\165\x79\145\163\165\167\x65\x65\x73\x6b\171\x69\x79\141\151\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\x6f\147\151\156\x5f\154\157\143\x61\154\x69\172\x65\x5f\166\141\162\151\141\142\154\145\163"), [$this, "\x6b\x79\147\x77\145\165\157\153\163\161\141\157\155\151\x71\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\x72\157\156\x74\137\154\x6f\143\x61\154\151\x7a\x65\x5f\166\141\x72\151\x61\x62\x6c\145\163"), [$this, "\x73\x6f\163\x61\153\x69\143\157\167\155\161\151\x77\x67\x73\163"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto kqocyskgsigykkos;
        gwuiocyoeiciciyw:
        kescwsiuywawyqwu:
        goto oygkgcygoaeaqiom;
        esqcysaoigqicqmq:
        $sqeykgyoooqysmca = self::ADMIN;
        goto gwuiocyoeiciciyw;
        cqwicouukomskmka:
        eyqmqqgqiuscecci:
        goto mmieiykmcqgeuceg;
        wiwugamyyegscqyu:
        awwoieswswoqsqoa:
        goto yyoogcqkcswwkciw;
        oygkgcygoaeaqiom:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\163\143\x72\x69\160\164\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto aqgucgumeessookq;
        kssqyweyyigkmigs:
        if (is_admin()) {
            goto cmkuegkqiwgaeukq;
        }
        goto kawikymokoesioay;
        ycmkyasqkukggogs:
        $sqeykgyoooqysmca = self::FRONT;
        goto ckskeywcckyaciuu;
        kawikymokoesioay:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto oeyaeawyigiygyus;
        }
        goto ycmkyasqkukggogs;
        kqocyskgsigykkos:
        if (!$this->ieqamkssqsaukwqm()) {
            goto eyqmqqgqiuscecci;
        }
        goto kssqyweyyigkmigs;
        wkkqumskaemwemuo:
        yqqmeykkyqoiusiu:
        goto cqwicouukomskmka;
        sycoccuaosmosqsi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\143\162\151\x70\164" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto wkkqumskaemwemuo;
        ckskeywcckyaciuu:
        goto awwoieswswoqsqoa;
        goto yuqmqsuaqqamumac;
        yuqmqsuaqqamumac:
        oeyaeawyigiygyus:
        goto ggqmkgqosuekoycu;
        ggqmkgqosuekoycu:
        $sqeykgyoooqysmca = self::LOGIN;
        goto wiwugamyyegscqyu;
        yyoogcqkcswwkciw:
        goto kescwsiuywawyqwu;
        goto imemamyywgmcwygc;
        mmieiykmcqgeuceg:
        return $scwiymciagumsuiw;
        goto cacosciskaewuaam;
        aqgucgumeessookq:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto yqqmeykkyqoiusiu;
        }
        goto sycoccuaosmosqsi;
        imemamyywgmcwygc:
        cmkuegkqiwgaeukq:
        goto esqcysaoigqicqmq;
        cacosciskaewuaam:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto gkkuagcemwsckgac;
        gkkuagcemwsckgac:
        if (!$this->csaueuycewaiuaay()) {
            goto kcuyacakkwwucqgi;
        }
        goto egeeeeyuoesgayoc;
        eukciagakmsasako:
        return $seiyqiqwcmseaiaq;
        goto gysooekmciuicgyw;
        awykgsqaycauwquo:
        kcuyacakkwwucqgi:
        goto eukciagakmsasako;
        egeeeeyuoesgayoc:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto awykgsqaycauwquo;
        gysooekmciuicgyw:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto iiwuwsuckokcokey;
        wgiwmowkiwcwoakm:
        cusumaiokokiiumq:
        goto ayiwywqikeqgyosm;
        ayiwywqikeqgyosm:
        return $yokgacoigcscwkie;
        goto kssyksgomecayykc;
        iiwuwsuckokcokey:
        if (!$this->csaueuycewaiuaay()) {
            goto cusumaiokokiiumq;
        }
        goto iwmuiuymkouayqyo;
        iwmuiuymkouayqyo:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto wgiwmowkiwcwoakm;
        kssyksgomecayykc:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto qmmweguyeicusqsa;
        kakmqcgeiqcqsioq:
        oymuyqwakkkkueoi:
        goto ykuumqkmwcaekiac;
        gokacuwekwkmygwg:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto kakmqcgeiqcqsioq;
        qmmweguyeicusqsa:
        if (!$this->csaueuycewaiuaay()) {
            goto oymuyqwakkkkueoi;
        }
        goto gokacuwekwkmygwg;
        ykuumqkmwcaekiac:
        return $seiyqiqwcmseaiaq;
        goto qameqycyiiyokigq;
        qameqycyiiyokigq:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto iuusagmiuoomeowm;
        saqqwcqqqwkuouoo:
        kkusugwsckiwcwai:
        goto gkuuwkyosiewqymy;
        kigcoaaceaqkmgqk:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto saqqwcqqqwkuouoo;
        gkuuwkyosiewqymy:
        return $yokgacoigcscwkie;
        goto cqqyaickwcguayai;
        iuusagmiuoomeowm:
        if (!$this->csaueuycewaiuaay()) {
            goto kkusugwsckiwcwai;
        }
        goto kigcoaaceaqkmgqk;
        cqqyaickwcguayai:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto mmaaoasmmgwgcagg;
        mmaaoasmmgwgcagg:
        if (!$this->csaueuycewaiuaay()) {
            goto uuoaaawqaaiesekw;
        }
        goto msmksqwgyomoksem;
        gmomuqswgeaoomwe:
        uuoaaawqaaiesekw:
        goto sgqasakygigqcgmy;
        msmksqwgyomoksem:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto gmomuqswgeaoomwe;
        sgqasakygigqcgmy:
        return $seiyqiqwcmseaiaq;
        goto cggseekycwueosos;
        cggseekycwueosos:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto yegggscmiqaegiua;
        oqcoyawkkcoisqoc:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ewkakyksocksekmg;
        ecwiuigeegaaewqy:
        return $yokgacoigcscwkie;
        goto oaikuoqiukaqmiak;
        yegggscmiqaegiua:
        if (!$this->csaueuycewaiuaay()) {
            goto wkaouucmyqymqsyq;
        }
        goto oqcoyawkkcoisqoc;
        ewkakyksocksekmg:
        wkaouucmyqymqsyq:
        goto ecwiuigeegaaewqy;
        oaikuoqiukaqmiak:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto qumekuwomeeyamwu;
        zoekckiqssqyomyk:
        $eeamcawaiqocomwy .= "\x20\x2f{$wksoawcgagcgoask}";
        goto ciaueooiggcgakuu;
        aeoysqssqcqwauow:
        return $eeamcawaiqocomwy;
        goto uigweyocaqgemmgc;
        ciaueooiggcgakuu:
        eiacwgegiuowcmig:
        goto mwwciqsyskyekkeq;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy .= "\x20\x2f{$ymqmyyeuycgmigyo}";
        goto aeoysqssqcqwauow;
        ykoooseayycgcayu:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto kqueiiioekoawcsy;
        qumekuwomeeyamwu:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto ykoooseayycgcayu;
        kqueiiioekoawcsy:
        if (!$wksoawcgagcgoask) {
            goto eiacwgegiuowcmig;
        }
        goto zoekckiqssqyomyk;
        uigweyocaqgemmgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto oyukuusksqiocwoe;
        gqcqgsiouousmgwy:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto qkqasaogwyiiciem;
        ikquocgacmwgcoyu:
        iiesscwguamgaaoe:
        goto oqwciqwewqwwwqso;
        uwwsaskiyywcqmyy:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto oqeieoywwiqsqwke;
        }
        goto mqyusyqaukgqauos;
        qkqasaogwyiiciem:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto gsqyksumwymkwsas;
        wccmooaikyqkemwc:
        if (preg_match("\x2f\x5c\x2f\x77\160\55\x28\x63\157\x6e\164\145\x6e\x74\x7c\x69\156\x63\x6c\165\x64\x65\163\51\134\x2f\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto iiesscwguamgaaoe;
        }
        goto gcicoimysgieaygo;
        oqqqgemqcqicgomo:
        yasweukayucicyuk:
        goto eceywsecgoyuoqmq;
        yyyawioycsowgayc:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto uwwsaskiyywcqmyy;
        eceywsecgoyuoqmq:
        meciqmqcuiqawkua:
        goto uqkeasmouqogoacq;
        qgkmkykkgeeqyeyy:
        return $sogksuscggsicmac;
        goto ioqaeigausyceicu;
        gsiccqcoquqskcmk:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto gqcqgsiouousmgwy;
        oqwciqwewqwwwqso:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\143\x6f\156\164\145\156\164":
                goto wccggcuyqqweoikc;
                ueqkyiquamyiakgc:
                goto meciqmqcuiqawkua;
                goto wwwqgisgogqgqeom;
                eqecgkeqwuiugeca:
                $eeamcawaiqocomwy = content_url();
                goto ueqkyiquamyiakgc;
                wccggcuyqqweoikc:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto eqecgkeqwuiugeca;
                wwwqgisgogqgqeom:
            case "\151\x6e\143\154\165\144\145\x73":
                goto oassyegiwmwsmiwg;
                wqoysqscuiyuqsai:
                goto meciqmqcuiqawkua;
                goto gimuoawsewokwcky;
                ikmqssocqayyakge:
                $eeamcawaiqocomwy = includes_url();
                goto wqoysqscuiyuqsai;
                oassyegiwmwsmiwg:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto ikmqssocqayyakge;
                gimuoawsewokwcky:
        }
        goto oqqqgemqcqicgomo;
        uqkeasmouqogoacq:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto uugioomkywkukaki;
        }
        goto gsiccqcoquqskcmk;
        oyukuusksqiocwoe:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto wccmooaikyqkemwc;
        mkwemicgqcqyusqw:
        wskqiiwkwcokqaai:
        goto qgkmkykkgeeqyeyy;
        gcicoimysgieaygo:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto yyyawioycsowgayc;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eysugkikgqgegogw;
        gsqyksumwymkwsas:
        uugioomkywkukaki:
        goto mkwemicgqcqyusqw;
        mceeqosocaaaoaog:
        goto wskqiiwkwcokqaai;
        goto ikquocgacmwgcoyu;
        eysugkikgqgegogw:
        oqeieoywwiqsqwke:
        goto mceeqosocaaaoaog;
        ioqaeigausyceicu:
    }
    
    public function cqusmgskowmesgcg() : Component
    {
        return $this->component;
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw();
    }
    
    public function mkwomgueyaaooyye() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__URL, ''));
    }
    
    public function gyguukaswwqgsoag() : string
    {
        return trailingslashit($this->mkwomgueyaaooyye()) . $this->aiqioscoyukqgsgw();
    }
    
    public function qmwkoewmiweimaqe() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__PATH, ''));
    }
    
    public function gikwwgqmwccescgy(string $ymqmyyeuycgmigyo) : ?string
    {
        goto sisisweiyqgccaae;
        wuikqgsgquisuusa:
        return $kqagasmwymmuiksq;
        goto siugkcyicyqcscsc;
        guumaeugmekqeisi:
        try {
            try {
                goto ewsiemmseeuyuwsu;
                qyqymqymoyouceqk:
                if (!$quowyokcwswmuois) {
                    goto suocokcwoqamicms;
                }
                goto cecyuuwcqioiwauu;
                cecyuuwcqioiwauu:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto auwymayuwcamoqgq;
                auwymayuwcamoqgq:
                suocokcwoqamicms:
                goto wscmiwckoyiooekg;
                ewsiemmseeuyuwsu:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto qyqymqymoyouceqk;
                wscmiwckoyiooekg:
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        goto wuikqgsgquisuusa;
        sisisweiyqgccaae:
        $kqagasmwymmuiksq = null;
        goto guumaeugmekqeisi;
        siugkcyicyqcscsc:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto eycmsyeuqqmeooaq;
        ogkquckqwooqiymq:
        wmwocowecyoasqeg:
        goto keoouuycgkayggiq;
        iqmyomeqgiououou:
        try {
            goto qeogscuwaqegqeeu;
            kqaymsayeiukkaay:
            qeggqaqesumwycek:
            goto wgeuisockoogeccc;
            qeogscuwaqegqeeu:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto kuigciykymecwmos;
            aqoygcikqwoegkii:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\x2e\x63\x73\163", "\56\x72\x74\154\x2e\x63\163\x73", $ceuoyocoywikssmy);
            goto kqaymsayeiukkaay;
            kuigciykymecwmos:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\x63\163\163"))) {
                goto qeggqaqesumwycek;
            }
            goto aqoygcikqwoegkii;
            wgeuisockoogeccc:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ogkquckqwooqiymq;
        csywagwikouweiqm:
        if (!$quowyokcwswmuois) {
            goto wmwocowecyoasqeg;
        }
        goto iqmyomeqgiououou;
        keoouuycgkayggiq:
        return $ceuoyocoywikssmy;
        goto mgoaekweikqawgge;
        eycmsyeuqqmeooaq:
        $ceuoyocoywikssmy = null;
        goto gsyuoweeeqoyiygw;
        gsyuoweeeqoyiygw:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto csywagwikouweiqm;
        mgoaekweikqawgge:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\x69\x6c\x64\x5f\x64\x69\x72\145\x63\x74\157\x72\x79"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto wgoawmkecwkieoyk;
        wgoawmkecwkieoyk:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto swyggiaiwsmwessm;
        swyggiaiwsmwessm:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto eseouiwqkgagsiaa;
        cmcemcuymikqukce:
        syumwaimygimyscy:
        goto kwgwooqigowksicc;
        kwgwooqigowksicc:
        return $eeamcawaiqocomwy;
        goto euasgwagscuiswiy;
        qyiigayoyegauwaw:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto cmcemcuymikqukce;
        eseouiwqkgagsiaa:
        $eeamcawaiqocomwy = null;
        goto qqywmguygwscyyae;
        qqywmguygwscyyae:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto syumwaimygimyscy;
        }
        goto qyiigayoyegauwaw;
        euasgwagscuiswiy:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto ccgaaokwqeiycemk;
        ekwmkkmwckeiaugc:
        $this->ygegioggqgwwqooe();
        goto oocsqwaeuuqceiky;
        mmekseaoqiouuycc:
        return $this->package;
        goto gkwywcweoaacsqqi;
        oocsqwaeuuqceiky:
        scwseaueieuugecs:
        goto mmekseaoqiouuycc;
        ccgaaokwqeiycemk:
        if ($this->package) {
            goto scwseaueieuugecs;
        }
        goto ekwmkkmwckeiaugc;
        gkwywcweoaacsqqi:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto qyuguuqgysiqsaww;
        ugasqyoegamcgqco:
        return "{$mkomwsiykqigmqca}\57{$kqagasmwymmuiksq}";
        goto ymsymwiockkscikc;
        gicqcsqmkgiyeoss:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto ugasqyoegamcgqco;
        qyuguuqgysiqsaww:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto gicqcsqmkgiyeoss;
        ymsymwiockkscikc:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto owusgguueuoikwim;
        aueusukugaqgmuqe:
        goto ekikcgogkomooqia;
        goto mquqekumeaoswgye;
        cmgogcekgkgwakua:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto uwgamgyakeacquiu;
        usuewcmsgysskeca:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\144\145\146\163\76\133\x5c\163\134\x53\x5d\52\77\x3c\x5c\57\144\x65\146\163\76\57", '', $wkaqekwwgqsqwcoi);
        goto sigyamiisqewqwkm;
        ocaguoikqsymkaaw:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto logyqqoeosuimcmi;
        gaqeewuasmsgumsg:
        ygomiqmeacmoogqa:
        goto suwiwmkogwymwqec;
        mquqekumeaoswgye:
        kaccuquekgoomume:
        goto ocaguoikqsymkaaw;
        aokomqwsiyysawim:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto aueusukugaqgmuqe;
        mscukwykcksygqkg:
        
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\x3c\41\x2d\55\133\134\163\134\123\x5d\x2a\x3f\55\55\76\x2f", '', $wkaqekwwgqsqwcoi);
        goto usuewcmsgysskeca;
        sigyamiisqewqwkm:
        csicyuisekuyiuys:
        goto gesswekoguscuise;
        owusgguueuoikwim:
        if (!$wkaqekwwgqsqwcoi) {
            goto ygomiqmeacmoogqa;
        }
        goto wgeiswcaskeoeewk;
        logyqqoeosuimcmi:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto csicyuisekuyiuys;
        }
        goto mscukwykcksygqkg;
        uwgamgyakeacquiu:
        if ($ewgwqamkygiqaawc) {
            goto kaccuquekgoomume;
        }
        goto aokomqwsiyysawim;
        wgeiswcaskeoeewk:
        $ceuoyocoywikssmy = "\x69\x6d\147\57\x73\166\147\x2f\151\x63\157\x6e\57{$wkaqekwwgqsqwcoi}\56\163\x76\x67";
        goto cmgogcekgkgwakua;
        gesswekoguscuise:
        ekikcgogkomooqia:
        goto gaqeewuasmsgumsg;
        suwiwmkogwymwqec:
        return $wkaqekwwgqsqwcoi;
        goto akcqewkmyeqsmqcg;
        akcqewkmyeqsmqcg:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto gmeegkiyasyqwyqq;
        wycieuuioyumuaim:
        goto kwckkiekaoaaukkk;
        goto cycqgciuqgyacwyy;
        qeoakikuyiyksguo:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto mucuuagawemmkwug;
        }
        goto uayiuioememomcuc;
        eyugqqoqukeiuowe:
        return $ewgwqamkygiqaawc;
        goto oowggkeeseuskeio;
        gmeegkiyasyqwyqq:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto aqciayqccmoesccw;
        }
        goto qmmwceyuwsagkgqs;
        uayiuioememomcuc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto umkaquamukuuqeii;
        uwoqemmymksauskq:
        $ewgwqamkygiqaawc = false;
        goto iqamqqkameysgiwm;
        umkaquamukuuqeii:
        mucuuagawemmkwug:
        goto eyugqqoqukeiuowe;
        cycqgciuqgyacwyy:
        aqciayqccmoesccw:
        goto wsqqoqwykgsoeweu;
        qmmwceyuwsagkgqs:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto coyyauuykuwacoes;
        wasqmeqaayyqckwa:
        kwckkiekaoaaukkk:
        goto uwoqemmymksauskq;
        coyyauuykuwacoes:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto wycieuuioyumuaim;
        iqamqqkameysgiwm:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto qeoakikuyiyksguo;
        wsqqoqwykgsoeweu:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto wasqmeqaayyqckwa;
        oowggkeeseuskeio:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto cwayuyemyqsewgkc;
        cwayuyemyqsewgkc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto mqgkywcmemsukuck;
        mmwoqyscsyyccmgc:
        return $this;
        goto swiiswsgcesakeei;
        gcsmyoouiugsuywu:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto mmwoqyscsyyccmgc;
        mqgkywcmemsukuck:
        if (!$uukmwiwiqwyaaegk) {
            goto oqiqgegsqcoeiesa;
        }
        goto wyggeaoiwkkiewgy;
        wyggeaoiwkkiewgy:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto ycmeseaweuwkuksm;
        ycmeseaweuwkuksm:
        oqiqgegsqcoeiesa:
        goto gcsmyoouiugsuywu;
        swiiswsgcesakeei:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto wygsgseuikmkckig;
        wygsgseuikmkckig:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            icikesyuoswkwyag:
        }
        goto iagouugawsuswccu;
        iagouugawsuswccu:
        ouyskuyuekeeeuku:
        goto aygkqeyqeguyaumo;
        aygkqeyqeguyaumo:
        return $this;
        goto wawgcwguamqgekis;
        wawgcwguamqgekis:
    }
    
    public function ieayqiyiuuguowyq(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function iagmuqogkyysiick($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function gauosiuwaieksway(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function oaoisgmqkamuoeam($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function ikqyiskqaaymscgw(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq);
    }
    
    public function ssguskiqaagaauoy($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq);
    }
    
    private function seimiyccuwecawki(string $eueuqacmukymcyya, $ogomymegcoacqisg = false, string $sqeykgyoooqysmca = self::STYLE) : Source
    {
        return new Source("{$this->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca);
    }
    
    public function awgyqswkqywwmkye(string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $geecqyososceumsk, self::STYLE);
    }
    
    public function owygwqwawqoiusis(string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $ogomymegcoacqisg, self::SCRIPT);
    }
    
    public function ayeieigcckcmsikq(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::ADMIN);
    }
    
    public function oeoquuwkoywiuesy(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::FRONT);
    }
    
    public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::LOGIN);
    }
    
    public function gmgiuyeyoguqqccw() : array
    {
        return $this->sources;
    }
    
    private function yimkcammomikeegq($uusmaiomayssaecw, $sqeykgyoooqysmca = self::ADMIN) : ?Source
    {
        $yokgacoigcscwkie = ManipulateArray::get($this->gmgiuyeyoguqqccw(), $sqeykgyoooqysmca, []);
        return ManipulateArray::get($yokgacoigcscwkie, $uusmaiomayssaecw);
    }
    
    private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $sqeykgyoooqysmca = self::ADMIN) : self
    {
        goto syysuweucygqsgoo;
        kuioacgcmuoukscw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto kummqkwyeiomswyy;
        giqymigmomaaoicm:
        $this->cecaguuoecmccuse("\163\x63\x72\x69\160\164\x5f\x6c\x6f\x61\x64\x65\162\137\164\x61\x67", [$this, "\x65\x63\157\161\157\157\151\165\171\155\163\147\141\x6b\x79\163"], 10, 2);
        goto iuwmasqwsuqgcwmg;
        kummqkwyeiomswyy:
        return $this;
        goto wyuagceiqgqoggeu;
        syysuweucygqsgoo:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto gwyqsaswyiicuoke;
        }
        goto giqymigmomaaoicm;
        meoicwqckywiwaii:
        gwyqsaswyiicuoke:
        goto kuioacgcmuoukscw;
        iuwmasqwsuqgcwmg:
        $this->attributeAdded = true;
        goto meoicwqckywiwaii;
        wyuagceiqgqoggeu:
    }
    
    public function yomasssaasmawcso(string $eueuqacmukymcyya) : string
    {
        return "{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}";
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return !ManipulateAjax::mcgoysmkqsqooceq() && !ManipulateServer::smowememmgeukwki();
    }
}

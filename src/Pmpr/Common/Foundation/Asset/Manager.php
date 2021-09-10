<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        isaykouuuwsgwywi:
        parent::__construct();
        goto ucwaiqcuysmskowc;
        qigkseceeiekiaic:
        $this->ygegioggqgwwqooe();
        goto isaykouuuwsgwywi;
        kmskmqcgkamsgkcm:
        $this->component = $wksoawcgagcgoask;
        goto qigkseceeiekiaic;
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
            ueiyyiokueymucqa:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto ugiskommysmcugig;
            oeqkeqgkwyayuogc:
            oskssywmqgoauwke:
            goto gqeeocimioewyyou;
            ugiskommysmcugig:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oaiikqqsscmywqyk;
            geoygkiuccaqcumg:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto cyeoiysigumciuma;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy .= "\57{$wksoawcgagcgoask}";
            goto kwguusaseiauseoi;
            gqeeocimioewyyou:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\57\155\x61\156\151\146\x65\x73\x74\56\152\163\x6f\156"));
            goto wcckccugqkukymay;
            oaiikqqsscmywqyk:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto wgmscmycmmwagaqe;
            }
            goto geoygkiuccaqcumg;
            wcckccugqkukymay:
            wgmscmycmmwagaqe:
            goto sokakmqsquykwcmo;
            cyeoiysigumciuma:
            if (!$wksoawcgagcgoask) {
                goto oskssywmqgoauwke;
            }
            goto uekmgwcumckmqwsu;
            kwguusaseiauseoi:
            $mkomwsiykqigmqca .= "\57{$wksoawcgagcgoask}";
            goto oeqkeqgkwyayuogc;
            sokakmqsquykwcmo:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\155\151\x6e\137\145\x6e\x71\165\x65\x75\145\x5f\141\x73\x73\x65\x74\163"), [$this, "\x73\167\x71\x65\161\167\167\x69\157\x65\171\153\151\x65\x75\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\x67\x69\x6e\x5f\145\156\161\x75\145\165\145\137\141\163\163\x65\x74\x73"), [$this, "\153\x71\x79\x77\145\x63\165\x71\141\x67\145\x71\x73\167\x75\x77"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\157\x6e\164\x5f\x65\156\x71\x75\145\165\145\x5f\141\x73\163\145\x74\x73"), [$this, "\x79\145\163\x6d\161\143\x63\165\141\x65\x63\147\x65\147\x6d\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\x6d\x69\156\x5f\x6c\x6f\x63\x61\x6c\151\172\145\137\x76\141\x72\x69\x61\x62\154\145\163"), [$this, "\165\171\145\163\165\x77\x65\145\163\x6b\x79\151\x79\141\x69\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\157\147\x69\156\x5f\154\157\x63\x61\x6c\151\x7a\x65\x5f\166\x61\x72\151\x61\142\154\145\x73"), [$this, "\x6b\171\147\x77\145\x75\x6f\153\x73\x71\141\x6f\x6d\x69\x71\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\162\x6f\x6e\164\137\x6c\157\143\141\x6c\x69\172\145\x5f\166\x61\x72\151\x61\142\x6c\145\163"), [$this, "\163\x6f\163\141\153\x69\143\x6f\x77\x6d\161\151\x77\147\x73\163"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto kqocyskgsigykkos;
        yuqmqsuaqqamumac:
        oeyaeawyigiygyus:
        goto ggqmkgqosuekoycu;
        oygkgcygoaeaqiom:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\x73\143\162\x69\160\164\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto aqgucgumeessookq;
        wkkqumskaemwemuo:
        yqqmeykkyqoiusiu:
        goto cqwicouukomskmka;
        yyoogcqkcswwkciw:
        goto kescwsiuywawyqwu;
        goto imemamyywgmcwygc;
        kawikymokoesioay:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto oeyaeawyigiygyus;
        }
        goto ycmkyasqkukggogs;
        wiwugamyyegscqyu:
        awwoieswswoqsqoa:
        goto yyoogcqkcswwkciw;
        sycoccuaosmosqsi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\x73\143\162\x69\x70\164" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto wkkqumskaemwemuo;
        cqwicouukomskmka:
        eyqmqqgqiuscecci:
        goto mmieiykmcqgeuceg;
        ckskeywcckyaciuu:
        goto awwoieswswoqsqoa;
        goto yuqmqsuaqqamumac;
        ycmkyasqkukggogs:
        $sqeykgyoooqysmca = self::FRONT;
        goto ckskeywcckyaciuu;
        imemamyywgmcwygc:
        cmkuegkqiwgaeukq:
        goto esqcysaoigqicqmq;
        kqocyskgsigykkos:
        if (!$this->ieqamkssqsaukwqm()) {
            goto eyqmqqgqiuscecci;
        }
        goto kssqyweyyigkmigs;
        kssqyweyyigkmigs:
        if (is_admin()) {
            goto cmkuegkqiwgaeukq;
        }
        goto kawikymokoesioay;
        aqgucgumeessookq:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto yqqmeykkyqoiusiu;
        }
        goto sycoccuaosmosqsi;
        esqcysaoigqicqmq:
        $sqeykgyoooqysmca = self::ADMIN;
        goto gwuiocyoeiciciyw;
        mmieiykmcqgeuceg:
        return $scwiymciagumsuiw;
        goto cacosciskaewuaam;
        ggqmkgqosuekoycu:
        $sqeykgyoooqysmca = self::LOGIN;
        goto wiwugamyyegscqyu;
        gwuiocyoeiciciyw:
        kescwsiuywawyqwu:
        goto oygkgcygoaeaqiom;
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
        egeeeeyuoesgayoc:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto awykgsqaycauwquo;
        eukciagakmsasako:
        return $seiyqiqwcmseaiaq;
        goto gysooekmciuicgyw;
        awykgsqaycauwquo:
        kcuyacakkwwucqgi:
        goto eukciagakmsasako;
        gysooekmciuicgyw:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto iiwuwsuckokcokey;
        iwmuiuymkouayqyo:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto wgiwmowkiwcwoakm;
        iiwuwsuckokcokey:
        if (!$this->csaueuycewaiuaay()) {
            goto cusumaiokokiiumq;
        }
        goto iwmuiuymkouayqyo;
        wgiwmowkiwcwoakm:
        cusumaiokokiiumq:
        goto ayiwywqikeqgyosm;
        ayiwywqikeqgyosm:
        return $yokgacoigcscwkie;
        goto kssyksgomecayykc;
        kssyksgomecayykc:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto qmmweguyeicusqsa;
        ykuumqkmwcaekiac:
        return $seiyqiqwcmseaiaq;
        goto qameqycyiiyokigq;
        kakmqcgeiqcqsioq:
        oymuyqwakkkkueoi:
        goto ykuumqkmwcaekiac;
        qmmweguyeicusqsa:
        if (!$this->csaueuycewaiuaay()) {
            goto oymuyqwakkkkueoi;
        }
        goto gokacuwekwkmygwg;
        gokacuwekwkmygwg:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto kakmqcgeiqcqsioq;
        qameqycyiiyokigq:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto iuusagmiuoomeowm;
        saqqwcqqqwkuouoo:
        kkusugwsckiwcwai:
        goto gkuuwkyosiewqymy;
        gkuuwkyosiewqymy:
        return $yokgacoigcscwkie;
        goto cqqyaickwcguayai;
        kigcoaaceaqkmgqk:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto saqqwcqqqwkuouoo;
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
        msmksqwgyomoksem:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto gmomuqswgeaoomwe;
        gmomuqswgeaoomwe:
        uuoaaawqaaiesekw:
        goto sgqasakygigqcgmy;
        mmaaoasmmgwgcagg:
        if (!$this->csaueuycewaiuaay()) {
            goto uuoaaawqaaiesekw;
        }
        goto msmksqwgyomoksem;
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
        yegggscmiqaegiua:
        if (!$this->csaueuycewaiuaay()) {
            goto wkaouucmyqymqsyq;
        }
        goto oqcoyawkkcoisqoc;
        ewkakyksocksekmg:
        wkaouucmyqymqsyq:
        goto ecwiuigeegaaewqy;
        ecwiuigeegaaewqy:
        return $yokgacoigcscwkie;
        goto oaikuoqiukaqmiak;
        oaikuoqiukaqmiak:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto qumekuwomeeyamwu;
        ciaueooiggcgakuu:
        eiacwgegiuowcmig:
        goto mwwciqsyskyekkeq;
        zoekckiqssqyomyk:
        $eeamcawaiqocomwy .= "\x20\57{$wksoawcgagcgoask}";
        goto ciaueooiggcgakuu;
        ykoooseayycgcayu:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto kqueiiioekoawcsy;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy .= "\40\x2f{$ymqmyyeuycgmigyo}";
        goto aeoysqssqcqwauow;
        kqueiiioekoawcsy:
        if (!$wksoawcgagcgoask) {
            goto eiacwgegiuowcmig;
        }
        goto zoekckiqssqyomyk;
        aeoysqssqcqwauow:
        return $eeamcawaiqocomwy;
        goto uigweyocaqgemmgc;
        qumekuwomeeyamwu:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto ykoooseayycgcayu;
        uigweyocaqgemmgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto oyukuusksqiocwoe;
        gcicoimysgieaygo:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto yyyawioycsowgayc;
        wccmooaikyqkemwc:
        if (preg_match("\x2f\x5c\57\x77\160\x2d\x28\x63\x6f\156\164\145\156\x74\x7c\151\x6e\x63\x6c\165\144\145\163\51\x5c\57\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto iiesscwguamgaaoe;
        }
        goto gcicoimysgieaygo;
        oyukuusksqiocwoe:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto wccmooaikyqkemwc;
        uwwsaskiyywcqmyy:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto oqeieoywwiqsqwke;
        }
        goto mqyusyqaukgqauos;
        qkqasaogwyiiciem:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto gsqyksumwymkwsas;
        oqwciqwewqwwwqso:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\143\x6f\156\164\145\156\x74":
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
            case "\151\x6e\x63\154\165\144\x65\163":
                goto oassyegiwmwsmiwg;
                ikmqssocqayyakge:
                $eeamcawaiqocomwy = includes_url();
                goto wqoysqscuiyuqsai;
                oassyegiwmwsmiwg:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto ikmqssocqayyakge;
                wqoysqscuiyuqsai:
                goto meciqmqcuiqawkua;
                goto gimuoawsewokwcky;
                gimuoawsewokwcky:
        }
        goto oqqqgemqcqicgomo;
        uqkeasmouqogoacq:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto uugioomkywkukaki;
        }
        goto gsiccqcoquqskcmk;
        eceywsecgoyuoqmq:
        meciqmqcuiqawkua:
        goto uqkeasmouqogoacq;
        gsqyksumwymkwsas:
        uugioomkywkukaki:
        goto mkwemicgqcqyusqw;
        eysugkikgqgegogw:
        oqeieoywwiqsqwke:
        goto mceeqosocaaaoaog;
        qgkmkykkgeeqyeyy:
        return $sogksuscggsicmac;
        goto ioqaeigausyceicu;
        mkwemicgqcqyusqw:
        wskqiiwkwcokqaai:
        goto qgkmkykkgeeqyeyy;
        ikquocgacmwgcoyu:
        iiesscwguamgaaoe:
        goto oqwciqwewqwwwqso;
        mceeqosocaaaoaog:
        goto wskqiiwkwcokqaai;
        goto ikquocgacmwgcoyu;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eysugkikgqgegogw;
        oqqqgemqcqicgomo:
        yasweukayucicyuk:
        goto eceywsecgoyuoqmq;
        gsiccqcoquqskcmk:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto gqcqgsiouousmgwy;
        yyyawioycsowgayc:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto uwwsaskiyywcqmyy;
        gqcqgsiouousmgwy:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto qkqasaogwyiiciem;
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
                auwymayuwcamoqgq:
                suocokcwoqamicms:
                goto wscmiwckoyiooekg;
                cecyuuwcqioiwauu:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto auwymayuwcamoqgq;
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
        eycmsyeuqqmeooaq:
        $ceuoyocoywikssmy = null;
        goto gsyuoweeeqoyiygw;
        gsyuoweeeqoyiygw:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto csywagwikouweiqm;
        ogkquckqwooqiymq:
        wmwocowecyoasqeg:
        goto keoouuycgkayggiq;
        iqmyomeqgiououou:
        try {
            goto qeogscuwaqegqeeu;
            aqoygcikqwoegkii:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\56\143\x73\163", "\x2e\162\x74\154\x2e\x63\163\163", $ceuoyocoywikssmy);
            goto kqaymsayeiukkaay;
            qeogscuwaqegqeeu:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto kuigciykymecwmos;
            kqaymsayeiukkaay:
            qeggqaqesumwycek:
            goto wgeuisockoogeccc;
            kuigciykymecwmos:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\143\163\163"))) {
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
        mgoaekweikqawgge:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\x69\154\144\x5f\144\x69\162\x65\143\164\157\162\171"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto wgoawmkecwkieoyk;
        wgoawmkecwkieoyk:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto swyggiaiwsmwessm;
        eseouiwqkgagsiaa:
        $eeamcawaiqocomwy = null;
        goto qqywmguygwscyyae;
        qyiigayoyegauwaw:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto cmcemcuymikqukce;
        swyggiaiwsmwessm:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto eseouiwqkgagsiaa;
        cmcemcuymikqukce:
        syumwaimygimyscy:
        goto kwgwooqigowksicc;
        qqywmguygwscyyae:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto syumwaimygimyscy;
        }
        goto qyiigayoyegauwaw;
        kwgwooqigowksicc:
        return $eeamcawaiqocomwy;
        goto euasgwagscuiswiy;
        euasgwagscuiswiy:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto ccgaaokwqeiycemk;
        ccgaaokwqeiycemk:
        if ($this->package) {
            goto scwseaueieuugecs;
        }
        goto ekwmkkmwckeiaugc;
        mmekseaoqiouuycc:
        return $this->package;
        goto gkwywcweoaacsqqi;
        oocsqwaeuuqceiky:
        scwseaueieuugecs:
        goto mmekseaoqiouuycc;
        ekwmkkmwckeiaugc:
        $this->ygegioggqgwwqooe();
        goto oocsqwaeuuqceiky;
        gkwywcweoaacsqqi:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto qyuguuqgysiqsaww;
        qyuguuqgysiqsaww:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto gicqcsqmkgiyeoss;
        gicqcsqmkgiyeoss:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto ugasqyoegamcgqco;
        ugasqyoegamcgqco:
        return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}";
        goto ymsymwiockkscikc;
        ymsymwiockkscikc:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto owusgguueuoikwim;
        mquqekumeaoswgye:
        kaccuquekgoomume:
        goto ocaguoikqsymkaaw;
        usuewcmsgysskeca:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\144\x65\146\163\x3e\x5b\134\163\134\x53\x5d\52\77\x3c\x5c\x2f\x64\145\x66\163\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto sigyamiisqewqwkm;
        gesswekoguscuise:
        ekikcgogkomooqia:
        goto gaqeewuasmsgumsg;
        suwiwmkogwymwqec:
        return $wkaqekwwgqsqwcoi;
        goto akcqewkmyeqsmqcg;
        gaqeewuasmsgumsg:
        ygomiqmeacmoogqa:
        goto suwiwmkogwymwqec;
        owusgguueuoikwim:
        if (!$wkaqekwwgqsqwcoi) {
            goto ygomiqmeacmoogqa;
        }
        goto wgeiswcaskeoeewk;
        cmgogcekgkgwakua:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto uwgamgyakeacquiu;
        uwgamgyakeacquiu:
        if ($ewgwqamkygiqaawc) {
            goto kaccuquekgoomume;
        }
        goto aokomqwsiyysawim;
        aueusukugaqgmuqe:
        goto ekikcgogkomooqia;
        goto mquqekumeaoswgye;
        logyqqoeosuimcmi:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto csicyuisekuyiuys;
        }
        goto mscukwykcksygqkg;
        mscukwykcksygqkg:
        
        $wkaqekwwgqsqwcoi = preg_replace("\57\x3c\x21\55\55\x5b\x5c\x73\x5c\x53\135\52\x3f\x2d\55\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto usuewcmsgysskeca;
        wgeiswcaskeoeewk:
        $ceuoyocoywikssmy = "\151\155\147\x2f\x73\166\x67\x2f\151\143\x6f\x6e\x2f{$wkaqekwwgqsqwcoi}\56\x73\166\147";
        goto cmgogcekgkgwakua;
        aokomqwsiyysawim:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto aueusukugaqgmuqe;
        ocaguoikqsymkaaw:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto logyqqoeosuimcmi;
        sigyamiisqewqwkm:
        csicyuisekuyiuys:
        goto gesswekoguscuise;
        akcqewkmyeqsmqcg:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto gmeegkiyasyqwyqq;
        cycqgciuqgyacwyy:
        aqciayqccmoesccw:
        goto wsqqoqwykgsoeweu;
        gmeegkiyasyqwyqq:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto aqciayqccmoesccw;
        }
        goto qmmwceyuwsagkgqs;
        qeoakikuyiyksguo:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto mucuuagawemmkwug;
        }
        goto uayiuioememomcuc;
        iqamqqkameysgiwm:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto qeoakikuyiyksguo;
        umkaquamukuuqeii:
        mucuuagawemmkwug:
        goto eyugqqoqukeiuowe;
        uwoqemmymksauskq:
        $ewgwqamkygiqaawc = false;
        goto iqamqqkameysgiwm;
        uayiuioememomcuc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto umkaquamukuuqeii;
        eyugqqoqukeiuowe:
        return $ewgwqamkygiqaawc;
        goto oowggkeeseuskeio;
        wsqqoqwykgsoeweu:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto wasqmeqaayyqckwa;
        wycieuuioyumuaim:
        goto kwckkiekaoaaukkk;
        goto cycqgciuqgyacwyy;
        coyyauuykuwacoes:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto wycieuuioyumuaim;
        qmmwceyuwsagkgqs:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto coyyauuykuwacoes;
        wasqmeqaayyqckwa:
        kwckkiekaoaaukkk:
        goto uwoqemmymksauskq;
        oowggkeeseuskeio:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto cwayuyemyqsewgkc;
        wyggeaoiwkkiewgy:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto ycmeseaweuwkuksm;
        cwayuyemyqsewgkc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto mqgkywcmemsukuck;
        ycmeseaweuwkuksm:
        oqiqgegsqcoeiesa:
        goto gcsmyoouiugsuywu;
        gcsmyoouiugsuywu:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto mmwoqyscsyyccmgc;
        mmwoqyscsyyccmgc:
        return $this;
        goto swiiswsgcesakeei;
        mqgkywcmemsukuck:
        if (!$uukmwiwiqwyaaegk) {
            goto oqiqgegsqcoeiesa;
        }
        goto wyggeaoiwkkiewgy;
        swiiswsgcesakeei:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto wygsgseuikmkckig;
        aygkqeyqeguyaumo:
        return $this;
        goto wawgcwguamqgekis;
        iagouugawsuswccu:
        ouyskuyuekeeeuku:
        goto aygkqeyqeguyaumo;
        wygsgseuikmkckig:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            icikesyuoswkwyag:
        }
        goto iagouugawsuswccu;
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
        return new Source("{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca);
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
        syysuweucygqsgoo:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto gwyqsaswyiicuoke;
        }
        goto giqymigmomaaoicm;
        giqymigmomaaoicm:
        $this->cecaguuoecmccuse("\163\x63\x72\151\x70\x74\x5f\154\x6f\141\x64\145\162\137\164\x61\x67", [$this, "\x65\143\157\161\x6f\157\151\x75\x79\x6d\x73\147\141\x6b\171\x73"], 10, 2);
        goto iuwmasqwsuqgcwmg;
        kummqkwyeiomswyy:
        return $this;
        goto wyuagceiqgqoggeu;
        kuioacgcmuoukscw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto kummqkwyeiomswyy;
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
        return "{$this->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}";
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return !ManipulateAjax::mcgoysmkqsqooceq() && !ManipulateServer::smowememmgeukwki();
    }
}

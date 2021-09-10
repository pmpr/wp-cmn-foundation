<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto wgmscmycmmwagaqe;
        ueiyyiokueymucqa:
        $this->ygegioggqgwwqooe();
        goto ugiskommysmcugig;
        wgmscmycmmwagaqe:
        $this->component = $wksoawcgagcgoask;
        goto ueiyyiokueymucqa;
        ugiskommysmcugig:
        parent::__construct();
        goto oaiikqqsscmywqyk;
        oaiikqqsscmywqyk:
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            goto uekmgwcumckmqwsu;
            kwguusaseiauseoi:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oeqkeqgkwyayuogc;
            awwoieswswoqsqoa:
            geoygkiuccaqcumg:
            goto cmkuegkqiwgaeukq;
            oeqkeqgkwyayuogc:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto cyeoiysigumciuma;
            }
            goto gqeeocimioewyyou;
            oeyaeawyigiygyus:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto awwoieswswoqsqoa;
            cmkuegkqiwgaeukq:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\x6d\x61\x6e\x69\146\x65\x73\164\x2e\x6a\x73\x6f\156"));
            goto kescwsiuywawyqwu;
            sokakmqsquykwcmo:
            $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}";
            goto oeyaeawyigiygyus;
            wcckccugqkukymay:
            if (!$wksoawcgagcgoask) {
                goto geoygkiuccaqcumg;
            }
            goto sokakmqsquykwcmo;
            gqeeocimioewyyou:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto wcckccugqkukymay;
            kescwsiuywawyqwu:
            cyeoiysigumciuma:
            goto yqqmeykkyqoiusiu;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto kwguusaseiauseoi;
            yqqmeykkyqoiusiu:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\155\151\156\x5f\x65\x6e\161\x75\x65\165\145\x5f\141\163\163\145\164\163"), [$this, "\163\167\161\x65\161\167\167\x69\x6f\x65\x79\x6b\x69\x65\x75\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\157\147\151\156\x5f\145\x6e\161\165\x65\165\x65\137\141\163\163\x65\x74\x73"), [$this, "\153\x71\x79\167\145\x63\165\x71\141\x67\x65\x71\163\x77\x75\167"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\162\x6f\156\x74\137\x65\156\161\165\145\165\x65\x5f\x61\163\x73\145\164\163"), [$this, "\171\145\x73\155\161\x63\143\x75\141\145\x63\147\x65\147\x6d\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\x6d\151\156\x5f\x6c\157\x63\x61\154\151\172\145\137\166\141\x72\x69\x61\x62\154\x65\x73"), [$this, "\x75\171\145\x73\x75\x77\145\145\163\153\x79\x69\x79\x61\x69\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\147\x69\x6e\137\x6c\157\x63\141\x6c\151\172\x65\x5f\x76\141\162\x69\141\x62\154\x65\x73"), [$this, "\153\x79\x67\167\145\x75\x6f\x6b\x73\161\141\157\155\x69\161\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\x72\157\156\164\x5f\x6c\157\143\141\x6c\x69\x7a\145\x5f\166\141\162\151\x61\x62\x6c\145\163"), [$this, "\163\157\x73\141\153\x69\x63\157\x77\x6d\x71\x69\x77\x67\x73\x73"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto yuqmqsuaqqamumac;
        wkkqumskaemwemuo:
        $sqeykgyoooqysmca = self::ADMIN;
        goto cqwicouukomskmka;
        gkkuagcemwsckgac:
        ycmkyasqkukggogs:
        goto egeeeeyuoesgayoc;
        wiwugamyyegscqyu:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto eyqmqqgqiuscecci;
        }
        goto yyoogcqkcswwkciw;
        esqcysaoigqicqmq:
        eyqmqqgqiuscecci:
        goto gwuiocyoeiciciyw;
        cacosciskaewuaam:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto ycmkyasqkukggogs;
        }
        goto kcuyacakkwwucqgi;
        ggqmkgqosuekoycu:
        if (is_admin()) {
            goto kssqyweyyigkmigs;
        }
        goto wiwugamyyegscqyu;
        kcuyacakkwwucqgi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\x63\162\151\x70\x74" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto gkkuagcemwsckgac;
        imemamyywgmcwygc:
        goto kqocyskgsigykkos;
        goto esqcysaoigqicqmq;
        oygkgcygoaeaqiom:
        kqocyskgsigykkos:
        goto aqgucgumeessookq;
        sycoccuaosmosqsi:
        kssqyweyyigkmigs:
        goto wkkqumskaemwemuo;
        yyoogcqkcswwkciw:
        $sqeykgyoooqysmca = self::FRONT;
        goto imemamyywgmcwygc;
        aqgucgumeessookq:
        goto kawikymokoesioay;
        goto sycoccuaosmosqsi;
        yuqmqsuaqqamumac:
        if (!$this->ieqamkssqsaukwqm()) {
            goto ckskeywcckyaciuu;
        }
        goto ggqmkgqosuekoycu;
        egeeeeyuoesgayoc:
        ckskeywcckyaciuu:
        goto awykgsqaycauwquo;
        awykgsqaycauwquo:
        return $scwiymciagumsuiw;
        goto eukciagakmsasako;
        mmieiykmcqgeuceg:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\x73\143\162\151\x70\x74\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto cacosciskaewuaam;
        cqwicouukomskmka:
        kawikymokoesioay:
        goto mmieiykmcqgeuceg;
        gwuiocyoeiciciyw:
        $sqeykgyoooqysmca = self::LOGIN;
        goto oygkgcygoaeaqiom;
        eukciagakmsasako:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto cusumaiokokiiumq;
        cusumaiokokiiumq:
        if (!$this->csaueuycewaiuaay()) {
            goto gysooekmciuicgyw;
        }
        goto iiwuwsuckokcokey;
        iiwuwsuckokcokey:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto iwmuiuymkouayqyo;
        iwmuiuymkouayqyo:
        gysooekmciuicgyw:
        goto wgiwmowkiwcwoakm;
        wgiwmowkiwcwoakm:
        return $seiyqiqwcmseaiaq;
        goto ayiwywqikeqgyosm;
        ayiwywqikeqgyosm:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto oymuyqwakkkkueoi;
        qmmweguyeicusqsa:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto gokacuwekwkmygwg;
        gokacuwekwkmygwg:
        kssyksgomecayykc:
        goto kakmqcgeiqcqsioq;
        oymuyqwakkkkueoi:
        if (!$this->csaueuycewaiuaay()) {
            goto kssyksgomecayykc;
        }
        goto qmmweguyeicusqsa;
        kakmqcgeiqcqsioq:
        return $yokgacoigcscwkie;
        goto ykuumqkmwcaekiac;
        ykuumqkmwcaekiac:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto kkusugwsckiwcwai;
        iuusagmiuoomeowm:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto kigcoaaceaqkmgqk;
        saqqwcqqqwkuouoo:
        return $seiyqiqwcmseaiaq;
        goto gkuuwkyosiewqymy;
        kkusugwsckiwcwai:
        if (!$this->csaueuycewaiuaay()) {
            goto qameqycyiiyokigq;
        }
        goto iuusagmiuoomeowm;
        kigcoaaceaqkmgqk:
        qameqycyiiyokigq:
        goto saqqwcqqqwkuouoo;
        gkuuwkyosiewqymy:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto uuoaaawqaaiesekw;
        mmaaoasmmgwgcagg:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto msmksqwgyomoksem;
        gmomuqswgeaoomwe:
        return $yokgacoigcscwkie;
        goto sgqasakygigqcgmy;
        uuoaaawqaaiesekw:
        if (!$this->csaueuycewaiuaay()) {
            goto cqqyaickwcguayai;
        }
        goto mmaaoasmmgwgcagg;
        msmksqwgyomoksem:
        cqqyaickwcguayai:
        goto gmomuqswgeaoomwe;
        sgqasakygigqcgmy:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto wkaouucmyqymqsyq;
        ewkakyksocksekmg:
        return $seiyqiqwcmseaiaq;
        goto ecwiuigeegaaewqy;
        oqcoyawkkcoisqoc:
        cggseekycwueosos:
        goto ewkakyksocksekmg;
        yegggscmiqaegiua:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto oqcoyawkkcoisqoc;
        wkaouucmyqymqsyq:
        if (!$this->csaueuycewaiuaay()) {
            goto cggseekycwueosos;
        }
        goto yegggscmiqaegiua;
        ecwiuigeegaaewqy:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto eiacwgegiuowcmig;
        qumekuwomeeyamwu:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ykoooseayycgcayu;
        kqueiiioekoawcsy:
        return $yokgacoigcscwkie;
        goto zoekckiqssqyomyk;
        eiacwgegiuowcmig:
        if (!$this->csaueuycewaiuaay()) {
            goto oaikuoqiukaqmiak;
        }
        goto qumekuwomeeyamwu;
        ykoooseayycgcayu:
        oaikuoqiukaqmiak:
        goto kqueiiioekoawcsy;
        zoekckiqssqyomyk:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto mwwciqsyskyekkeq;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto aeoysqssqcqwauow;
        meciqmqcuiqawkua:
        $eeamcawaiqocomwy .= "\x20\57{$wksoawcgagcgoask}";
        goto yasweukayucicyuk;
        aeoysqssqcqwauow:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto uigweyocaqgemmgc;
        uigweyocaqgemmgc:
        if (!$wksoawcgagcgoask) {
            goto ciaueooiggcgakuu;
        }
        goto meciqmqcuiqawkua;
        eqecgkeqwuiugeca:
        return $eeamcawaiqocomwy;
        goto ueqkyiquamyiakgc;
        wccggcuyqqweoikc:
        $eeamcawaiqocomwy .= "\40\x2f{$ymqmyyeuycgmigyo}";
        goto eqecgkeqwuiugeca;
        yasweukayucicyuk:
        ciaueooiggcgakuu:
        goto wccggcuyqqweoikc;
        ueqkyiquamyiakgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto mqyusyqaukgqauos;
        uqkeasmouqogoacq:
        goto uwwsaskiyywcqmyy;
        goto gsiccqcoquqskcmk;
        qgkmkykkgeeqyeyy:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto ioqaeigausyceicu;
        ewsiemmseeuyuwsu:
        wccmooaikyqkemwc:
        goto qyqymqymoyouceqk;
        cecyuuwcqioiwauu:
        return $sogksuscggsicmac;
        goto auwymayuwcamoqgq;
        qkqasaogwyiiciem:
        oassyegiwmwsmiwg:
        goto gsqyksumwymkwsas;
        gqcqgsiouousmgwy:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\x63\x6f\156\164\145\x6e\164":
                goto ikmqssocqayyakge;
                gimuoawsewokwcky:
                goto wwwqgisgogqgqeom;
                goto uugioomkywkukaki;
                ikmqssocqayyakge:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto wqoysqscuiyuqsai;
                wqoysqscuiyuqsai:
                $eeamcawaiqocomwy = content_url();
                goto gimuoawsewokwcky;
                uugioomkywkukaki:
            case "\151\x6e\143\154\x75\144\x65\163":
                goto oqeieoywwiqsqwke;
                oqeieoywwiqsqwke:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto iiesscwguamgaaoe;
                iiesscwguamgaaoe:
                $eeamcawaiqocomwy = includes_url();
                goto wskqiiwkwcokqaai;
                wskqiiwkwcokqaai:
                goto wwwqgisgogqgqeom;
                goto oyukuusksqiocwoe;
                oyukuusksqiocwoe:
        }
        goto qkqasaogwyiiciem;
        gsiccqcoquqskcmk:
        yyyawioycsowgayc:
        goto gqcqgsiouousmgwy;
        oqqqgemqcqicgomo:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eceywsecgoyuoqmq;
        qyqymqymoyouceqk:
        uwwsaskiyywcqmyy:
        goto cecyuuwcqioiwauu;
        mceeqosocaaaoaog:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto ikquocgacmwgcoyu;
        suocokcwoqamicms:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto ewsiemmseeuyuwsu;
        eceywsecgoyuoqmq:
        gcicoimysgieaygo:
        goto uqkeasmouqogoacq;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto eysugkikgqgegogw;
        ikquocgacmwgcoyu:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto oqwciqwewqwwwqso;
        oqwciqwewqwwwqso:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto gcicoimysgieaygo;
        }
        goto oqqqgemqcqicgomo;
        ioqaeigausyceicu:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto suocokcwoqamicms;
        eysugkikgqgegogw:
        if (preg_match("\x2f\x5c\57\167\160\55\x28\143\x6f\156\x74\145\156\164\x7c\x69\x6e\x63\x6c\165\144\x65\x73\51\x5c\57\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto yyyawioycsowgayc;
        }
        goto mceeqosocaaaoaog;
        gsqyksumwymkwsas:
        wwwqgisgogqgqeom:
        goto mkwemicgqcqyusqw;
        mkwemicgqcqyusqw:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto wccmooaikyqkemwc;
        }
        goto qgkmkykkgeeqyeyy;
        auwymayuwcamoqgq:
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
        goto qeogscuwaqegqeeu;
        kuigciykymecwmos:
        try {
            try {
                goto sisisweiyqgccaae;
                guumaeugmekqeisi:
                if (!$quowyokcwswmuois) {
                    goto wscmiwckoyiooekg;
                }
                goto wuikqgsgquisuusa;
                sisisweiyqgccaae:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto guumaeugmekqeisi;
                wuikqgsgquisuusa:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto siugkcyicyqcscsc;
                siugkcyicyqcscsc:
                wscmiwckoyiooekg:
                goto qeggqaqesumwycek;
                qeggqaqesumwycek:
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        goto aqoygcikqwoegkii;
        qeogscuwaqegqeeu:
        $kqagasmwymmuiksq = null;
        goto kuigciykymecwmos;
        aqoygcikqwoegkii:
        return $kqagasmwymmuiksq;
        goto kqaymsayeiukkaay;
        kqaymsayeiukkaay:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto keoouuycgkayggiq;
        swyggiaiwsmwessm:
        ogkquckqwooqiymq:
        goto eseouiwqkgagsiaa;
        eseouiwqkgagsiaa:
        return $ceuoyocoywikssmy;
        goto qqywmguygwscyyae;
        wgoawmkecwkieoyk:
        try {
            goto wmwocowecyoasqeg;
            csywagwikouweiqm:
            wgeuisockoogeccc:
            goto iqmyomeqgiououou;
            wmwocowecyoasqeg:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto eycmsyeuqqmeooaq;
            eycmsyeuqqmeooaq:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\x63\x73\x73"))) {
                goto wgeuisockoogeccc;
            }
            goto gsyuoweeeqoyiygw;
            gsyuoweeeqoyiygw:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\x2e\x63\163\x73", "\56\162\x74\x6c\56\143\163\163", $ceuoyocoywikssmy);
            goto csywagwikouweiqm;
            iqmyomeqgiououou:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto swyggiaiwsmwessm;
        keoouuycgkayggiq:
        $ceuoyocoywikssmy = null;
        goto mgoaekweikqawgge;
        syumwaimygimyscy:
        if (!$quowyokcwswmuois) {
            goto ogkquckqwooqiymq;
        }
        goto wgoawmkecwkieoyk;
        mgoaekweikqawgge:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto syumwaimygimyscy;
        qqywmguygwscyyae:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\x69\x6c\144\x5f\144\x69\x72\x65\143\164\157\162\171"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto cmcemcuymikqukce;
        ccgaaokwqeiycemk:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto ekwmkkmwckeiaugc;
        oocsqwaeuuqceiky:
        return $eeamcawaiqocomwy;
        goto mmekseaoqiouuycc;
        ekwmkkmwckeiaugc:
        qyiigayoyegauwaw:
        goto oocsqwaeuuqceiky;
        kwgwooqigowksicc:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto euasgwagscuiswiy;
        euasgwagscuiswiy:
        $eeamcawaiqocomwy = null;
        goto scwseaueieuugecs;
        scwseaueieuugecs:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto qyiigayoyegauwaw;
        }
        goto ccgaaokwqeiycemk;
        cmcemcuymikqukce:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto kwgwooqigowksicc;
        mmekseaoqiouuycc:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto qyuguuqgysiqsaww;
        gicqcsqmkgiyeoss:
        $this->ygegioggqgwwqooe();
        goto ugasqyoegamcgqco;
        ymsymwiockkscikc:
        return $this->package;
        goto csicyuisekuyiuys;
        ugasqyoegamcgqco:
        gkwywcweoaacsqqi:
        goto ymsymwiockkscikc;
        qyuguuqgysiqsaww:
        if ($this->package) {
            goto gkwywcweoaacsqqi;
        }
        goto gicqcsqmkgiyeoss;
        csicyuisekuyiuys:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto kaccuquekgoomume;
        ygomiqmeacmoogqa:
        return "{$mkomwsiykqigmqca}\57{$kqagasmwymmuiksq}";
        goto owusgguueuoikwim;
        kaccuquekgoomume:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto ekikcgogkomooqia;
        ekikcgogkomooqia:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto ygomiqmeacmoogqa;
        owusgguueuoikwim:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto aueusukugaqgmuqe;
        ocaguoikqsymkaaw:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto logyqqoeosuimcmi;
        logyqqoeosuimcmi:
        if ($ewgwqamkygiqaawc) {
            goto cmgogcekgkgwakua;
        }
        goto mscukwykcksygqkg;
        akcqewkmyeqsmqcg:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\x64\145\146\163\76\133\x5c\163\134\x53\135\x2a\x3f\x3c\134\x2f\x64\x65\x66\163\76\57", '', $wkaqekwwgqsqwcoi);
        goto aqciayqccmoesccw;
        mscukwykcksygqkg:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto usuewcmsgysskeca;
        mquqekumeaoswgye:
        $ceuoyocoywikssmy = "\151\155\x67\57\x73\x76\147\x2f\x69\143\157\156\x2f{$wkaqekwwgqsqwcoi}\x2e\x73\166\147";
        goto ocaguoikqsymkaaw;
        mucuuagawemmkwug:
        aokomqwsiyysawim:
        goto gmeegkiyasyqwyqq;
        gesswekoguscuise:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto gaqeewuasmsgumsg;
        suwiwmkogwymwqec:
        
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\x3c\x21\55\55\133\134\163\x5c\123\x5d\x2a\x3f\x2d\55\76\x2f", '', $wkaqekwwgqsqwcoi);
        goto akcqewkmyeqsmqcg;
        aueusukugaqgmuqe:
        if (!$wkaqekwwgqsqwcoi) {
            goto aokomqwsiyysawim;
        }
        goto mquqekumeaoswgye;
        usuewcmsgysskeca:
        goto uwgamgyakeacquiu;
        goto sigyamiisqewqwkm;
        aqciayqccmoesccw:
        wgeiswcaskeoeewk:
        goto kwckkiekaoaaukkk;
        gaqeewuasmsgumsg:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto wgeiswcaskeoeewk;
        }
        goto suwiwmkogwymwqec;
        gmeegkiyasyqwyqq:
        return $wkaqekwwgqsqwcoi;
        goto qmmwceyuwsagkgqs;
        kwckkiekaoaaukkk:
        uwgamgyakeacquiu:
        goto mucuuagawemmkwug;
        sigyamiisqewqwkm:
        cmgogcekgkgwakua:
        goto gesswekoguscuise;
        qmmwceyuwsagkgqs:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto wsqqoqwykgsoeweu;
        oqiqgegsqcoeiesa:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto cycqgciuqgyacwyy;
        }
        goto cwayuyemyqsewgkc;
        wyggeaoiwkkiewgy:
        return $ewgwqamkygiqaawc;
        goto ycmeseaweuwkuksm;
        umkaquamukuuqeii:
        wycieuuioyumuaim:
        goto eyugqqoqukeiuowe;
        iqamqqkameysgiwm:
        goto wycieuuioyumuaim;
        goto qeoakikuyiyksguo;
        uwoqemmymksauskq:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto iqamqqkameysgiwm;
        cwayuyemyqsewgkc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto mqgkywcmemsukuck;
        uayiuioememomcuc:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto umkaquamukuuqeii;
        qeoakikuyiyksguo:
        coyyauuykuwacoes:
        goto uayiuioememomcuc;
        eyugqqoqukeiuowe:
        $ewgwqamkygiqaawc = false;
        goto oowggkeeseuskeio;
        oowggkeeseuskeio:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto oqiqgegsqcoeiesa;
        mqgkywcmemsukuck:
        cycqgciuqgyacwyy:
        goto wyggeaoiwkkiewgy;
        wasqmeqaayyqckwa:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto uwoqemmymksauskq;
        wsqqoqwykgsoeweu:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto coyyauuykuwacoes;
        }
        goto wasqmeqaayyqckwa;
        ycmeseaweuwkuksm:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto mmwoqyscsyyccmgc;
        icikesyuoswkwyag:
        gcsmyoouiugsuywu:
        goto wygsgseuikmkckig;
        wygsgseuikmkckig:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto iagouugawsuswccu;
        ouyskuyuekeeeuku:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto icikesyuoswkwyag;
        iagouugawsuswccu:
        return $this;
        goto aygkqeyqeguyaumo;
        swiiswsgcesakeei:
        if (!$uukmwiwiqwyaaegk) {
            goto gcsmyoouiugsuywu;
        }
        goto ouyskuyuekeeeuku;
        mmwoqyscsyyccmgc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto swiiswsgcesakeei;
        aygkqeyqeguyaumo:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto syysuweucygqsgoo;
        iuwmasqwsuqgcwmg:
        return $this;
        goto meoicwqckywiwaii;
        giqymigmomaaoicm:
        wawgcwguamqgekis:
        goto iuwmasqwsuqgcwmg;
        syysuweucygqsgoo:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            gwyqsaswyiicuoke:
        }
        goto giqymigmomaaoicm;
        meoicwqckywiwaii:
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
        goto kummqkwyeiomswyy;
        msoomyweeumakeyc:
        kuioacgcmuoukscw:
        goto yiuqmueuywsmsyuw;
        yiuqmueuywsmsyuw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\x2d{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto yyimkksgiagkwgau;
        yyimkksgiagkwgau:
        return $this;
        goto qiseoemcesgaagwg;
        kummqkwyeiomswyy:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto kuioacgcmuoukscw;
        }
        goto wyuagceiqgqoggeu;
        wyuagceiqgqoggeu:
        $this->cecaguuoecmccuse("\x73\x63\x72\x69\x70\164\x5f\154\157\x61\x64\x65\x72\x5f\x74\141\147", [$this, "\x65\x63\x6f\161\x6f\157\x69\165\x79\x6d\x73\147\141\153\171\163"], 10, 2);
        goto kqesamwwcakuwuas;
        kqesamwwcakuwuas:
        $this->attributeAdded = true;
        goto msoomyweeumakeyc;
        qiseoemcesgaagwg:
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

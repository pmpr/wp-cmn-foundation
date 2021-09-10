<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        wgmscmycmmwagaqe:
        $this->component = $wksoawcgagcgoask;
        goto ueiyyiokueymucqa;
        ueiyyiokueymucqa:
        $this->ygegioggqgwwqooe();
        goto ugiskommysmcugig;
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
            oeyaeawyigiygyus:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto awwoieswswoqsqoa;
            kescwsiuywawyqwu:
            cyeoiysigumciuma:
            goto yqqmeykkyqoiusiu;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto kwguusaseiauseoi;
            sokakmqsquykwcmo:
            $eeamcawaiqocomwy .= "\57{$wksoawcgagcgoask}";
            goto oeyaeawyigiygyus;
            oeqkeqgkwyayuogc:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto cyeoiysigumciuma;
            }
            goto gqeeocimioewyyou;
            kwguusaseiauseoi:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oeqkeqgkwyayuogc;
            gqeeocimioewyyou:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto wcckccugqkukymay;
            wcckccugqkukymay:
            if (!$wksoawcgagcgoask) {
                goto geoygkiuccaqcumg;
            }
            goto sokakmqsquykwcmo;
            awwoieswswoqsqoa:
            geoygkiuccaqcumg:
            goto cmkuegkqiwgaeukq;
            cmkuegkqiwgaeukq:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\155\141\x6e\151\x66\145\x73\x74\x2e\x6a\x73\157\156"));
            goto kescwsiuywawyqwu;
            yqqmeykkyqoiusiu:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x6d\151\156\x5f\x65\x6e\x71\165\x65\x75\x65\x5f\x61\163\x73\145\x74\x73"), [$this, "\163\x77\x71\x65\161\167\x77\x69\x6f\x65\x79\153\x69\x65\x75\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\x67\151\156\137\x65\x6e\x71\165\x65\165\x65\137\141\x73\x73\x65\164\163"), [$this, "\153\x71\x79\x77\145\x63\x75\161\141\x67\x65\x71\x73\167\x75\x77"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\x6f\156\x74\x5f\x65\156\x71\165\145\x75\x65\x5f\141\x73\x73\x65\164\x73"), [$this, "\x79\x65\163\155\x71\x63\143\165\x61\145\x63\x67\x65\x67\155\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\155\x69\x6e\137\x6c\x6f\143\141\154\151\x7a\145\x5f\x76\141\x72\151\x61\142\x6c\x65\x73"), [$this, "\x75\171\x65\163\x75\167\x65\145\x73\153\171\x69\171\x61\151\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\x6f\x67\151\156\137\x6c\x6f\143\x61\154\x69\172\145\x5f\166\x61\x72\151\141\x62\154\145\163"), [$this, "\x6b\171\x67\167\145\x75\x6f\x6b\163\x71\x61\x6f\x6d\151\161\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\x6f\156\x74\x5f\154\x6f\x63\x61\154\151\x7a\145\137\166\x61\x72\x69\141\142\x6c\x65\x73"), [$this, "\x73\157\x73\x61\x6b\x69\143\x6f\x77\155\x71\x69\x77\147\x73\163"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto yuqmqsuaqqamumac;
        ggqmkgqosuekoycu:
        if (is_admin()) {
            goto kssqyweyyigkmigs;
        }
        goto wiwugamyyegscqyu;
        oygkgcygoaeaqiom:
        kqocyskgsigykkos:
        goto aqgucgumeessookq;
        egeeeeyuoesgayoc:
        ckskeywcckyaciuu:
        goto awykgsqaycauwquo;
        aqgucgumeessookq:
        goto kawikymokoesioay;
        goto sycoccuaosmosqsi;
        kcuyacakkwwucqgi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\143\162\151\x70\x74" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto gkkuagcemwsckgac;
        cacosciskaewuaam:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto ycmkyasqkukggogs;
        }
        goto kcuyacakkwwucqgi;
        cqwicouukomskmka:
        kawikymokoesioay:
        goto mmieiykmcqgeuceg;
        gwuiocyoeiciciyw:
        $sqeykgyoooqysmca = self::LOGIN;
        goto oygkgcygoaeaqiom;
        wiwugamyyegscqyu:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto eyqmqqgqiuscecci;
        }
        goto yyoogcqkcswwkciw;
        imemamyywgmcwygc:
        goto kqocyskgsigykkos;
        goto esqcysaoigqicqmq;
        mmieiykmcqgeuceg:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\163\143\x72\x69\x70\164\55{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto cacosciskaewuaam;
        gkkuagcemwsckgac:
        ycmkyasqkukggogs:
        goto egeeeeyuoesgayoc;
        yuqmqsuaqqamumac:
        if (!$this->ieqamkssqsaukwqm()) {
            goto ckskeywcckyaciuu;
        }
        goto ggqmkgqosuekoycu;
        esqcysaoigqicqmq:
        eyqmqqgqiuscecci:
        goto gwuiocyoeiciciyw;
        yyoogcqkcswwkciw:
        $sqeykgyoooqysmca = self::FRONT;
        goto imemamyywgmcwygc;
        awykgsqaycauwquo:
        return $scwiymciagumsuiw;
        goto eukciagakmsasako;
        wkkqumskaemwemuo:
        $sqeykgyoooqysmca = self::ADMIN;
        goto cqwicouukomskmka;
        sycoccuaosmosqsi:
        kssqyweyyigkmigs:
        goto wkkqumskaemwemuo;
        eukciagakmsasako:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto cusumaiokokiiumq;
        iwmuiuymkouayqyo:
        gysooekmciuicgyw:
        goto wgiwmowkiwcwoakm;
        wgiwmowkiwcwoakm:
        return $seiyqiqwcmseaiaq;
        goto ayiwywqikeqgyosm;
        cusumaiokokiiumq:
        if (!$this->csaueuycewaiuaay()) {
            goto gysooekmciuicgyw;
        }
        goto iiwuwsuckokcokey;
        iiwuwsuckokcokey:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto iwmuiuymkouayqyo;
        ayiwywqikeqgyosm:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto oymuyqwakkkkueoi;
        oymuyqwakkkkueoi:
        if (!$this->csaueuycewaiuaay()) {
            goto kssyksgomecayykc;
        }
        goto qmmweguyeicusqsa;
        kakmqcgeiqcqsioq:
        return $yokgacoigcscwkie;
        goto ykuumqkmwcaekiac;
        qmmweguyeicusqsa:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto gokacuwekwkmygwg;
        gokacuwekwkmygwg:
        kssyksgomecayykc:
        goto kakmqcgeiqcqsioq;
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
        uuoaaawqaaiesekw:
        if (!$this->csaueuycewaiuaay()) {
            goto cqqyaickwcguayai;
        }
        goto mmaaoasmmgwgcagg;
        msmksqwgyomoksem:
        cqqyaickwcguayai:
        goto gmomuqswgeaoomwe;
        gmomuqswgeaoomwe:
        return $yokgacoigcscwkie;
        goto sgqasakygigqcgmy;
        sgqasakygigqcgmy:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto wkaouucmyqymqsyq;
        oqcoyawkkcoisqoc:
        cggseekycwueosos:
        goto ewkakyksocksekmg;
        yegggscmiqaegiua:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto oqcoyawkkcoisqoc;
        ewkakyksocksekmg:
        return $seiyqiqwcmseaiaq;
        goto ecwiuigeegaaewqy;
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
        qumekuwomeeyamwu:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ykoooseayycgcayu;
        zoekckiqssqyomyk:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto mwwciqsyskyekkeq;
        aeoysqssqcqwauow:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto uigweyocaqgemmgc;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto aeoysqssqcqwauow;
        yasweukayucicyuk:
        ciaueooiggcgakuu:
        goto wccggcuyqqweoikc;
        wccggcuyqqweoikc:
        $eeamcawaiqocomwy .= "\40\x2f{$ymqmyyeuycgmigyo}";
        goto eqecgkeqwuiugeca;
        uigweyocaqgemmgc:
        if (!$wksoawcgagcgoask) {
            goto ciaueooiggcgakuu;
        }
        goto meciqmqcuiqawkua;
        eqecgkeqwuiugeca:
        return $eeamcawaiqocomwy;
        goto ueqkyiquamyiakgc;
        meciqmqcuiqawkua:
        $eeamcawaiqocomwy .= "\40\57{$wksoawcgagcgoask}";
        goto yasweukayucicyuk;
        ueqkyiquamyiakgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto mqyusyqaukgqauos;
        gsiccqcoquqskcmk:
        yyyawioycsowgayc:
        goto gqcqgsiouousmgwy;
        oqwciqwewqwwwqso:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto gcicoimysgieaygo;
        }
        goto oqqqgemqcqicgomo;
        mceeqosocaaaoaog:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto ikquocgacmwgcoyu;
        eysugkikgqgegogw:
        if (preg_match("\x2f\134\x2f\x77\160\x2d\x28\143\x6f\x6e\164\x65\x6e\164\x7c\151\x6e\x63\154\165\x64\145\x73\51\x5c\57\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto yyyawioycsowgayc;
        }
        goto mceeqosocaaaoaog;
        qkqasaogwyiiciem:
        oassyegiwmwsmiwg:
        goto gsqyksumwymkwsas;
        oqqqgemqcqicgomo:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eceywsecgoyuoqmq;
        ikquocgacmwgcoyu:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto oqwciqwewqwwwqso;
        suocokcwoqamicms:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto ewsiemmseeuyuwsu;
        qgkmkykkgeeqyeyy:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto ioqaeigausyceicu;
        ewsiemmseeuyuwsu:
        wccmooaikyqkemwc:
        goto qyqymqymoyouceqk;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto eysugkikgqgegogw;
        uqkeasmouqogoacq:
        goto uwwsaskiyywcqmyy;
        goto gsiccqcoquqskcmk;
        qyqymqymoyouceqk:
        uwwsaskiyywcqmyy:
        goto cecyuuwcqioiwauu;
        cecyuuwcqioiwauu:
        return $sogksuscggsicmac;
        goto auwymayuwcamoqgq;
        ioqaeigausyceicu:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto suocokcwoqamicms;
        gsqyksumwymkwsas:
        wwwqgisgogqgqeom:
        goto mkwemicgqcqyusqw;
        eceywsecgoyuoqmq:
        gcicoimysgieaygo:
        goto uqkeasmouqogoacq;
        mkwemicgqcqyusqw:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto wccmooaikyqkemwc;
        }
        goto qgkmkykkgeeqyeyy;
        gqcqgsiouousmgwy:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\x63\x6f\156\x74\145\x6e\164":
                goto ikmqssocqayyakge;
                gimuoawsewokwcky:
                goto wwwqgisgogqgqeom;
                goto uugioomkywkukaki;
                wqoysqscuiyuqsai:
                $eeamcawaiqocomwy = content_url();
                goto gimuoawsewokwcky;
                ikmqssocqayyakge:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto wqoysqscuiyuqsai;
                uugioomkywkukaki:
            case "\151\156\x63\154\165\144\145\x73":
                goto oqeieoywwiqsqwke;
                iiesscwguamgaaoe:
                $eeamcawaiqocomwy = includes_url();
                goto wskqiiwkwcokqaai;
                wskqiiwkwcokqaai:
                goto wwwqgisgogqgqeom;
                goto oyukuusksqiocwoe;
                oqeieoywwiqsqwke:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto iiesscwguamgaaoe;
                oyukuusksqiocwoe:
        }
        goto qkqasaogwyiiciem;
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
        aqoygcikqwoegkii:
        return $kqagasmwymmuiksq;
        goto kqaymsayeiukkaay;
        kuigciykymecwmos:
        try {
            try {
                goto sisisweiyqgccaae;
                wuikqgsgquisuusa:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto siugkcyicyqcscsc;
                guumaeugmekqeisi:
                if (!$quowyokcwswmuois) {
                    goto wscmiwckoyiooekg;
                }
                goto wuikqgsgquisuusa;
                sisisweiyqgccaae:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto guumaeugmekqeisi;
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
        kqaymsayeiukkaay:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto keoouuycgkayggiq;
        eseouiwqkgagsiaa:
        return $ceuoyocoywikssmy;
        goto qqywmguygwscyyae;
        wgoawmkecwkieoyk:
        try {
            goto wmwocowecyoasqeg;
            csywagwikouweiqm:
            wgeuisockoogeccc:
            goto iqmyomeqgiououou;
            gsyuoweeeqoyiygw:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\56\143\163\x73", "\x2e\162\164\154\x2e\x63\163\x73", $ceuoyocoywikssmy);
            goto csywagwikouweiqm;
            eycmsyeuqqmeooaq:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\143\x73\163"))) {
                goto wgeuisockoogeccc;
            }
            goto gsyuoweeeqoyiygw;
            wmwocowecyoasqeg:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto eycmsyeuqqmeooaq;
            iqmyomeqgiououou:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto swyggiaiwsmwessm;
        mgoaekweikqawgge:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto syumwaimygimyscy;
        swyggiaiwsmwessm:
        ogkquckqwooqiymq:
        goto eseouiwqkgagsiaa;
        keoouuycgkayggiq:
        $ceuoyocoywikssmy = null;
        goto mgoaekweikqawgge;
        syumwaimygimyscy:
        if (!$quowyokcwswmuois) {
            goto ogkquckqwooqiymq;
        }
        goto wgoawmkecwkieoyk;
        qqywmguygwscyyae:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\142\x75\x69\154\144\137\x64\x69\162\x65\143\x74\157\162\171"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto cmcemcuymikqukce;
        scwseaueieuugecs:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto qyiigayoyegauwaw;
        }
        goto ccgaaokwqeiycemk;
        cmcemcuymikqukce:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto kwgwooqigowksicc;
        euasgwagscuiswiy:
        $eeamcawaiqocomwy = null;
        goto scwseaueieuugecs;
        oocsqwaeuuqceiky:
        return $eeamcawaiqocomwy;
        goto mmekseaoqiouuycc;
        ccgaaokwqeiycemk:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto ekwmkkmwckeiaugc;
        kwgwooqigowksicc:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto euasgwagscuiswiy;
        ekwmkkmwckeiaugc:
        qyiigayoyegauwaw:
        goto oocsqwaeuuqceiky;
        mmekseaoqiouuycc:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto qyuguuqgysiqsaww;
        ymsymwiockkscikc:
        return $this->package;
        goto csicyuisekuyiuys;
        qyuguuqgysiqsaww:
        if ($this->package) {
            goto gkwywcweoaacsqqi;
        }
        goto gicqcsqmkgiyeoss;
        gicqcsqmkgiyeoss:
        $this->ygegioggqgwwqooe();
        goto ugasqyoegamcgqco;
        ugasqyoegamcgqco:
        gkwywcweoaacsqqi:
        goto ymsymwiockkscikc;
        csicyuisekuyiuys:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto kaccuquekgoomume;
        kaccuquekgoomume:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto ekikcgogkomooqia;
        ekikcgogkomooqia:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto ygomiqmeacmoogqa;
        ygomiqmeacmoogqa:
        return "{$mkomwsiykqigmqca}\57{$kqagasmwymmuiksq}";
        goto owusgguueuoikwim;
        owusgguueuoikwim:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto aueusukugaqgmuqe;
        aqciayqccmoesccw:
        wgeiswcaskeoeewk:
        goto kwckkiekaoaaukkk;
        ocaguoikqsymkaaw:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto logyqqoeosuimcmi;
        gesswekoguscuise:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto gaqeewuasmsgumsg;
        usuewcmsgysskeca:
        goto uwgamgyakeacquiu;
        goto sigyamiisqewqwkm;
        mquqekumeaoswgye:
        $ceuoyocoywikssmy = "\151\155\147\57\163\166\x67\57\x69\x63\x6f\x6e\57{$wkaqekwwgqsqwcoi}\x2e\163\x76\x67";
        goto ocaguoikqsymkaaw;
        suwiwmkogwymwqec:
        
        $wkaqekwwgqsqwcoi = preg_replace("\57\x3c\41\x2d\55\133\134\163\134\123\x5d\52\77\55\55\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto akcqewkmyeqsmqcg;
        kwckkiekaoaaukkk:
        uwgamgyakeacquiu:
        goto mucuuagawemmkwug;
        gmeegkiyasyqwyqq:
        return $wkaqekwwgqsqwcoi;
        goto qmmwceyuwsagkgqs;
        mscukwykcksygqkg:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto usuewcmsgysskeca;
        logyqqoeosuimcmi:
        if ($ewgwqamkygiqaawc) {
            goto cmgogcekgkgwakua;
        }
        goto mscukwykcksygqkg;
        akcqewkmyeqsmqcg:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\144\x65\x66\x73\x3e\x5b\134\x73\134\123\x5d\x2a\x3f\74\x5c\x2f\x64\145\146\163\76\x2f", '', $wkaqekwwgqsqwcoi);
        goto aqciayqccmoesccw;
        aueusukugaqgmuqe:
        if (!$wkaqekwwgqsqwcoi) {
            goto aokomqwsiyysawim;
        }
        goto mquqekumeaoswgye;
        mucuuagawemmkwug:
        aokomqwsiyysawim:
        goto gmeegkiyasyqwyqq;
        sigyamiisqewqwkm:
        cmgogcekgkgwakua:
        goto gesswekoguscuise;
        gaqeewuasmsgumsg:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto wgeiswcaskeoeewk;
        }
        goto suwiwmkogwymwqec;
        qmmwceyuwsagkgqs:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto wsqqoqwykgsoeweu;
        oowggkeeseuskeio:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto oqiqgegsqcoeiesa;
        uayiuioememomcuc:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto umkaquamukuuqeii;
        eyugqqoqukeiuowe:
        $ewgwqamkygiqaawc = false;
        goto oowggkeeseuskeio;
        oqiqgegsqcoeiesa:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto cycqgciuqgyacwyy;
        }
        goto cwayuyemyqsewgkc;
        umkaquamukuuqeii:
        wycieuuioyumuaim:
        goto eyugqqoqukeiuowe;
        iqamqqkameysgiwm:
        goto wycieuuioyumuaim;
        goto qeoakikuyiyksguo;
        uwoqemmymksauskq:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto iqamqqkameysgiwm;
        wasqmeqaayyqckwa:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto uwoqemmymksauskq;
        qeoakikuyiyksguo:
        coyyauuykuwacoes:
        goto uayiuioememomcuc;
        wyggeaoiwkkiewgy:
        return $ewgwqamkygiqaawc;
        goto ycmeseaweuwkuksm;
        cwayuyemyqsewgkc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto mqgkywcmemsukuck;
        wsqqoqwykgsoeweu:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto coyyauuykuwacoes;
        }
        goto wasqmeqaayyqckwa;
        mqgkywcmemsukuck:
        cycqgciuqgyacwyy:
        goto wyggeaoiwkkiewgy;
        ycmeseaweuwkuksm:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto mmwoqyscsyyccmgc;
        swiiswsgcesakeei:
        if (!$uukmwiwiqwyaaegk) {
            goto gcsmyoouiugsuywu;
        }
        goto ouyskuyuekeeeuku;
        mmwoqyscsyyccmgc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto swiiswsgcesakeei;
        ouyskuyuekeeeuku:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto icikesyuoswkwyag;
        wygsgseuikmkckig:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto iagouugawsuswccu;
        iagouugawsuswccu:
        return $this;
        goto aygkqeyqeguyaumo;
        icikesyuoswkwyag:
        gcsmyoouiugsuywu:
        goto wygsgseuikmkckig;
        aygkqeyqeguyaumo:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto syysuweucygqsgoo;
        giqymigmomaaoicm:
        wawgcwguamqgekis:
        goto iuwmasqwsuqgcwmg;
        iuwmasqwsuqgcwmg:
        return $this;
        goto meoicwqckywiwaii;
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
        goto kummqkwyeiomswyy;
        wyuagceiqgqoggeu:
        $this->cecaguuoecmccuse("\163\x63\162\x69\160\164\x5f\x6c\x6f\141\x64\x65\162\137\164\x61\x67", [$this, "\x65\x63\157\161\157\157\x69\165\171\155\163\147\141\153\x79\163"], 10, 2);
        goto kqesamwwcakuwuas;
        yiuqmueuywsmsyuw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto yyimkksgiagkwgau;
        msoomyweeumakeyc:
        kuioacgcmuoukscw:
        goto yiuqmueuywsmsyuw;
        yyimkksgiagkwgau:
        return $this;
        goto qiseoemcesgaagwg;
        kqesamwwcakuwuas:
        $this->attributeAdded = true;
        goto msoomyweeumakeyc;
        kummqkwyeiomswyy:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto kuioacgcmuoukscw;
        }
        goto wyuagceiqgqoggeu;
        qiseoemcesgaagwg:
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

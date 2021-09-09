<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterPost;
use WP_Post_Type;

class CPT extends Container
{
    
    protected ?int $id = 0;
    
    protected ?string $content = '';
    
    protected ?string $title = '';
    
    protected ?string $slug = '';
    
    protected ?RegisterPost $register = null;
    
    public function aqcogscycyycgkuq() : ?string
    {
        return $this->slug;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->content;
    }
    
    public function oyeskqayoscwciem() : RegisterPost
    {
        goto uqaecqicccqqumwy;
        aioagqmkwceiceiw:
        return $this->register;
        goto iiqiimkaogaewoqw;
        auuyasucycskyioi:
        gcaogkcqsowqcsyq:
        goto aioagqmkwceiceiw;
        uqaecqicccqqumwy:
        if ($this->register) {
            goto gcaogkcqsowqcsyq;
        }
        goto sismwqkmciouwouu;
        sismwqkmciouwouu:
        $this->register = new RegisterPost();
        goto auuyasucycskyioi;
        iiqiimkaogaewoqw:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto cwaymoayokokyase;
        smyommsakkwciogs:
        parent::__construct();
        goto wkeckeuumgmgyiiu;
        skiyokscqkmiacmk:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto swemyqcgmeqeeiuq;
        ucieyaysuqmsgqsy:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto oemieaoqeygawkmc;
        cwaymoayokokyase:
        if (!$aokagokqyuysuksm) {
            goto ccuuyekyecacagae;
        }
        goto ucieyaysuqmsgqsy;
        wkeckeuumgmgyiiu:
        sokimimsmcaawigw:
        goto sqwiogiwgequuwgw;
        gogcqoeqmeqgsmqg:
        aceuegkoskqkcyoo:
        goto ggyiwauwykckueui;
        oawgaciskyykgssu:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto qcaawmessgwoqwqs;
        qcaawmessgwoqwqs:
        cymswwcigouecgiu:
        goto smyommsakkwciogs;
        keyikmccmwagwcau:
        ccuuyekyecacagae:
        goto kwawqeiqskmoeeyk;
        ggyiwauwykckueui:
        goto sokimimsmcaawigw;
        goto keyikmccmwagwcau;
        qissaamygiiwgqie:
        kisggwimqwaugmea:
        goto gogcqoeqmeqgsmqg;
        ciicmoysmeykwwuc:
        $qmcuiciekkawmmms = ["\160\157\163\x74\x5f\143\157\156\x74\145\x6e\164" => "\143\157\156\x74\145\156\164", "\x70\x6f\163\x74\x5f\x74\151\x74\154\145" => "\164\x69\164\x6c\145", "\x70\157\x73\164\137\156\141\x6d\x65" => "\163\154\165\x67"];
        goto skiyokscqkmiacmk;
        oemieaoqeygawkmc:
        if (!$post) {
            goto aceuegkoskqkcyoo;
        }
        goto ciicmoysmeykwwuc;
        swemyqcgmeqeeiuq:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto gqcisycmsgeaaeam;
            ieuwcgqoyyguiqcy:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto eweyccaegsocwmae;
            ikkociaokagqumuw:
            goto payaciyikimkoquw;
            goto ksaiemwmwuwmsmcc;
            gqcisycmsgeaaeam:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto aweouaymmsogsyka;
            }
            goto kqcumuakekmayyaa;
            kqcumuakekmayyaa:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto iuuweasisoieisec;
            }
            goto ieuwcgqoyyguiqcy;
            oykuaoisiumcsmmy:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto aeyyygequskegsam;
            aeyyygequskegsam:
            payaciyikimkoquw:
            goto gyswqkocmuuieswu;
            gyswqkocmuuieswu:
            kogkaecyioiyommy:
            goto suiagiwucmeucmok;
            eweyccaegsocwmae:
            iuuweasisoieisec:
            goto ikkociaokagqumuw;
            ksaiemwmwuwmsmcc:
            aweouaymmsogsyka:
            goto oykuaoisiumcsmmy;
            suiagiwucmeucmok:
        }
        goto qissaamygiiwgqie;
        taqigiaumgaoisca:
        if ($this->miwqiiqeegeqcwis()) {
            goto cymswwcigouecgiu;
        }
        goto oawgaciskyykgssu;
        kwawqeiqskmoeeyk:
        $this->mgoeqkosywwaoqyw();
        goto taqigiaumgaoisca;
        sqwiogiwgequuwgw:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\x61\x66\164\x65\x72\137\x73\167\151\x74\143\150\x5f\164\x68\145\x6d\x65", [$this, "\153\x6d\167\x61\165\141\x61\x63\155\x67\x65\161\141\x6b\x71\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto wskoquceqciweouy;
        wskoquceqciweouy:
        $this->cecaguuoecmccuse("\160\x6f\x73\x74\137\x75\x70\x64\x61\164\145\x64\x5f\x6d\145\x73\163\x61\x67\145\x73", [$this, "\x70\155\x69\x77\x6b\x77\x6b\x79\x67\x61\145\x77\x69\x63\161\163"])->cecaguuoecmccuse("\x73\x75\x62\164\x69\164\154\x65\x5f\x76\x69\145\x77\x5f\x73\165\x70\x70\x6f\x72\164\145\x64", [$this, "\157\x77\171\x63\155\145\x73\145\145\151\x6b\x63\x61\161\x77\x6b"]);
        goto aiucscoycsegqwao;
        wggaoyoawseaggme:
        qioesqeqkcyaeyqe:
        goto goasosegisomuicm;
        aiucscoycsegqwao:
        if (!method_exists($this, "\x75\161\x65\x77\143\165\x75\x69\147\x67\x63\143\x75\161\151\141")) {
            goto qioesqeqkcyaeyqe;
        }
        goto emqguoqcwgcssyok;
        emqguoqcwgcssyok:
        $this->cecaguuoecmccuse("\162\x65\x6e\144\x65\x72\137{$this->miwqiiqeegeqcwis()}\x5f\x63\150\x69\154\x64\x72\x65\x6e", [$this, "\165\161\x65\167\143\165\165\151\x67\147\x63\143\165\x71\x69\x61"], 10, 2);
        goto wggaoyoawseaggme;
        goasosegisomuicm:
    }
    public function init()
    {
        goto iucwiggcmogeikck;
        iqymwucscyyeqcwa:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto eiscuqyckkwcscog;
        eiscuqyckkwcscog:
        if (!$acqqmqmcquukaqsc) {
            goto esmuyeyaqoqcsyse;
        }
        goto kiwskyeqwwokioks;
        cqygwmwkkiqqwquw:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\163\154\x75\x67", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\164\151\x74\x6c\145", "\145\144\x69\x74\x6f\162", "\x65\x78\143\145\x72\x70\164", "\164\150\x75\x6d\142\x6e\x61\151\x6c"]);
        goto ssegekmssqkgsoge;
        ssegekmssqkgsoge:
        muayickmewwuswmy:
        goto sucqiqmssemsygei;
        ysuykwkygggkkuqc:
        global $wp_rewrite;
        goto iqymwucscyyeqcwa;
        saikuiquwyasomue:
        esmuyeyaqoqcsyse:
        goto wegygoseewgquwcs;
        akoqyygqeiiikmco:
        yskaagqioyoiomqg:
        goto iooomaqggygwwuok;
        kiwskyeqwwokioks:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto saikuiquwyasomue;
        iwgacmgmqsoyyuiu:
        $this->yeyiguyegmmyusea();
        goto akoqyygqeiiikmco;
        wegygoseewgquwcs:
        if (!(method_exists($this, "\x79\x65\x79\x69\x67\165\x79\145\147\x6d\155\171\x75\x73\x65\141") && is_admin())) {
            goto yskaagqioyoiomqg;
        }
        goto iwgacmgmqsoyyuiu;
        sucqiqmssemsygei:
        $this->register();
        goto ysuykwkygggkkuqc;
        iucwiggcmogeikck:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto muayickmewwuswmy;
        }
        goto cqygwmwkkiqqwquw;
        iooomaqggygwwuok:
    }
    public function register()
    {
        goto emsmukwgwwusyueg;
        quqiwccwsyawasoe:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto cgsgaakaykagyygo;
        }
        goto ocoiequaimceeeoy;
        omousmkywwwkksay:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto quqiwccwsyawasoe;
        emsmukwgwwusyueg:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto omousmkywwwkksay;
        ocoiequaimceeeoy:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto qawmkgkwgqogkagw;
        qawmkgkwgqogkagw:
        cgsgaakaykagyygo:
        goto sweugqqowwoamomc;
        sweugqqowwoamomc:
    }
    
    public function migkyseymeomymmy() : bool
    {
        return ManipulatePost::sqyyemqmmgmyiaam($this->miwqiiqeegeqcwis());
    }
    public function kmwauaacmgeqakqg()
    {
        $this->register();
        flush_rewrite_rules();
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function cukiusasccucgwqc() : bool
    {
        return DecoratorQuery::cukiusasccucgwqc($this->miwqiiqeegeqcwis());
    }
    
    public function owycmeseeikcaqwk() : bool
    {
        return !(DecoratorQuery::migkyseymeomymmy() || DecoratorQuery::eyokaicigoeymwoo());
    }
    
    private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie)
    {
        goto isyiocycgikqamoi;
        gaaewsyiiysgawgu:
        escickciciscoaec:
        goto moqawwqumcaawiac;
        ugsyqugoqmsmwmwc:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto gaaewsyiiysgawgu;
        isyiocycgikqamoi:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto escickciciscoaec;
        }
        goto ugsyqugoqmsmwmwc;
        moqawwqumcaawiac:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array
    {
        return [];
    }
    
    public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array
    {
        goto mcuskskiayekoamu;
        wkuqsumgkuyygois:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto wicugycksmwmokkm;
        qmqooggmccwuiumi:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto ykkqammyacwiugwo;
        uwwiiqiikuusuocc:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto iqicywyqosukgyom;
        }
        goto yqowgmmyogcameuo;
        yqowgmmyogcameuo:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto wsyeeuisawusawwu;
        ykkqammyacwiugwo:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto ocaayuycwauaaggq;
        wgaeaqwwieyaqsyk:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\x72\145\x76\x69\x65\167", "\164\x72\x75\x65", $migiiksoiymissge);
        goto guaokcsyycsuegkw;
        guaokcsyycsuegkw:
        $preview_link = sprintf("\40\x3c\141\40\x74\x61\162\x67\x65\x74\x3d\x22\x5f\x62\x6c\141\x6e\x6b\42\x20\x68\x72\145\x66\x3d\42\x25\163\42\76\x25\163\74\x2f\x61\x3e", esc_url($preview_permalink), sprintf(__("\x50\x72\145\166\x69\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto qwgsqwmqmigwwwug;
        mikouwykeswmseqa:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto igkqkkwwogciekqk;
        ocaayuycwauaaggq:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto wgaeaqwwieyaqsyk;
        qwgsqwmqmigwwwug:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto wkuqsumgkuyygois;
        wsyeeuisawusawwu:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto qecqaigyggikwmeo;
        qecqaigyggikwmeo:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\45\163\40\x75\160\144\141\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\103\x75\163\x74\x6f\155\x20\x66\151\145\154\144\40\165\x70\x64\x61\x74\145\x64\56", PR__CMN__FOUNDATION),
            3 => __("\x43\x75\x73\x74\157\x6d\x20\x66\x69\145\154\144\x20\144\145\x6c\145\x74\145\x64\56", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\163\x20\165\x70\144\x61\x74\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\162\x65\166\151\163\151\x6f\156"]) ? sprintf(__("\x25\163\40\162\x65\x73\x74\157\162\145\144\x20\x74\157\x20\x72\145\166\151\163\x69\157\x6e\x20\x66\x72\x6f\x6d\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\145\166\151\163\151\157\156"], false)) : false,
            6 => sprintf(__("\x25\x73\40\x70\165\142\154\x69\x73\150\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\x25\163\x20\163\141\166\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\45\163\x20\163\165\x62\155\151\164\x74\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\x25\61\x24\163\x20\163\x63\150\145\x64\165\x6c\x65\x64\40\146\x6f\162\72\40\x3c\x73\164\162\x6f\156\147\x3e\45\x32\x24\163\x3c\x2f\163\x74\162\157\x6e\x67\x3e\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\x6a\54\x20\x59\40\100\x20\107\72\151", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\x25\163\40\x64\x72\141\x66\x74\40\165\160\144\x61\164\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto mikouwykeswmseqa;
        mcuskskiayekoamu:
        $post = ManipulatePost::get();
        goto ckcwoiecmaaqauqu;
        uaomcsauseuwaseg:
        return $wumguikkgaigkoee;
        goto euuqicgakkyoayyo;
        wicugycksmwmokkm:
        iqicywyqosukgyom:
        goto uaomcsauseuwaseg;
        igkqkkwwogciekqk:
        $view_link = sprintf("\x20\74\x61\x20\x68\162\x65\x66\x3d\42\x25\163\42\76\45\x73\x3c\57\x61\x3e", esc_url($migiiksoiymissge), sprintf(__("\x56\x69\145\x77\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto qmqooggmccwuiumi;
        ckcwoiecmaaqauqu:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto uwwiiqiikuusuocc;
        euuqicgakkyoayyo:
    }
}

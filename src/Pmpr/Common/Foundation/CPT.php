<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto sweugqqowwoamomc;
        ugsyqugoqmsmwmwc:
        return $this->register;
        goto gaaewsyiiysgawgu;
        sweugqqowwoamomc:
        if ($this->register) {
            goto qawmkgkwgqogkagw;
        }
        goto escickciciscoaec;
        isyiocycgikqamoi:
        qawmkgkwgqogkagw:
        goto ugsyqugoqmsmwmwc;
        escickciciscoaec:
        $this->register = new RegisterPost();
        goto isyiocycgikqamoi;
        gaaewsyiiysgawgu:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto euuqicgakkyoayyo;
        euuqicgakkyoayyo:
        if (!$aokagokqyuysuksm) {
            goto wicugycksmwmokkm;
        }
        goto qmeyqewkyigkqaua;
        jaaukakisoqesywi:
        parent::__construct();
        goto cecukmgemigakuum;
        cyyaeuauwoqoiswy:
        if ($this->miwqiiqeegeqcwis()) {
            goto moqawwqumcaawiac;
        }
        goto cyqmausswuokwsws;
        egsgkaascayskqmu:
        $this->mgoeqkosywwaoqyw();
        goto cyyaeuauwoqoiswy;
        nkaqkoaswwgwkiea:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto oaymugomswyeqgms;
        cecukmgemigakuum:
        uaomcsauseuwaseg:
        goto uywocaygaeysmcsc;
        oaymugomswyeqgms:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto wsyeeuisawusawwu;
            mikouwykeswmseqa:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto igkqkkwwogciekqk;
            wsyeeuisawusawwu:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto uwwiiqiikuusuocc;
            }
            goto qecqaigyggikwmeo;
            ykkqammyacwiugwo:
            uwwiiqiikuusuocc:
            goto ocaayuycwauaaggq;
            qmqooggmccwuiumi:
            goto yqowgmmyogcameuo;
            goto ykkqammyacwiugwo;
            guaokcsyycsuegkw:
            mcuskskiayekoamu:
            goto qwgsqwmqmigwwwug;
            qecqaigyggikwmeo:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto ckcwoiecmaaqauqu;
            }
            goto mikouwykeswmseqa;
            ocaayuycwauaaggq:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto wgaeaqwwieyaqsyk;
            igkqkkwwogciekqk:
            ckcwoiecmaaqauqu:
            goto qmqooggmccwuiumi;
            wgaeaqwwieyaqsyk:
            yqowgmmyogcameuo:
            goto guaokcsyycsuegkw;
            qwgsqwmqmigwwwug:
        }
        goto kayikiwuwkgyiowu;
        kayikiwuwkgyiowu:
        iqicywyqosukgyom:
        goto yiqaaumgyoymwmwc;
        iucacumsqyoimoqq:
        goto uaomcsauseuwaseg;
        goto scmasgusoqouumgu;
        siwmcmcqweiaiyka:
        if (!$post) {
            goto wkuqsumgkuyygois;
        }
        goto oiikwqssmywyqmow;
        yiqaaumgyoymwmwc:
        wkuqsumgkuyygois:
        goto iucacumsqyoimoqq;
        cyqmausswuokwsws:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto cuiocwuoceciyecw;
        scmasgusoqouumgu:
        wicugycksmwmokkm:
        goto egsgkaascayskqmu;
        cuiocwuoceciyecw:
        moqawwqumcaawiac:
        goto jaaukakisoqesywi;
        oiikwqssmywyqmow:
        $qmcuiciekkawmmms = ["\x70\x6f\x73\x74\x5f\x63\x6f\x6e\x74\145\x6e\164" => "\x63\157\156\x74\145\x6e\164", "\x70\x6f\x73\x74\137\x74\151\x74\154\145" => "\x74\151\164\154\x65", "\160\157\x73\164\137\156\x61\155\145" => "\163\x6c\165\147"];
        goto nkaqkoaswwgwkiea;
        qmeyqewkyigkqaua:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto siwmcmcqweiaiyka;
        uywocaygaeysmcsc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\141\146\x74\145\162\x5f\163\167\x69\164\143\150\x5f\164\x68\145\x6d\x65", [$this, "\153\x6d\167\x61\x75\x61\141\143\155\147\x65\161\x61\153\161\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto usqeaouygcuiymaa;
        usqeaouygcuiymaa:
        $this->cecaguuoecmccuse("\160\157\163\x74\x5f\165\x70\144\x61\164\x65\144\x5f\155\145\163\x73\141\147\145\x73", [$this, "\x70\155\x69\167\x6b\x77\x6b\171\x67\141\145\167\151\143\161\x73"])->cecaguuoecmccuse("\163\165\142\164\x69\164\154\x65\x5f\166\151\x65\167\x5f\163\165\x70\x70\x6f\162\164\x65\x64", [$this, "\x6f\x77\x79\143\155\145\x73\x65\x65\x69\x6b\x63\141\161\167\x6b"]);
        goto yaewecqgykieauki;
        gimiyacaiomgucuu:
        $this->cecaguuoecmccuse("\x72\145\x6e\144\x65\162\x5f{$this->miwqiiqeegeqcwis()}\x5f\x63\x68\151\x6c\144\162\x65\156", [$this, "\165\x71\x65\x77\x63\165\x75\151\x67\x67\x63\x63\165\x71\151\141"], 10, 2);
        goto cueiywyuommyocey;
        yaewecqgykieauki:
        if (!method_exists($this, "\x75\161\145\167\143\165\x75\x69\147\147\x63\143\x75\x71\x69\x61")) {
            goto cmqogyywaqmmmwss;
        }
        goto gimiyacaiomgucuu;
        cueiywyuommyocey:
        cmqogyywaqmmmwss:
        goto ysayeagkekiusmeu;
        ysayeagkekiusmeu:
    }
    public function init()
    {
        goto agmeaqeyawqaaqyk;
        wmwyyaqogsqssyac:
        if (!$acqqmqmcquukaqsc) {
            goto iiokyisowgqqswqo;
        }
        goto aomwquymwqgcewis;
        yyskgqykggakkicm:
        yquqkequgwgqogsk:
        goto yuiakguqekmiuamu;
        uwuygoyaaeskeoyy:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto wmwyyaqogsqssyac;
        muwqiukyceakceog:
        $this->yeyiguyegmmyusea();
        goto yyskgqykggakkicm;
        agmeaqeyawqaaqyk:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto kouameayeguwoeos;
        }
        goto qcakmuaykqwiqmuu;
        eqwkisceygagmmwi:
        if (!(method_exists($this, "\171\145\171\151\147\x75\x79\x65\x67\x6d\155\171\165\163\x65\141") && is_admin())) {
            goto yquqkequgwgqogsk;
        }
        goto muwqiukyceakceog;
        iqyiaauwmwcqocok:
        global $wp_rewrite;
        goto uwuygoyaaeskeoyy;
        igkugseogmcgasoq:
        kouameayeguwoeos:
        goto qmysagiommykwiei;
        mcgyqoauweyweoyy:
        iiokyisowgqqswqo:
        goto eqwkisceygagmmwi;
        aomwquymwqgcewis:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto mcgyqoauweyweoyy;
        qmysagiommykwiei:
        $this->register();
        goto iqyiaauwmwcqocok;
        qcakmuaykqwiqmuu:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\163\154\165\147", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\x74\151\164\154\145", "\x65\144\151\x74\157\162", "\145\170\x63\145\x72\160\x74", "\164\150\x75\155\x62\x6e\141\151\x6c"]);
        goto igkugseogmcgasoq;
        yuiakguqekmiuamu:
    }
    public function register()
    {
        goto gsscwykyyykyqaey;
        wuwygsqiyuwgyiuk:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto aemgeqcgumiekeea;
        gsscwykyyykyqaey:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto ygweqayaqqeweiie;
        aecggwmiiueeiwqy:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto euykeqcoiyuwwayu;
        }
        goto wuwygsqiyuwgyiuk;
        ygweqayaqqeweiie:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto aecggwmiiueeiwqy;
        aemgeqcgumiekeea:
        euykeqcoiyuwwayu:
        goto uewgikciuiuosugc;
        uewgikciuiuosugc:
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
        goto cmiqagsewyocigkq;
        omuwgsgyucywcumi:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto qukyuugwauwwcmao;
        qukyuugwauwwcmao:
        suqsqqwoamioowew:
        goto mkeoukmyusisqcwu;
        cmiqagsewyocigkq:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto suqsqqwoamioowew;
        }
        goto omuwgsgyucywcumi;
        mkeoukmyusisqcwu:
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
        goto wmkkoskogqkeoqes;
        amqoooqmwikyueea:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto aokekokkyiesokcu;
        gmaigkymcaycemai:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto skoqcwouicsaeiio;
        csuuismscwsokuem:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\162\145\x76\151\x65\x77", "\164\162\x75\145", $migiiksoiymissge);
        goto usogsumoscyqoeig;
        wuwummwwoskooqyw:
        $view_link = sprintf("\x20\x3c\x61\40\x68\162\x65\146\75\x22\45\x73\42\x3e\45\163\x3c\57\141\x3e", esc_url($migiiksoiymissge), sprintf(__("\x56\x69\145\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto iiaqemkciomeagas;
        skoqcwouicsaeiio:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto oeyiasiguciiogeo;
        }
        goto wywccuaesmeiiyso;
        wskqiqgyeykoqasc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto jaewmeykskaiaace;
        qgickaesisakuiis:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto wuwummwwoskooqyw;
        esggayosiosceauc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto wskqiqgyeykoqasc;
        wywccuaesmeiiyso:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto somiumoieuwcmmyc;
        somiumoieuwcmmyc:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto akucicwkeeouaoyi;
        iiaqemkciomeagas:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto amqoooqmwikyueea;
        usogsumoscyqoeig:
        $preview_link = sprintf("\x20\x3c\x61\40\164\141\x72\x67\145\x74\x3d\42\x5f\142\x6c\x61\156\x6b\x22\40\x68\x72\x65\146\x3d\42\45\163\42\x3e\x25\x73\74\x2f\141\76", esc_url($preview_permalink), sprintf(__("\x50\162\x65\166\x69\145\x77\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto esggayosiosceauc;
        wmkkoskogqkeoqes:
        $post = ManipulatePost::get();
        goto gmaigkymcaycemai;
        akucicwkeeouaoyi:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\x25\163\x20\x75\x70\x64\x61\x74\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\x43\165\163\164\157\x6d\40\x66\151\145\x6c\144\x20\165\x70\144\x61\x74\x65\144\56", PR__CMN__FOUNDATION),
            3 => __("\103\165\163\164\157\x6d\40\146\x69\145\154\x64\x20\x64\x65\154\x65\164\145\x64\56", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\x73\40\165\x70\x64\141\x74\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\x72\x65\166\151\163\x69\157\x6e"]) ? sprintf(__("\x25\x73\40\162\145\163\x74\157\x72\145\x64\x20\x74\157\40\162\145\166\x69\x73\x69\157\156\40\x66\162\x6f\x6d\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\x76\x69\x73\151\157\x6e"], false)) : false,
            6 => sprintf(__("\45\x73\40\160\165\142\154\151\x73\x68\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\x25\163\x20\163\141\x76\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\x25\x73\40\163\x75\142\x6d\x69\x74\164\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\45\x31\44\x73\x20\163\x63\x68\145\144\165\x6c\145\x64\x20\146\157\162\x3a\x20\x3c\163\x74\x72\x6f\x6e\147\x3e\45\x32\44\163\x3c\57\x73\164\x72\157\156\147\x3e\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\x20\152\54\x20\131\x20\x40\x20\x47\x3a\151", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\45\x73\40\x64\x72\x61\x66\164\40\x75\x70\x64\x61\164\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto qgickaesisakuiis;
        jaewmeykskaiaace:
        oeyiasiguciiogeo:
        goto sccwqccwauwoewuw;
        sccwqccwauwoewuw:
        return $wumguikkgaigkoee;
        goto wumwuakuugyacwka;
        aokekokkyiesokcu:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto csuuismscwsokuem;
        wumwuakuugyacwka:
    }
}

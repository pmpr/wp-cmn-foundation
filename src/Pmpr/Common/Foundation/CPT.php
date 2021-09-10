<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto ugsyqugoqmsmwmwc;
        gaaewsyiiysgawgu:
        $this->register = new RegisterPost();
        goto moqawwqumcaawiac;
        ugsyqugoqmsmwmwc:
        if ($this->register) {
            goto isyiocycgikqamoi;
        }
        goto gaaewsyiiysgawgu;
        moqawwqumcaawiac:
        isyiocycgikqamoi:
        goto iqicywyqosukgyom;
        iqicywyqosukgyom:
        return $this->register;
        goto mcuskskiayekoamu;
        mcuskskiayekoamu:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto oiikwqssmywyqmow;
        nkaqkoaswwgwkiea:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto oaymugomswyeqgms;
        yiqaaumgyoymwmwc:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto iucacumsqyoimoqq;
        uywocaygaeysmcsc:
        ckcwoiecmaaqauqu:
        goto cmqogyywaqmmmwss;
        cecukmgemigakuum:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto uywocaygaeysmcsc;
        cyyaeuauwoqoiswy:
        goto siwmcmcqweiaiyka;
        goto cyqmausswuokwsws;
        usqeaouygcuiymaa:
        siwmcmcqweiaiyka:
        goto yaewecqgykieauki;
        oiikwqssmywyqmow:
        if (!$aokagokqyuysuksm) {
            goto qmeyqewkyigkqaua;
        }
        goto nkaqkoaswwgwkiea;
        cuiocwuoceciyecw:
        $this->mgoeqkosywwaoqyw();
        goto jaaukakisoqesywi;
        iucacumsqyoimoqq:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto igkqkkwwogciekqk;
            wicugycksmwmokkm:
            yqowgmmyogcameuo:
            goto uaomcsauseuwaseg;
            ykkqammyacwiugwo:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto ocaayuycwauaaggq;
            guaokcsyycsuegkw:
            qecqaigyggikwmeo:
            goto qwgsqwmqmigwwwug;
            wkuqsumgkuyygois:
            mikouwykeswmseqa:
            goto wicugycksmwmokkm;
            wgaeaqwwieyaqsyk:
            goto mikouwykeswmseqa;
            goto guaokcsyycsuegkw;
            qmqooggmccwuiumi:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto wsyeeuisawusawwu;
            }
            goto ykkqammyacwiugwo;
            qwgsqwmqmigwwwug:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto wkuqsumgkuyygois;
            igkqkkwwogciekqk:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto qecqaigyggikwmeo;
            }
            goto qmqooggmccwuiumi;
            ocaayuycwauaaggq:
            wsyeeuisawusawwu:
            goto wgaeaqwwieyaqsyk;
            uaomcsauseuwaseg:
        }
        goto scmasgusoqouumgu;
        cyqmausswuokwsws:
        qmeyqewkyigkqaua:
        goto cuiocwuoceciyecw;
        cmqogyywaqmmmwss:
        parent::__construct();
        goto usqeaouygcuiymaa;
        kayikiwuwkgyiowu:
        $qmcuiciekkawmmms = ["\160\157\x73\164\x5f\143\x6f\156\x74\145\x6e\164" => "\143\x6f\156\164\x65\x6e\x74", "\x70\157\x73\x74\x5f\x74\151\x74\154\x65" => "\x74\151\164\154\145", "\x70\157\163\164\x5f\156\x61\155\x65" => "\x73\154\165\147"];
        goto yiqaaumgyoymwmwc;
        oaymugomswyeqgms:
        if (!$post) {
            goto euuqicgakkyoayyo;
        }
        goto kayikiwuwkgyiowu;
        jaaukakisoqesywi:
        if ($this->miwqiiqeegeqcwis()) {
            goto ckcwoiecmaaqauqu;
        }
        goto cecukmgemigakuum;
        egsgkaascayskqmu:
        euuqicgakkyoayyo:
        goto cyyaeuauwoqoiswy;
        scmasgusoqouumgu:
        uwwiiqiikuusuocc:
        goto egsgkaascayskqmu;
        yaewecqgykieauki:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu("\141\146\164\145\x72\x5f\163\x77\151\x74\x63\x68\x5f\164\x68\x65\x6d\x65", [$this, "\153\x6d\x77\x61\165\141\141\143\x6d\x67\x65\x71\x61\153\161\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto cueiywyuommyocey;
        iiokyisowgqqswqo:
        gimiyacaiomgucuu:
        goto yquqkequgwgqogsk;
        cueiywyuommyocey:
        $this->cecaguuoecmccuse("\160\x6f\x73\x74\137\165\160\144\x61\164\x65\144\x5f\155\145\x73\163\141\x67\145\163", [$this, "\x70\x6d\151\167\x6b\x77\153\171\x67\x61\145\167\x69\x63\x71\x73"])->cecaguuoecmccuse("\163\x75\x62\x74\151\164\154\x65\x5f\x76\x69\145\x77\x5f\x73\x75\x70\x70\157\162\164\145\x64", [$this, "\157\x77\171\x63\x6d\145\x73\145\x65\151\153\x63\141\x71\167\x6b"]);
        goto ysayeagkekiusmeu;
        kouameayeguwoeos:
        $this->cecaguuoecmccuse("\162\145\x6e\x64\145\x72\x5f{$this->miwqiiqeegeqcwis()}\x5f\143\x68\151\154\x64\x72\145\156", [$this, "\x75\x71\x65\x77\x63\165\x75\151\147\147\143\x63\x75\x71\x69\x61"], 10, 2);
        goto iiokyisowgqqswqo;
        ysayeagkekiusmeu:
        if (!method_exists($this, "\x75\x71\145\x77\143\x75\x75\151\147\147\x63\x63\165\x71\x69\x61")) {
            goto gimiyacaiomgucuu;
        }
        goto kouameayeguwoeos;
        yquqkequgwgqogsk:
    }
    public function init()
    {
        goto qmysagiommykwiei;
        qmysagiommykwiei:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto agmeaqeyawqaaqyk;
        }
        goto iqyiaauwmwcqocok;
        muwqiukyceakceog:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto yyskgqykggakkicm;
        wmwyyaqogsqssyac:
        $this->register();
        goto aomwquymwqgcewis;
        mcgyqoauweyweoyy:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto eqwkisceygagmmwi;
        yuiakguqekmiuamu:
        if (!(method_exists($this, "\171\145\x79\x69\147\165\x79\x65\x67\x6d\x6d\171\x75\x73\x65\x61") && is_admin())) {
            goto igkugseogmcgasoq;
        }
        goto euykeqcoiyuwwayu;
        aomwquymwqgcewis:
        global $wp_rewrite;
        goto mcgyqoauweyweoyy;
        iqyiaauwmwcqocok:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\x73\154\x75\x67", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\164\151\164\154\x65", "\x65\x64\x69\164\x6f\162", "\x65\170\x63\x65\x72\160\164", "\164\x68\165\155\142\156\x61\151\154"]);
        goto uwuygoyaaeskeoyy;
        uwuygoyaaeskeoyy:
        agmeaqeyawqaaqyk:
        goto wmwyyaqogsqssyac;
        yyskgqykggakkicm:
        qcakmuaykqwiqmuu:
        goto yuiakguqekmiuamu;
        eqwkisceygagmmwi:
        if (!$acqqmqmcquukaqsc) {
            goto qcakmuaykqwiqmuu;
        }
        goto muwqiukyceakceog;
        euykeqcoiyuwwayu:
        $this->yeyiguyegmmyusea();
        goto gsscwykyyykyqaey;
        gsscwykyyykyqaey:
        igkugseogmcgasoq:
        goto ygweqayaqqeweiie;
        ygweqayaqqeweiie:
    }
    public function register()
    {
        goto wuwygsqiyuwgyiuk;
        aemgeqcgumiekeea:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto uewgikciuiuosugc;
        suqsqqwoamioowew:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto cmiqagsewyocigkq;
        cmiqagsewyocigkq:
        aecggwmiiueeiwqy:
        goto omuwgsgyucywcumi;
        uewgikciuiuosugc:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aecggwmiiueeiwqy;
        }
        goto suqsqqwoamioowew;
        wuwygsqiyuwgyiuk:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto aemgeqcgumiekeea;
        omuwgsgyucywcumi:
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
        goto mkeoukmyusisqcwu;
        oeyiasiguciiogeo:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto wmkkoskogqkeoqes;
        wmkkoskogqkeoqes:
        qukyuugwauwwcmao:
        goto gmaigkymcaycemai;
        mkeoukmyusisqcwu:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto qukyuugwauwwcmao;
        }
        goto oeyiasiguciiogeo;
        gmaigkymcaycemai:
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
        goto wywccuaesmeiiyso;
        sccwqccwauwoewuw:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto wumwuakuugyacwka;
        cikeosouygiiowwa:
        return $wumguikkgaigkoee;
        goto cgiyoeciuqoqksqo;
        wskqiqgyeykoqasc:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\x72\145\x76\x69\145\167", "\x74\162\x75\145", $migiiksoiymissge);
        goto jaewmeykskaiaace;
        wuwummwwoskooqyw:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto iiaqemkciomeagas;
        aokekokkyiesokcu:
        $view_link = sprintf("\40\x3c\x61\40\x68\x72\x65\x66\75\x22\x25\163\x22\x3e\45\x73\x3c\x2f\141\76", esc_url($migiiksoiymissge), sprintf(__("\x56\x69\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto csuuismscwsokuem;
        giqkswsigocgaoee:
        skoqcwouicsaeiio:
        goto cikeosouygiiowwa;
        jaewmeykskaiaace:
        $preview_link = sprintf("\x20\x3c\141\x20\164\141\162\147\145\x74\75\42\x5f\142\x6c\x61\156\153\42\x20\x68\x72\145\x66\75\x22\45\x73\x22\x3e\x25\163\x3c\57\x61\x3e", esc_url($preview_permalink), sprintf(__("\x50\x72\x65\x76\151\x65\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto sccwqccwauwoewuw;
        qgickaesisakuiis:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto wuwummwwoskooqyw;
        wywccuaesmeiiyso:
        $post = ManipulatePost::get();
        goto somiumoieuwcmmyc;
        wumwuakuugyacwka:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto giqkswsigocgaoee;
        somiumoieuwcmmyc:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto akucicwkeeouaoyi;
        usogsumoscyqoeig:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto esggayosiosceauc;
        iiaqemkciomeagas:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\45\163\x20\x75\160\x64\x61\x74\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\103\x75\163\164\157\x6d\40\146\x69\145\154\x64\x20\x75\160\x64\141\164\145\144\56", PR__CMN__FOUNDATION),
            3 => __("\x43\165\x73\164\157\x6d\x20\146\151\145\154\144\x20\144\x65\x6c\145\x74\145\144\x2e", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\163\40\165\160\x64\141\x74\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\162\x65\x76\151\x73\x69\x6f\156"]) ? sprintf(__("\x25\163\x20\x72\x65\163\x74\157\162\145\x64\x20\164\157\x20\x72\145\166\x69\x73\151\x6f\x6e\x20\146\162\157\x6d\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\145\166\151\163\151\157\x6e"], false)) : false,
            6 => sprintf(__("\45\163\40\x70\x75\142\x6c\151\x73\150\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\45\163\x20\x73\x61\x76\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\x25\163\40\163\165\142\x6d\151\164\x74\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\x25\x31\44\163\x20\163\x63\x68\x65\144\165\x6c\x65\x64\40\146\x6f\162\x3a\x20\74\163\x74\162\x6f\156\x67\76\45\x32\x24\x73\x3c\57\163\x74\162\x6f\x6e\x67\76\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\152\x2c\40\131\40\100\x20\x47\72\x69", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\45\x73\x20\144\162\141\x66\164\40\x75\x70\x64\141\x74\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto amqoooqmwikyueea;
        csuuismscwsokuem:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto usogsumoscyqoeig;
        amqoooqmwikyueea:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto aokekokkyiesokcu;
        akucicwkeeouaoyi:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto skoqcwouicsaeiio;
        }
        goto qgickaesisakuiis;
        esggayosiosceauc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto wskqiqgyeykoqasc;
        cgiyoeciuqoqksqo:
    }
}

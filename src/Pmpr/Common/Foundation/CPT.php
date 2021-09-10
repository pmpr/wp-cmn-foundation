<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto uewgikciuiuosugc;
        omuwgsgyucywcumi:
        return $this->register;
        goto qukyuugwauwwcmao;
        cmiqagsewyocigkq:
        aemgeqcgumiekeea:
        goto omuwgsgyucywcumi;
        uewgikciuiuosugc:
        if ($this->register) {
            goto aemgeqcgumiekeea;
        }
        goto suqsqqwoamioowew;
        suqsqqwoamioowew:
        $this->register = new RegisterPost();
        goto cmiqagsewyocigkq;
        qukyuugwauwwcmao:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto wumwuakuugyacwka;
        wumwuakuugyacwka:
        if (!$aokagokqyuysuksm) {
            goto jaewmeykskaiaace;
        }
        goto giqkswsigocgaoee;
        giqkswsigocgaoee:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto cikeosouygiiowwa;
        cikeosouygiiowwa:
        if (!$post) {
            goto wskqiqgyeykoqasc;
        }
        goto cgiyoeciuqoqksqo;
        cwcyomuioskkeiou:
        if ($this->miwqiiqeegeqcwis()) {
            goto mkeoukmyusisqcwu;
        }
        goto iiaaamgqucesscwa;
        uwkuuycaymkewaqk:
        oeyiasiguciiogeo:
        goto kueaeuuecmugkyco;
        gaecsagiymeucuoc:
        jaewmeykskaiaace:
        goto muomcgmcoayqykcs;
        meguagoagscugsew:
        mkeoukmyusisqcwu:
        goto qcqssmkigogcyouq;
        iiaaamgqucesscwa:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto meguagoagscugsew;
        ugqcomuioeousygc:
        sccwqccwauwoewuw:
        goto ekkwsmagosycuwes;
        cgiyoeciuqoqksqo:
        $qmcuiciekkawmmms = ["\x70\x6f\x73\x74\x5f\x63\157\156\164\145\x6e\x74" => "\x63\x6f\156\x74\x65\x6e\164", "\160\x6f\x73\164\x5f\164\151\164\154\145" => "\x74\x69\164\x6c\x65", "\x70\157\163\164\x5f\156\141\155\x65" => "\x73\x6c\165\147"];
        goto iseecaeayskgyeiu;
        mcokakckyeogsgie:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto somiumoieuwcmmyc;
            akucicwkeeouaoyi:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto gmaigkymcaycemai;
            }
            goto qgickaesisakuiis;
            qgickaesisakuiis:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto wuwummwwoskooqyw;
            usogsumoscyqoeig:
            wmkkoskogqkeoqes:
            goto esggayosiosceauc;
            amqoooqmwikyueea:
            skoqcwouicsaeiio:
            goto aokekokkyiesokcu;
            wuwummwwoskooqyw:
            gmaigkymcaycemai:
            goto iiaqemkciomeagas;
            somiumoieuwcmmyc:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto skoqcwouicsaeiio;
            }
            goto akucicwkeeouaoyi;
            iiaqemkciomeagas:
            goto wywccuaesmeiiyso;
            goto amqoooqmwikyueea;
            csuuismscwsokuem:
            wywccuaesmeiiyso:
            goto usogsumoscyqoeig;
            aokekokkyiesokcu:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto csuuismscwsokuem;
            esggayosiosceauc:
        }
        goto uwkuuycaymkewaqk;
        kueaeuuecmugkyco:
        wskqiqgyeykoqasc:
        goto cowuwckyacimcqsm;
        iseecaeayskgyeiu:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto mcokakckyeogsgie;
        muomcgmcoayqykcs:
        $this->mgoeqkosywwaoqyw();
        goto cwcyomuioskkeiou;
        cowuwckyacimcqsm:
        goto sccwqccwauwoewuw;
        goto gaecsagiymeucuoc;
        qcqssmkigogcyouq:
        parent::__construct();
        goto ugqcomuioeousygc;
        ekkwsmagosycuwes:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\141\x66\x74\x65\x72\137\x73\x77\151\x74\x63\150\137\164\x68\x65\x6d\x65", [$this, "\153\x6d\167\x61\x75\x61\141\x63\x6d\147\145\x71\141\153\x71\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto sqemyumsygwsywci;
        eosqwowqiuwqowcs:
        mkigwwusauycogeo:
        goto gqioicscmcgwkakm;
        ewogmgqociikueio:
        if (!method_exists($this, "\165\x71\x65\167\x63\165\x75\x69\x67\x67\143\143\165\x71\151\141")) {
            goto mkigwwusauycogeo;
        }
        goto lsgaicysguweqccw;
        sqemyumsygwsywci:
        $this->cecaguuoecmccuse("\160\157\163\164\137\165\x70\x64\x61\x74\x65\x64\137\155\145\x73\x73\141\x67\145\x73", [$this, "\160\155\151\167\153\167\x6b\x79\x67\x61\145\x77\x69\143\161\163"])->cecaguuoecmccuse("\163\165\142\164\151\164\154\145\137\166\151\145\x77\137\163\x75\x70\x70\157\162\x74\x65\x64", [$this, "\157\x77\171\143\155\x65\163\x65\x65\x69\x6b\x63\x61\161\167\153"]);
        goto ewogmgqociikueio;
        lsgaicysguweqccw:
        $this->cecaguuoecmccuse("\162\x65\156\x64\145\x72\137{$this->miwqiiqeegeqcwis()}\137\x63\150\151\154\x64\162\x65\156", [$this, "\165\x71\x65\x77\143\165\x75\151\147\x67\143\143\165\161\151\x61"], 10, 2);
        goto eosqwowqiuwqowcs;
        gqioicscmcgwkakm:
    }
    public function init()
    {
        goto omioyaykskkmaaig;
        kuqosogscasgaywu:
        casyeyyykgiimmko:
        goto eacioiukuoyksseo;
        gummamsgywaokgig:
        global $wp_rewrite;
        goto ewyueqokigysemgu;
        gsoyiigokegkmoki:
        if (!(method_exists($this, "\x79\145\x79\151\x67\x75\171\145\147\155\155\171\x75\163\145\141") && is_admin())) {
            goto casyeyyykgiimmko;
        }
        goto gawiwysyuakagyaw;
        yqeescckkwigakku:
        eouuqweagyceooya:
        goto oyyiikasiaaoecis;
        omioyaykskkmaaig:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto eouuqweagyceooya;
        }
        goto yscwicwwogwmouuy;
        gawiwysyuakagyaw:
        $this->yeyiguyegmmyusea();
        goto kuqosogscasgaywu;
        ewyueqokigysemgu:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto gigqowomouqoseqm;
        zwqoeygkiswogcqe:
        soyiakkqikmoiocq:
        goto gsoyiigokegkmoki;
        yscwicwwogwmouuy:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\163\154\165\x67", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\164\x69\164\x6c\145", "\x65\x64\151\164\x6f\162", "\145\x78\143\145\162\160\x74", "\164\150\165\x6d\142\x6e\x61\x69\154"]);
        goto yqeescckkwigakku;
        gigqowomouqoseqm:
        if (!$acqqmqmcquukaqsc) {
            goto soyiakkqikmoiocq;
        }
        goto ugaiiouaiewqiowk;
        oyyiikasiaaoecis:
        $this->register();
        goto gummamsgywaokgig;
        ugaiiouaiewqiowk:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto zwqoeygkiswogcqe;
        eacioiukuoyksseo:
    }
    public function register()
    {
        goto ugeukowiaigeagwy;
        mmqisagoemaccuwg:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto eqkeyqqwmmcisqac;
        }
        goto ksayqqaywugoaemm;
        yiwuuaookucgwmqo:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto mmqisagoemaccuwg;
        yoiesagguwgeoksm:
        eqkeyqqwmmcisqac:
        goto oaqocgwyuyakaeag;
        ksayqqaywugoaemm:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto yoiesagguwgeoksm;
        ugeukowiaigeagwy:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto yiwuuaookucgwmqo;
        oaqocgwyuyakaeag:
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
        goto oewywyackmoqssga;
        qgomsueoywqqiaea:
        msaqmcugmqimwwmo:
        goto cggekgkgimqweweq;
        oewywyackmoqssga:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto msaqmcugmqimwwmo;
        }
        goto gwmcagqwciamkige;
        gwmcagqwciamkige:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto qgomsueoywqqiaea;
        cggekgkgimqweweq:
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
        goto wkmkyqgwsimewuse;
        wkmkyqgwsimewuse:
        $post = ManipulatePost::get();
        goto aoosameuiqeqgoey;
        mgugkeugqaimsqog:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto geeiwiekmemskumu;
        qeaqkmcaamigyaqs:
        oommkeyocacugygs:
        goto qagqcqyssacqgaie;
        ikskmqusyosqemgw:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto wscseoawewqewemo;
        geeiwiekmemskumu:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto ikskmqusyosqemgw;
        uqeyweoakwiaqmmk:
        $preview_link = sprintf("\40\x3c\x61\40\x74\141\x72\x67\x65\x74\75\x22\x5f\x62\x6c\x61\x6e\x6b\x22\x20\x68\x72\145\146\x3d\42\x25\x73\42\76\x25\x73\x3c\x2f\x61\x3e", esc_url($preview_permalink), sprintf(__("\120\x72\145\166\151\x65\167\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto fsiosygamoowowke;
        qagqcqyssacqgaie:
        return $wumguikkgaigkoee;
        goto aouokseiyyyuwqcg;
        fsiosygamoowowke:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto ciqygeyyoukgiowa;
        wscseoawewqewemo:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\162\x65\x76\x69\x65\167", "\x74\x72\165\145", $migiiksoiymissge);
        goto uqeyweoakwiaqmmk;
        oeygkuuqueoosiyc:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto yoiagkgmgkyggeae;
        aoosameuiqeqgoey:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto ggkmskqeumuuiwck;
        ciqygeyyoukgiowa:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto qeaqkmcaamigyaqs;
        yuymgwoyyoaisqqk:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto oeygkuuqueoosiyc;
        ggkmskqeumuuiwck:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto oommkeyocacugygs;
        }
        goto yuymgwoyyoaisqqk;
        yoiagkgmgkyggeae:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\x25\x73\40\x75\x70\x64\x61\x74\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\103\165\x73\164\157\x6d\40\x66\x69\x65\x6c\x64\x20\165\160\x64\x61\164\x65\144\56", PR__CMN__FOUNDATION),
            3 => __("\x43\x75\x73\164\x6f\155\40\x66\151\x65\154\x64\40\x64\145\154\145\164\145\x64\56", PR__CMN__FOUNDATION),
            4 => sprintf(__("\45\163\x20\165\x70\x64\x61\164\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\162\145\x76\151\x73\151\157\156"]) ? sprintf(__("\x25\163\40\x72\x65\x73\164\x6f\x72\x65\x64\40\x74\x6f\40\162\145\166\151\163\x69\x6f\x6e\x20\146\x72\157\155\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\166\151\x73\151\157\156"], false)) : false,
            6 => sprintf(__("\45\163\40\160\165\x62\x6c\x69\163\150\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\45\x73\x20\163\x61\x76\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\45\x73\40\163\x75\142\155\x69\164\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\45\61\44\x73\40\163\x63\x68\x65\x64\165\154\x65\x64\40\146\x6f\x72\x3a\40\74\163\x74\x72\157\156\x67\x3e\x25\x32\44\163\74\x2f\163\x74\162\x6f\156\x67\x3e\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\40\x6a\54\40\131\40\100\x20\107\x3a\151", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\45\x73\40\144\162\141\146\164\x20\x75\x70\144\x61\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto eeaecmiymcuigowe;
        eeaecmiymcuigowe:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto saaawiokacgeeksq;
        saaawiokacgeeksq:
        $view_link = sprintf("\x20\74\x61\x20\150\162\145\x66\x3d\x22\x25\x73\x22\x3e\x25\x73\74\57\141\76", esc_url($migiiksoiymissge), sprintf(__("\x56\151\x65\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto mgugkeugqaimsqog;
        aouokseiyyyuwqcg:
    }
}

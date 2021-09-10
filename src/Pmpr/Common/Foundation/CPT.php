<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto aemgeqcgumiekeea;
        aemgeqcgumiekeea:
        if ($this->register) {
            goto wuwygsqiyuwgyiuk;
        }
        goto uewgikciuiuosugc;
        uewgikciuiuosugc:
        $this->register = new RegisterPost();
        goto suqsqqwoamioowew;
        cmiqagsewyocigkq:
        return $this->register;
        goto omuwgsgyucywcumi;
        suqsqqwoamioowew:
        wuwygsqiyuwgyiuk:
        goto cmiqagsewyocigkq;
        omuwgsgyucywcumi:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto sccwqccwauwoewuw;
        qcqssmkigogcyouq:
        jaewmeykskaiaace:
        goto ugqcomuioeousygc;
        iiaaamgqucesscwa:
        qukyuugwauwwcmao:
        goto meguagoagscugsew;
        uwkuuycaymkewaqk:
        esggayosiosceauc:
        goto kueaeuuecmugkyco;
        cwcyomuioskkeiou:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto iiaaamgqucesscwa;
        muomcgmcoayqykcs:
        if ($this->miwqiiqeegeqcwis()) {
            goto qukyuugwauwwcmao;
        }
        goto cwcyomuioskkeiou;
        gaecsagiymeucuoc:
        $this->mgoeqkosywwaoqyw();
        goto muomcgmcoayqykcs;
        giqkswsigocgaoee:
        if (!$post) {
            goto esggayosiosceauc;
        }
        goto cikeosouygiiowwa;
        wumwuakuugyacwka:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto giqkswsigocgaoee;
        meguagoagscugsew:
        parent::__construct();
        goto qcqssmkigogcyouq;
        kueaeuuecmugkyco:
        goto jaewmeykskaiaace;
        goto cowuwckyacimcqsm;
        cgiyoeciuqoqksqo:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto iseecaeayskgyeiu;
        cikeosouygiiowwa:
        $qmcuiciekkawmmms = ["\160\157\163\x74\x5f\x63\x6f\x6e\x74\x65\156\164" => "\x63\x6f\156\164\x65\x6e\164", "\x70\x6f\x73\164\137\x74\x69\x74\154\145" => "\164\x69\x74\x6c\x65", "\160\x6f\x73\x74\x5f\x6e\x61\x6d\145" => "\x73\154\165\147"];
        goto cgiyoeciuqoqksqo;
        iseecaeayskgyeiu:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto wywccuaesmeiiyso;
            qgickaesisakuiis:
            wmkkoskogqkeoqes:
            goto wuwummwwoskooqyw;
            wuwummwwoskooqyw:
            goto skoqcwouicsaeiio;
            goto iiaqemkciomeagas;
            somiumoieuwcmmyc:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto wmkkoskogqkeoqes;
            }
            goto akucicwkeeouaoyi;
            amqoooqmwikyueea:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto aokekokkyiesokcu;
            akucicwkeeouaoyi:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto qgickaesisakuiis;
            wywccuaesmeiiyso:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto gmaigkymcaycemai;
            }
            goto somiumoieuwcmmyc;
            csuuismscwsokuem:
            oeyiasiguciiogeo:
            goto usogsumoscyqoeig;
            aokekokkyiesokcu:
            skoqcwouicsaeiio:
            goto csuuismscwsokuem;
            iiaqemkciomeagas:
            gmaigkymcaycemai:
            goto amqoooqmwikyueea;
            usogsumoscyqoeig:
        }
        goto mcokakckyeogsgie;
        sccwqccwauwoewuw:
        if (!$aokagokqyuysuksm) {
            goto wskqiqgyeykoqasc;
        }
        goto wumwuakuugyacwka;
        cowuwckyacimcqsm:
        wskqiqgyeykoqasc:
        goto gaecsagiymeucuoc;
        mcokakckyeogsgie:
        mkeoukmyusisqcwu:
        goto uwkuuycaymkewaqk;
        ugqcomuioeousygc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\x66\164\x65\x72\137\163\167\151\164\x63\150\x5f\164\x68\145\x6d\x65", [$this, "\153\x6d\167\141\165\141\141\143\x6d\x67\145\161\x61\x6b\161\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto mkigwwusauycogeo;
        lsgaicysguweqccw:
        ekkwsmagosycuwes:
        goto eosqwowqiuwqowcs;
        mkigwwusauycogeo:
        $this->cecaguuoecmccuse("\160\157\163\164\x5f\165\160\x64\x61\164\x65\x64\x5f\155\145\x73\x73\x61\x67\145\x73", [$this, "\x70\x6d\151\x77\x6b\167\x6b\171\x67\141\x65\x77\x69\143\x71\163"])->cecaguuoecmccuse("\163\165\142\164\x69\164\154\145\137\x76\x69\145\x77\x5f\x73\165\x70\x70\157\162\164\145\x64", [$this, "\x6f\167\x79\x63\x6d\145\x73\x65\145\151\x6b\143\141\x71\167\153"]);
        goto sqemyumsygwsywci;
        sqemyumsygwsywci:
        if (!method_exists($this, "\165\161\x65\x77\x63\x75\x75\x69\147\147\143\x63\x75\x71\x69\141")) {
            goto ekkwsmagosycuwes;
        }
        goto ewogmgqociikueio;
        ewogmgqociikueio:
        $this->cecaguuoecmccuse("\162\x65\x6e\x64\145\x72\x5f{$this->miwqiiqeegeqcwis()}\x5f\143\x68\151\154\144\x72\x65\x6e", [$this, "\x75\x71\145\167\143\165\165\151\x67\147\143\x63\x75\161\x69\141"], 10, 2);
        goto lsgaicysguweqccw;
        eosqwowqiuwqowcs:
    }
    public function init()
    {
        goto casyeyyykgiimmko;
        casyeyyykgiimmko:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto gqioicscmcgwkakm;
        }
        goto omioyaykskkmaaig;
        gsoyiigokegkmoki:
        $this->yeyiguyegmmyusea();
        goto gawiwysyuakagyaw;
        omioyaykskkmaaig:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\163\x6c\x75\147", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\x74\x69\164\x6c\145", "\145\x64\x69\x74\157\162", "\145\x78\x63\x65\x72\x70\x74", "\x74\150\165\x6d\142\x6e\141\151\x6c"]);
        goto yscwicwwogwmouuy;
        gummamsgywaokgig:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto ewyueqokigysemgu;
        yscwicwwogwmouuy:
        gqioicscmcgwkakm:
        goto yqeescckkwigakku;
        oyyiikasiaaoecis:
        global $wp_rewrite;
        goto gummamsgywaokgig;
        ugaiiouaiewqiowk:
        eouuqweagyceooya:
        goto zwqoeygkiswogcqe;
        gigqowomouqoseqm:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ugaiiouaiewqiowk;
        ewyueqokigysemgu:
        if (!$acqqmqmcquukaqsc) {
            goto eouuqweagyceooya;
        }
        goto gigqowomouqoseqm;
        zwqoeygkiswogcqe:
        if (!(method_exists($this, "\x79\145\x79\151\147\165\171\145\x67\155\155\x79\x75\x73\145\x61") && is_admin())) {
            goto soyiakkqikmoiocq;
        }
        goto gsoyiigokegkmoki;
        yqeescckkwigakku:
        $this->register();
        goto oyyiikasiaaoecis;
        gawiwysyuakagyaw:
        soyiakkqikmoiocq:
        goto kuqosogscasgaywu;
        kuqosogscasgaywu:
    }
    public function register()
    {
        goto eqkeyqqwmmcisqac;
        eqkeyqqwmmcisqac:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto ugeukowiaigeagwy;
        ksayqqaywugoaemm:
        eacioiukuoyksseo:
        goto yoiesagguwgeoksm;
        mmqisagoemaccuwg:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto ksayqqaywugoaemm;
        yiwuuaookucgwmqo:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto eacioiukuoyksseo;
        }
        goto mmqisagoemaccuwg;
        ugeukowiaigeagwy:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto yiwuuaookucgwmqo;
        yoiesagguwgeoksm:
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
        goto msaqmcugmqimwwmo;
        msaqmcugmqimwwmo:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto oaqocgwyuyakaeag;
        }
        goto oewywyackmoqssga;
        gwmcagqwciamkige:
        oaqocgwyuyakaeag:
        goto qgomsueoywqqiaea;
        oewywyackmoqssga:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto gwmcagqwciamkige;
        qgomsueoywqqiaea:
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
        goto oommkeyocacugygs;
        qeaqkmcaamigyaqs:
        return $wumguikkgaigkoee;
        goto qagqcqyssacqgaie;
        aoosameuiqeqgoey:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto cggekgkgimqweweq;
        }
        goto ggkmskqeumuuiwck;
        ggkmskqeumuuiwck:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto yuymgwoyyoaisqqk;
        geeiwiekmemskumu:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto ikskmqusyosqemgw;
        yuymgwoyyoaisqqk:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto oeygkuuqueoosiyc;
        oommkeyocacugygs:
        $post = ManipulatePost::get();
        goto wkmkyqgwsimewuse;
        fsiosygamoowowke:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto ciqygeyyoukgiowa;
        yoiagkgmgkyggeae:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto eeaecmiymcuigowe;
        uqeyweoakwiaqmmk:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto fsiosygamoowowke;
        mgugkeugqaimsqog:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto geeiwiekmemskumu;
        saaawiokacgeeksq:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto mgugkeugqaimsqog;
        ikskmqusyosqemgw:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\x70\162\145\166\x69\145\x77", "\x74\162\x75\x65", $migiiksoiymissge);
        goto wscseoawewqewemo;
        wscseoawewqewemo:
        $preview_link = sprintf("\40\x3c\x61\40\164\141\x72\147\x65\164\75\42\137\142\154\x61\156\x6b\x22\40\x68\x72\145\146\x3d\42\45\163\x22\76\x25\x73\x3c\x2f\x61\76", esc_url($preview_permalink), sprintf(__("\120\162\x65\x76\x69\x65\x77\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto uqeyweoakwiaqmmk;
        eeaecmiymcuigowe:
        $view_link = sprintf("\x20\74\141\40\150\x72\145\x66\x3d\42\45\x73\x22\76\x25\163\x3c\57\x61\76", esc_url($migiiksoiymissge), sprintf(__("\126\151\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto saaawiokacgeeksq;
        wkmkyqgwsimewuse:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto aoosameuiqeqgoey;
        ciqygeyyoukgiowa:
        cggekgkgimqweweq:
        goto qeaqkmcaamigyaqs;
        oeygkuuqueoosiyc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\45\x73\40\x75\160\144\x61\164\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\x43\165\163\164\157\155\x20\x66\151\145\154\x64\40\x75\x70\144\141\164\145\x64\56", PR__CMN__FOUNDATION),
            3 => __("\x43\x75\x73\164\157\x6d\x20\x66\151\145\x6c\x64\x20\x64\x65\154\x65\x74\145\144\x2e", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\163\x20\x75\160\144\141\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\x72\x65\x76\x69\x73\x69\157\x6e"]) ? sprintf(__("\x25\x73\40\162\145\x73\164\157\162\x65\144\x20\164\157\x20\x72\x65\166\x69\163\x69\157\x6e\x20\146\162\157\x6d\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\166\x69\163\x69\x6f\156"], false)) : false,
            6 => sprintf(__("\x25\x73\40\160\165\142\154\151\x73\150\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\x25\x73\40\163\x61\x76\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\x25\x73\x20\163\x75\142\x6d\151\164\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\x25\61\44\163\x20\x73\x63\x68\x65\x64\165\154\145\x64\40\146\x6f\162\72\40\x3c\x73\164\162\x6f\x6e\147\76\x25\x32\44\163\74\x2f\163\x74\162\157\156\147\76\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\40\x6a\54\40\131\40\x40\40\107\72\x69", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\45\163\40\144\x72\x61\146\164\x20\165\x70\144\141\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto yoiagkgmgkyggeae;
        qagqcqyssacqgaie:
    }
}

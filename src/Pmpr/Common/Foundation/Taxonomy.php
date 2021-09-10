<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Convert\Type\ConvertArray;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Taxonomy extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x69\x6e\x69\164"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\164\x5f\x74\145\x72\x6d\163\137\141\x72\147\163", [$this, "\x73\147\153\x69\x79\145\x77\x63\x6f\157\x67\x67\x63\155\153\x73"])->cecaguuoecmccuse("\147\145\x74\x5f\x74\x65\x72\155\163\137\x6f\x72\144\x65\162\142\x79", [$this, "\153\165\157\x79\151\161\151\165\x73\163\145\x79\145\x61\145\141"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto akqwyoaqqkwiweke;
        uckmiiogqewqoqyg:
        cgewmgsswwywkoki:
        goto rkguoumeeggoqums;
        akqwyoaqqkwiweke:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto quuwumayckugywiy;
        quuwumayckugywiy:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\x61\170\x6f\x6e\x6f\155\171\137\x73\151\156\147\x6c\145\x5f\166\x61\x6c\165\x65\137\x6d\157\144\151\146\x79\137\151\164\145\x6d\163"), []);
        goto ueeuaosuuqakmouy;
        ueeuaosuuqakmouy:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wqykcwiyiawemsii;
            wqykcwiyiawemsii:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto sqcuywaguiesgqks;
            wyiyueigwggemieu:
            $kesssewsiegssiya->meta_box_cb = [$this, "\141\x75\x73\x79\155\155\x67\x73\x6b\163\x6f\x71\x77\x75\161\153"];
            goto kkqcmwywuusgekmw;
            uukuqcowwaqgmgag:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\151\x69\151\x71\x65\167\163\163\145\171\x77\145\155\x71\x75"];
            goto eusgmgmouwqgoomc;
            kkqcmwywuusgekmw:
            cuoeygmcaqgwuauk:
            goto uukuqcowwaqgmgag;
            eusgmgmouwqgoomc:
            $kesssewsiegssiya->rewrite["\x68\151\145\162\141\162\143\x68\151\x63\x61\x6c"] = false;
            goto qwiikwcawgeqkuwi;
            ksukgeseassggeke:
            $kesssewsiegssiya->single_value = true;
            goto wyiyueigwggemieu;
            uayimmyaoyciogiq:
            teeogqoaqaamycck:
            goto cksgmgyakmmkomoq;
            sqcuywaguiesgqks:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\163\151\156\x67\154\x65\137\x76\141\x6c\x75\145"))) {
                goto cuoeygmcaqgwuauk;
            }
            goto ksukgeseassggeke;
            qwiikwcawgeqkuwi:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto uayimmyaoyciogiq;
            cksgmgyakmmkomoq:
        }
        goto uckmiiogqewqoqyg;
        rkguoumeeggoqums:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto sciawoykmqyoimsk;
        sciawoykmqyoimsk:
        if (!is_admin()) {
            goto koaowyckqwoeioea;
        }
        goto cukokoemmuwiwqyq;
        uoaccgmmgiwmamsk:
        koaowyckqwoeioea:
        goto meymkkgksakewqqs;
        meymkkgksakewqqs:
        return $ywmkwiwkosakssii;
        goto kmkuwkyoemikcice;
        eyggicmmeuqywwmm:
        return $ywmkwiwkosakssii;
        goto uoaccgmmgiwmamsk;
        cukokoemmuwiwqyq:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto eyggicmmeuqywwmm;
        kmkuwkyoemikcice:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto iiseqqukqsuysmmc;
        ouimacsoeokwcuwa:
        goto siemouciksuawwae;
        goto qaaqumsmuwkoykam;
        ewkqkysmqgeugeoy:
        return $uyuaosigqymaqsaa;
        goto ccwuggocayogugme;
        iiseqqukqsuysmmc:
        if (is_array($uyuaosigqymaqsaa)) {
            goto agguamgmwsacekmq;
        }
        goto kumkykyegsquigkw;
        okocmqiikuykcaqg:
        siemouciksuawwae:
        goto ewkqkysmqgeugeoy;
        qeymeieqwmicycee:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto okocmqiikuykcaqg;
        qaaqumsmuwkoykam:
        agguamgmwsacekmq:
        goto iuwqyoikmeusiweg;
        kumkykyegsquigkw:
        if (is_string($uyuaosigqymaqsaa)) {
            goto qsaucowgmgqqwicy;
        }
        goto ouimacsoeokwcuwa;
        mksywokiwukaeyua:
        qsaucowgmgqqwicy:
        goto qeymeieqwmicycee;
        iuwqyoikmeusiweg:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto ascaskisqyaysyoy;
        ascaskisqyaysyoy:
        goto siemouciksuawwae;
        goto mksywokiwukaeyua;
        ccwuggocayogugme:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto aioymewmgwwgqiwu;
        iumwoegoeuimmqqc:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto mcoyueciqyqiigcc;
        cwoescoukwcqeqey:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto qgskwweecckaecsy;
        wqomsowsgcumucgm:
        if (!ManipulateArray::get($kesssewsiegssiya, "\163\x69\156\x67\154\145\x5f\166\x61\154\165\x65")) {
            goto iegqiaoekkmuuqgo;
        }
        goto cykamcqoaeemeeak;
        ckkkkwqaqcyuqweo:
        ksiaqmsuomessmmm:
        goto cwckmmsiouyaucea;
        kgakoeoomqmiuyou:
        aquuskeeeususkmw:
        goto iumwoegoeuimmqqc;
        oswskykoomgqysqo:
        iegqiaoekkmuuqgo:
        goto goqeumecwiwykkog;
        cwckmmsiouyaucea:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto qwqsokugksycwkom;
        myeksmogkuwykamg:
        $ywmkwiwkosakssii = [];
        goto kgakoeoomqmiuyou;
        mymoaysqioskuqqw:
        goto aquuskeeeususkmw;
        goto tmoywiwaesgeqkau;
        cykamcqoaeemeeak:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto oswskykoomgqysqo;
        ickmakmomaakmmmc:
        if (ManipulateArray::get($kesssewsiegssiya, "\163\151\x6e\x67\x6c\x65\137\x76\141\x6c\165\x65", false)) {
            goto ksiaqmsuomessmmm;
        }
        goto immuwwqcgeeikcoc;
        ayskeggsaioeeogy:
        echo $this->iuygowkemiiwqmiw("\155\145\x74\x61\x5f\142\157\x78\137\x73\151\156\147\154\145\x5f\x76\x61\x6c\x75\x65", ["\154\x69\x73\x74" => $augiookssyeuewki, "\160\157\x70\165\x6c\141\162" => $cowauqqkuseckgyy, "\x74\x61\x78\157\x6e\x6f\155\x79" => $kesssewsiegssiya, "\156\141\x6d\145" => $ymqmyyeuycgmigyo, "\160\x6f\163\164" => ManipulatePost::mwikyscisascoeea($post), "\141\162\147\x73" => self::esqgqsacwywoakok($kesssewsiegssiya), "\145\155\x70\x74\171\137\155\x65\x73\163\x61\x67\145" => __("\x54\150\x65\162\x65\40\141\x72\145\40\156\157\x74\x20\45\x73\40\171\x65\164\56", PR__CMN__FOUNDATION)]);
        goto wggiaskwosqecsuy;
        qwqsokugksycwkom:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\x69\156\143\x6c\165\x64\x65" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto amuiigmiqoueiisi;
        mcoyueciqyqiigcc:
        if (!isset($kesssewsiegssiya)) {
            goto yiiiyygiowkogagq;
        }
        goto cwoescoukwcqeqey;
        goqeumecwiwykkog:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\164\x61\170\137\x69\156\160\165\164\x5b{$ymqmyyeuycgmigyo}\x5d")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\x69\144", "\164\141\x78\137\151\x6e\160\165\x74\x5f{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\x62\x6f\162\144\x65\x72\x2d\x62\157\x78\40\x70\x2d\60")->yoimakcqmoqokkcu();
        goto ickmakmomaakmmmc;
        aioymewmgwwgqiwu:
        if (!isset($uoeiskamgscgeccq["\141\162\147\x73"]) || !is_array($uoeiskamgscgeccq["\x61\162\147\163"])) {
            goto uuqcwagaocukcqky;
        }
        goto uyeukoyamsaakqik;
        tmoywiwaesgeqkau:
        uuqcwagaocukcqky:
        goto myeksmogkuwykamg;
        qgskwweecckaecsy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto qiuyeygsgwskkwoy;
        qiuyeygsgwskkwoy:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\x66\x69\x65\x6c\x64\x73" => self::IDS]);
        goto wqomsowsgcumucgm;
        immuwwqcgeeikcoc:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto ckkkkwqaqcyuqweo;
        uyeukoyamsaakqik:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\162\147\163"];
        goto mymoaysqioskuqqw;
        amuiigmiqoueiisi:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\137\x62\x6f\x78\x5f\160\x6f\160\x75\x6c\x61\162", ["\x64\x61\164\x61" => $cowauqqkuseckgyy, "\x6e\x61\155\x65" => $ymqmyyeuycgmigyo]);
        goto ayskeggsaioeeogy;
        wggiaskwosqecsuy:
        yiiiyygiowkogagq:
        goto gakcwmyakwyigswc;
        gakcwmyakwyigswc:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto mgqogcswmqgcgmac;
        miuswwgqmgicyuaq:
        return $sikaymiwcesagayc;
        goto eqgeksiquqymuaca;
        mgqogcswmqgcgmac:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\157\x72\144\x65\162\142\x79") == "\151\156\x63\x6c\x75\x64\x65")) {
            goto gsgsosqeoemwguea;
        }
        goto meicoiioyccqusio;
        meicoiioyccqusio:
        $ooiewiwkegguusum = implode("\54", array_map("\x61\142\x73\x69\156\164", $ywmkwiwkosakssii["\x69\x6e\x63\x6c\x75\144\x65"]));
        goto iiyiequuscsgsqiq;
        kooeoiymgykqaycs:
        gsgsosqeoemwguea:
        goto miuswwgqmgicyuaq;
        iiyiequuscsgsqiq:
        $sikaymiwcesagayc = "\106\x49\x45\x4c\x44\50\164\56\164\x65\x72\155\x5f\151\x64\54\x20{$ooiewiwkegguusum}\x29";
        goto kooeoiymgykqaycs;
        eqgeksiquqymuaca:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto cyckueeyskywyumk;
        yksoqouokyaskqki:
        return ["\x65\143\150\x6f" => $koaqeegoeiaiccse, self::NAME => "\156\x65\167{$ymqmyyeuycgmigyo}\x5f\x70\141\x72\145\156\x74", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\x69\x64\x65\137\x65\155\x70\x74\x79" => 0, "\150\x69\x65\x72\x61\162\x63\x68\151\x63\x61\x6c" => 1, "\x73\150\x6f\167\x5f\x6f\160\x74\151\157\x6e\137\x6e\157\156\145" => "\x26\155\x64\x61\163\150\73\40{$kesssewsiegssiya->labels->parent_item}\40\x26\155\144\141\x73\x68\73"];
        goto umwasmakyyqqigyq;
        ggqscaceqcsgksaq:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto yksoqouokyaskqki;
        cyckueeyskywyumk:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ggqscaceqcsgksaq;
        umwasmakyyqqigyq:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\x69\164"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\x74\137\x74\145\x72\x6d\x73\137\141\x72\147\x73", [$this, "\163\147\153\x69\171\145\x77\143\x6f\157\x67\147\143\x6d\x6b\163"])->cecaguuoecmccuse("\x67\x65\x74\x5f\x74\145\162\x6d\x73\137\157\x72\144\x65\x72\x62\171", [$this, "\x6b\x75\157\x79\151\161\x69\x75\163\x73\x65\171\x65\x61\x65\141"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto quuwumayckugywiy;
        rkguoumeeggoqums:
        teeogqoaqaamycck:
        goto koaowyckqwoeioea;
        ueeuaosuuqakmouy:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\x61\170\157\x6e\x6f\155\171\x5f\x73\x69\156\x67\154\145\137\x76\141\x6c\165\145\137\155\157\x64\151\x66\x79\x5f\151\x74\145\x6d\x73"), []);
        goto uckmiiogqewqoqyg;
        uckmiiogqewqoqyg:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto sqcuywaguiesgqks;
            eusgmgmouwqgoomc:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\x69\151\151\x71\x65\167\163\x73\x65\x79\x77\145\x6d\161\165"];
            goto qwiikwcawgeqkuwi;
            sqcuywaguiesgqks:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto ksukgeseassggeke;
            wyiyueigwggemieu:
            $kesssewsiegssiya->single_value = true;
            goto kkqcmwywuusgekmw;
            uukuqcowwaqgmgag:
            wqykcwiyiawemsii:
            goto eusgmgmouwqgoomc;
            cksgmgyakmmkomoq:
            cuoeygmcaqgwuauk:
            goto akqwyoaqqkwiweke;
            kkqcmwywuusgekmw:
            $kesssewsiegssiya->meta_box_cb = [$this, "\x61\x75\x73\171\155\x6d\147\163\x6b\x73\157\161\x77\x75\x71\153"];
            goto uukuqcowwaqgmgag;
            uayimmyaoyciogiq:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto cksgmgyakmmkomoq;
            qwiikwcawgeqkuwi:
            $kesssewsiegssiya->rewrite["\150\151\145\162\141\x72\143\150\x69\143\x61\154"] = false;
            goto uayimmyaoyciogiq;
            ksukgeseassggeke:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\163\x69\156\x67\x6c\x65\137\x76\x61\154\165\145"))) {
                goto wqykcwiyiawemsii;
            }
            goto wyiyueigwggemieu;
            akqwyoaqqkwiweke:
        }
        goto rkguoumeeggoqums;
        quuwumayckugywiy:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto ueeuaosuuqakmouy;
        koaowyckqwoeioea:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto cukokoemmuwiwqyq;
        meymkkgksakewqqs:
        sciawoykmqyoimsk:
        goto kmkuwkyoemikcice;
        eyggicmmeuqywwmm:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto uoaccgmmgiwmamsk;
        cukokoemmuwiwqyq:
        if (!is_admin()) {
            goto sciawoykmqyoimsk;
        }
        goto eyggicmmeuqywwmm;
        uoaccgmmgiwmamsk:
        return $ywmkwiwkosakssii;
        goto meymkkgksakewqqs;
        kmkuwkyoemikcice:
        return $ywmkwiwkosakssii;
        goto siemouciksuawwae;
        siemouciksuawwae:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto kumkykyegsquigkw;
        qaaqumsmuwkoykam:
        goto agguamgmwsacekmq;
        goto iuwqyoikmeusiweg;
        iuwqyoikmeusiweg:
        qsaucowgmgqqwicy:
        goto ascaskisqyaysyoy;
        ewkqkysmqgeugeoy:
        agguamgmwsacekmq:
        goto ccwuggocayogugme;
        kumkykyegsquigkw:
        if (is_array($uyuaosigqymaqsaa)) {
            goto qsaucowgmgqqwicy;
        }
        goto ouimacsoeokwcuwa;
        qeymeieqwmicycee:
        iiseqqukqsuysmmc:
        goto okocmqiikuykcaqg;
        mksywokiwukaeyua:
        goto agguamgmwsacekmq;
        goto qeymeieqwmicycee;
        ouimacsoeokwcuwa:
        if (is_string($uyuaosigqymaqsaa)) {
            goto iiseqqukqsuysmmc;
        }
        goto qaaqumsmuwkoykam;
        ascaskisqyaysyoy:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto mksywokiwukaeyua;
        okocmqiikuykcaqg:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto ewkqkysmqgeugeoy;
        ccwuggocayogugme:
        return $uyuaosigqymaqsaa;
        goto uuqcwagaocukcqky;
        uuqcwagaocukcqky:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto uyeukoyamsaakqik;
        uyeukoyamsaakqik:
        if (!isset($uoeiskamgscgeccq["\x61\x72\147\163"]) || !is_array($uoeiskamgscgeccq["\141\x72\147\x73"])) {
            goto aquuskeeeususkmw;
        }
        goto mymoaysqioskuqqw;
        amuiigmiqoueiisi:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\151\156\143\x6c\165\144\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto ayskeggsaioeeogy;
        immuwwqcgeeikcoc:
        if (ManipulateArray::get($kesssewsiegssiya, "\163\x69\156\147\x6c\145\x5f\166\x61\x6c\165\x65", false)) {
            goto yiiiyygiowkogagq;
        }
        goto ckkkkwqaqcyuqweo;
        mymoaysqioskuqqw:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\x72\x67\x73"];
        goto tmoywiwaesgeqkau;
        goqeumecwiwykkog:
        ksiaqmsuomessmmm:
        goto ickmakmomaakmmmc;
        ayskeggsaioeeogy:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\142\x6f\170\x5f\x70\x6f\x70\x75\154\x61\162", ["\x64\x61\164\x61" => $cowauqqkuseckgyy, "\x79\155\161\155\x79\x79\x65\165\x79\143\147\155\151\147\171\157" => $ymqmyyeuycgmigyo]);
        goto wggiaskwosqecsuy;
        wqomsowsgcumucgm:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\146\151\x65\x6c\144\163" => self::IDS]);
        goto cykamcqoaeemeeak;
        mcoyueciqyqiigcc:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto cwoescoukwcqeqey;
        qwqsokugksycwkom:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto amuiigmiqoueiisi;
        cykamcqoaeemeeak:
        if (!ManipulateArray::get($kesssewsiegssiya, "\x73\x69\156\x67\x6c\145\137\x76\141\154\165\x65")) {
            goto ksiaqmsuomessmmm;
        }
        goto oswskykoomgqysqo;
        gakcwmyakwyigswc:
        aioymewmgwwgqiwu:
        goto gsgsosqeoemwguea;
        oswskykoomgqysqo:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto goqeumecwiwykkog;
        qiuyeygsgwskkwoy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wqomsowsgcumucgm;
        tmoywiwaesgeqkau:
        goto iegqiaoekkmuuqgo;
        goto myeksmogkuwykamg;
        kgakoeoomqmiuyou:
        $ywmkwiwkosakssii = [];
        goto iumwoegoeuimmqqc;
        iumwoegoeuimmqqc:
        iegqiaoekkmuuqgo:
        goto mcoyueciqyqiigcc;
        ckkkkwqaqcyuqweo:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto cwckmmsiouyaucea;
        wggiaskwosqecsuy:
        echo $this->iuygowkemiiwqmiw("\x6d\145\164\141\x5f\x62\157\x78\x5f\x73\151\156\147\x6c\145\x5f\x76\141\154\165\x65", ["\x6c\151\163\164" => $augiookssyeuewki, "\x70\x6f\x70\x75\154\x61\162" => $cowauqqkuseckgyy, "\x74\141\x78\x6f\x6e\x6f\x6d\x79" => $kesssewsiegssiya, "\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo, "\160\157\x73\x74" => ManipulatePost::mwikyscisascoeea($post), "\141\x72\147\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\145\x6d\160\164\x79\137\x6d\145\163\x73\x61\147\145" => __("\124\150\x65\162\145\x20\x61\162\x65\40\156\157\x74\x20\45\x73\x20\x79\x65\164\56", PR__CMN__FOUNDATION)]);
        goto gakcwmyakwyigswc;
        ickmakmomaakmmmc:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\x74\141\x78\x5f\x69\x6e\160\165\164\x5b{$ymqmyyeuycgmigyo}\135")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\x69\144", "\x74\141\170\x5f\151\156\x70\165\164\x5f{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\142\x6f\x72\x64\x65\162\55\x62\x6f\170\40\160\55\60")->yoimakcqmoqokkcu();
        goto immuwwqcgeeikcoc;
        myeksmogkuwykamg:
        aquuskeeeususkmw:
        goto kgakoeoomqmiuyou;
        qgskwweecckaecsy:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto qiuyeygsgwskkwoy;
        cwckmmsiouyaucea:
        yiiiyygiowkogagq:
        goto qwqsokugksycwkom;
        cwoescoukwcqeqey:
        if (!isset($kesssewsiegssiya)) {
            goto aioymewmgwwgqiwu;
        }
        goto qgskwweecckaecsy;
        gsgsosqeoemwguea:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto meicoiioyccqusio;
        meicoiioyccqusio:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\x6f\162\x64\x65\x72\x62\x79") == "\x69\156\143\x6c\165\x64\x65")) {
            goto mgqogcswmqgcgmac;
        }
        goto iiyiequuscsgsqiq;
        eqgeksiquqymuaca:
        return $sikaymiwcesagayc;
        goto cyckueeyskywyumk;
        miuswwgqmgicyuaq:
        mgqogcswmqgcgmac:
        goto eqgeksiquqymuaca;
        kooeoiymgykqaycs:
        $sikaymiwcesagayc = "\x46\111\105\114\104\50\164\x2e\164\x65\162\155\x5f\151\x64\x2c\x20{$ooiewiwkegguusum}\51";
        goto miuswwgqmgicyuaq;
        iiyiequuscsgsqiq:
        $ooiewiwkegguusum = implode("\x2c", array_map("\x61\x62\x73\x69\x6e\164", $ywmkwiwkosakssii["\x69\x6e\143\x6c\165\x64\145"]));
        goto kooeoiymgykqaycs;
        cyckueeyskywyumk:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto ggqscaceqcsgksaq;
        umwasmakyyqqigyq:
        return ["\145\143\x68\157" => $koaqeegoeiaiccse, self::NAME => "\156\145\x77{$ymqmyyeuycgmigyo}\137\x70\x61\x72\145\156\x74", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\151\x64\x65\x5f\145\x6d\x70\164\171" => 0, "\150\151\145\x72\141\162\x63\x68\151\143\141\154" => 1, "\x73\x68\157\167\x5f\x6f\160\x74\151\x6f\156\137\156\157\156\x65" => "\46\155\x64\x61\x73\150\73\40{$kesssewsiegssiya->labels->parent_item}\40\46\155\144\x61\x73\x68\73"];
        goto caykmykgamymycgk;
        ggqscaceqcsgksaq:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto yksoqouokyaskqki;
        yksoqouokyaskqki:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto umwasmakyyqqigyq;
        caykmykgamymycgk:
    }
}

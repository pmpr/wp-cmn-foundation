<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x69\x6e\151\x74"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\145\164\x5f\164\x65\162\x6d\x73\x5f\x61\x72\147\x73", [$this, "\163\147\x6b\151\171\145\167\143\x6f\157\x67\x67\143\x6d\x6b\163"])->cecaguuoecmccuse("\x67\145\164\x5f\164\145\162\155\x73\x5f\157\x72\x64\145\x72\x62\171", [$this, "\153\165\157\x79\x69\x71\151\x75\x73\163\145\171\145\x61\x65\x61"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto akqwyoaqqkwiweke;
        ueeuaosuuqakmouy:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wqykcwiyiawemsii;
            wqykcwiyiawemsii:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto sqcuywaguiesgqks;
            ksukgeseassggeke:
            $kesssewsiegssiya->single_value = true;
            goto wyiyueigwggemieu;
            uayimmyaoyciogiq:
            teeogqoaqaamycck:
            goto cksgmgyakmmkomoq;
            wyiyueigwggemieu:
            $kesssewsiegssiya->meta_box_cb = [$this, "\x61\165\163\x79\155\x6d\x67\163\x6b\163\x6f\x71\x77\165\161\x6b"];
            goto kkqcmwywuusgekmw;
            qwiikwcawgeqkuwi:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto uayimmyaoyciogiq;
            eusgmgmouwqgoomc:
            $kesssewsiegssiya->rewrite["\x68\151\145\x72\x61\162\x63\150\x69\x63\x61\x6c"] = false;
            goto qwiikwcawgeqkuwi;
            uukuqcowwaqgmgag:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\x69\151\x69\161\x65\167\x73\163\145\171\x77\x65\155\x71\x75"];
            goto eusgmgmouwqgoomc;
            kkqcmwywuusgekmw:
            cuoeygmcaqgwuauk:
            goto uukuqcowwaqgmgag;
            sqcuywaguiesgqks:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\x73\x69\156\147\x6c\145\137\166\x61\x6c\x75\x65"))) {
                goto cuoeygmcaqgwuauk;
            }
            goto ksukgeseassggeke;
            cksgmgyakmmkomoq:
        }
        goto uckmiiogqewqoqyg;
        quuwumayckugywiy:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\x61\170\157\156\157\155\x79\x5f\163\x69\156\x67\x6c\x65\137\x76\x61\154\165\x65\x5f\x6d\157\x64\x69\146\171\137\x69\x74\x65\155\163"), []);
        goto ueeuaosuuqakmouy;
        uckmiiogqewqoqyg:
        cgewmgsswwywkoki:
        goto rkguoumeeggoqums;
        akqwyoaqqkwiweke:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto quuwumayckugywiy;
        rkguoumeeggoqums:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto sciawoykmqyoimsk;
        cukokoemmuwiwqyq:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto eyggicmmeuqywwmm;
        meymkkgksakewqqs:
        return $ywmkwiwkosakssii;
        goto kmkuwkyoemikcice;
        eyggicmmeuqywwmm:
        return $ywmkwiwkosakssii;
        goto uoaccgmmgiwmamsk;
        sciawoykmqyoimsk:
        if (!is_admin()) {
            goto koaowyckqwoeioea;
        }
        goto cukokoemmuwiwqyq;
        uoaccgmmgiwmamsk:
        koaowyckqwoeioea:
        goto meymkkgksakewqqs;
        kmkuwkyoemikcice:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto iiseqqukqsuysmmc;
        qeymeieqwmicycee:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto okocmqiikuykcaqg;
        okocmqiikuykcaqg:
        siemouciksuawwae:
        goto ewkqkysmqgeugeoy;
        mksywokiwukaeyua:
        qsaucowgmgqqwicy:
        goto qeymeieqwmicycee;
        qaaqumsmuwkoykam:
        agguamgmwsacekmq:
        goto iuwqyoikmeusiweg;
        iiseqqukqsuysmmc:
        if (is_array($uyuaosigqymaqsaa)) {
            goto agguamgmwsacekmq;
        }
        goto kumkykyegsquigkw;
        ouimacsoeokwcuwa:
        goto siemouciksuawwae;
        goto qaaqumsmuwkoykam;
        ewkqkysmqgeugeoy:
        return $uyuaosigqymaqsaa;
        goto ccwuggocayogugme;
        ascaskisqyaysyoy:
        goto siemouciksuawwae;
        goto mksywokiwukaeyua;
        iuwqyoikmeusiweg:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto ascaskisqyaysyoy;
        kumkykyegsquigkw:
        if (is_string($uyuaosigqymaqsaa)) {
            goto qsaucowgmgqqwicy;
        }
        goto ouimacsoeokwcuwa;
        ccwuggocayogugme:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto aioymewmgwwgqiwu;
        ckkkkwqaqcyuqweo:
        ksiaqmsuomessmmm:
        goto cwckmmsiouyaucea;
        cykamcqoaeemeeak:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto oswskykoomgqysqo;
        wqomsowsgcumucgm:
        if (!ManipulateArray::get($kesssewsiegssiya, "\163\x69\x6e\147\154\x65\x5f\166\x61\x6c\x75\x65")) {
            goto iegqiaoekkmuuqgo;
        }
        goto cykamcqoaeemeeak;
        tmoywiwaesgeqkau:
        uuqcwagaocukcqky:
        goto myeksmogkuwykamg;
        mcoyueciqyqiigcc:
        if (!isset($kesssewsiegssiya)) {
            goto yiiiyygiowkogagq;
        }
        goto cwoescoukwcqeqey;
        myeksmogkuwykamg:
        $ywmkwiwkosakssii = [];
        goto kgakoeoomqmiuyou;
        qwqsokugksycwkom:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\x69\156\143\x6c\165\144\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto amuiigmiqoueiisi;
        mymoaysqioskuqqw:
        goto aquuskeeeususkmw;
        goto tmoywiwaesgeqkau;
        qgskwweecckaecsy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto qiuyeygsgwskkwoy;
        wggiaskwosqecsuy:
        yiiiyygiowkogagq:
        goto gakcwmyakwyigswc;
        kgakoeoomqmiuyou:
        aquuskeeeususkmw:
        goto iumwoegoeuimmqqc;
        iumwoegoeuimmqqc:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto mcoyueciqyqiigcc;
        uyeukoyamsaakqik:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\162\147\x73"];
        goto mymoaysqioskuqqw;
        goqeumecwiwykkog:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\164\141\x78\137\151\x6e\x70\x75\164\x5b{$ymqmyyeuycgmigyo}\135")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\151\x64", "\x74\x61\x78\x5f\151\156\160\x75\x74\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\142\x6f\162\144\x65\162\55\142\x6f\170\x20\160\55\60")->yoimakcqmoqokkcu();
        goto ickmakmomaakmmmc;
        oswskykoomgqysqo:
        iegqiaoekkmuuqgo:
        goto goqeumecwiwykkog;
        aioymewmgwwgqiwu:
        if (!isset($uoeiskamgscgeccq["\x61\162\x67\163"]) || !is_array($uoeiskamgscgeccq["\141\162\x67\163"])) {
            goto uuqcwagaocukcqky;
        }
        goto uyeukoyamsaakqik;
        ickmakmomaakmmmc:
        if (ManipulateArray::get($kesssewsiegssiya, "\x73\x69\x6e\x67\154\145\x5f\166\x61\x6c\165\x65", false)) {
            goto ksiaqmsuomessmmm;
        }
        goto immuwwqcgeeikcoc;
        ayskeggsaioeeogy:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\x62\x6f\170\137\x73\151\x6e\147\154\x65\137\166\x61\154\165\x65", ["\x6c\x69\x73\164" => $augiookssyeuewki, "\x70\157\160\165\x6c\141\162" => $cowauqqkuseckgyy, "\164\141\x78\157\x6e\157\x6d\x79" => $kesssewsiegssiya, "\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo, "\160\x6f\x73\x74" => ManipulatePost::mwikyscisascoeea($post), "\141\162\147\x73" => self::esqgqsacwywoakok($kesssewsiegssiya), "\x65\155\x70\x74\171\137\x6d\145\163\163\x61\x67\145" => __("\124\150\145\162\x65\40\141\162\145\x20\x6e\157\164\x20\x25\163\40\171\145\x74\56", PR__CMN__FOUNDATION)]);
        goto wggiaskwosqecsuy;
        cwckmmsiouyaucea:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto qwqsokugksycwkom;
        amuiigmiqoueiisi:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\142\x6f\170\137\160\157\160\165\x6c\141\x72", ["\x64\141\164\x61" => $cowauqqkuseckgyy, "\x6e\x61\155\145" => $ymqmyyeuycgmigyo]);
        goto ayskeggsaioeeogy;
        qiuyeygsgwskkwoy:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\x66\151\145\154\144\163" => self::IDS]);
        goto wqomsowsgcumucgm;
        cwoescoukwcqeqey:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto qgskwweecckaecsy;
        immuwwqcgeeikcoc:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto ckkkkwqaqcyuqweo;
        gakcwmyakwyigswc:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto mgqogcswmqgcgmac;
        miuswwgqmgicyuaq:
        return $sikaymiwcesagayc;
        goto eqgeksiquqymuaca;
        mgqogcswmqgcgmac:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\x6f\162\144\145\x72\142\x79") == "\151\x6e\143\x6c\165\x64\145")) {
            goto gsgsosqeoemwguea;
        }
        goto meicoiioyccqusio;
        meicoiioyccqusio:
        $ooiewiwkegguusum = implode("\x2c", array_map("\x61\142\x73\x69\156\x74", $ywmkwiwkosakssii["\x69\x6e\143\x6c\165\144\145"]));
        goto iiyiequuscsgsqiq;
        iiyiequuscsgsqiq:
        $sikaymiwcesagayc = "\x46\111\105\114\x44\50\x74\56\164\x65\162\x6d\137\151\x64\54\40{$ooiewiwkegguusum}\x29";
        goto kooeoiymgykqaycs;
        kooeoiymgykqaycs:
        gsgsosqeoemwguea:
        goto miuswwgqmgicyuaq;
        eqgeksiquqymuaca:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto cyckueeyskywyumk;
        yksoqouokyaskqki:
        return ["\x65\143\x68\x6f" => $koaqeegoeiaiccse, self::NAME => "\156\145\167{$ymqmyyeuycgmigyo}\x5f\x70\x61\x72\145\156\164", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\x69\144\x65\x5f\145\155\x70\164\x79" => 0, "\x68\x69\145\162\x61\x72\143\x68\151\x63\141\154" => 1, "\x73\150\157\167\137\157\160\x74\151\x6f\156\x5f\156\157\156\x65" => "\x26\x6d\144\x61\163\x68\73\x20{$kesssewsiegssiya->labels->parent_item}\x20\x26\x6d\x64\141\163\150\73"];
        goto umwasmakyyqqigyq;
        cyckueeyskywyumk:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ggqscaceqcsgksaq;
        ggqscaceqcsgksaq:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto yksoqouokyaskqki;
        umwasmakyyqqigyq:
    }
}

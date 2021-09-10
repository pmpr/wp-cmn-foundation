<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\156\x69\164"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\x74\137\164\145\162\x6d\x73\x5f\141\162\x67\x73", [$this, "\163\147\153\151\x79\x65\x77\143\157\x6f\x67\x67\143\x6d\x6b\163"])->cecaguuoecmccuse("\147\x65\164\x5f\164\x65\162\x6d\x73\x5f\157\162\144\x65\x72\142\x79", [$this, "\153\x75\x6f\x79\x69\161\x69\165\163\x73\145\x79\145\141\x65\x61"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto akqwyoaqqkwiweke;
        quuwumayckugywiy:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\x61\170\157\x6e\x6f\x6d\171\x5f\163\151\x6e\147\154\145\x5f\166\141\154\x75\145\x5f\155\x6f\144\x69\146\171\137\151\x74\x65\x6d\163"), []);
        goto ueeuaosuuqakmouy;
        ueeuaosuuqakmouy:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wqykcwiyiawemsii;
            kkqcmwywuusgekmw:
            cuoeygmcaqgwuauk:
            goto uukuqcowwaqgmgag;
            sqcuywaguiesgqks:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\163\151\x6e\147\154\x65\137\166\x61\154\x75\x65"))) {
                goto cuoeygmcaqgwuauk;
            }
            goto ksukgeseassggeke;
            uayimmyaoyciogiq:
            teeogqoaqaamycck:
            goto cksgmgyakmmkomoq;
            wqykcwiyiawemsii:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto sqcuywaguiesgqks;
            eusgmgmouwqgoomc:
            $kesssewsiegssiya->rewrite["\150\151\145\162\141\x72\x63\150\x69\x63\x61\x6c"] = false;
            goto qwiikwcawgeqkuwi;
            ksukgeseassggeke:
            $kesssewsiegssiya->single_value = true;
            goto wyiyueigwggemieu;
            uukuqcowwaqgmgag:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\151\151\151\161\x65\167\x73\x73\x65\x79\x77\x65\x6d\161\x75"];
            goto eusgmgmouwqgoomc;
            qwiikwcawgeqkuwi:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto uayimmyaoyciogiq;
            wyiyueigwggemieu:
            $kesssewsiegssiya->meta_box_cb = [$this, "\141\165\163\171\x6d\155\147\163\x6b\163\x6f\161\167\165\x71\x6b"];
            goto kkqcmwywuusgekmw;
            cksgmgyakmmkomoq:
        }
        goto uckmiiogqewqoqyg;
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
        uoaccgmmgiwmamsk:
        koaowyckqwoeioea:
        goto meymkkgksakewqqs;
        cukokoemmuwiwqyq:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto eyggicmmeuqywwmm;
        sciawoykmqyoimsk:
        if (!is_admin()) {
            goto koaowyckqwoeioea;
        }
        goto cukokoemmuwiwqyq;
        eyggicmmeuqywwmm:
        return $ywmkwiwkosakssii;
        goto uoaccgmmgiwmamsk;
        meymkkgksakewqqs:
        return $ywmkwiwkosakssii;
        goto kmkuwkyoemikcice;
        kmkuwkyoemikcice:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto iiseqqukqsuysmmc;
        qaaqumsmuwkoykam:
        agguamgmwsacekmq:
        goto iuwqyoikmeusiweg;
        qeymeieqwmicycee:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto okocmqiikuykcaqg;
        ouimacsoeokwcuwa:
        goto siemouciksuawwae;
        goto qaaqumsmuwkoykam;
        ascaskisqyaysyoy:
        goto siemouciksuawwae;
        goto mksywokiwukaeyua;
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
        iiseqqukqsuysmmc:
        if (is_array($uyuaosigqymaqsaa)) {
            goto agguamgmwsacekmq;
        }
        goto kumkykyegsquigkw;
        okocmqiikuykcaqg:
        siemouciksuawwae:
        goto ewkqkysmqgeugeoy;
        ewkqkysmqgeugeoy:
        return $uyuaosigqymaqsaa;
        goto ccwuggocayogugme;
        ccwuggocayogugme:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto aioymewmgwwgqiwu;
        wggiaskwosqecsuy:
        yiiiyygiowkogagq:
        goto gakcwmyakwyigswc;
        mcoyueciqyqiigcc:
        if (!isset($kesssewsiegssiya)) {
            goto yiiiyygiowkogagq;
        }
        goto cwoescoukwcqeqey;
        ckkkkwqaqcyuqweo:
        ksiaqmsuomessmmm:
        goto cwckmmsiouyaucea;
        qiuyeygsgwskkwoy:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\x66\151\x65\154\144\163" => self::IDS]);
        goto wqomsowsgcumucgm;
        cwckmmsiouyaucea:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto qwqsokugksycwkom;
        ayskeggsaioeeogy:
        echo $this->iuygowkemiiwqmiw("\155\x65\164\x61\137\x62\157\x78\137\x73\x69\156\x67\x6c\x65\x5f\166\141\154\x75\145", ["\x6c\x69\x73\164" => $augiookssyeuewki, "\160\157\x70\165\154\141\x72" => $cowauqqkuseckgyy, "\x74\141\x78\157\156\157\155\x79" => $kesssewsiegssiya, "\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo, "\160\x6f\163\164" => ManipulatePost::mwikyscisascoeea($post), "\x61\162\x67\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\145\x6d\160\x74\x79\137\x6d\x65\163\163\141\x67\x65" => __("\124\x68\x65\x72\145\40\141\162\x65\x20\156\x6f\164\40\x25\x73\x20\x79\145\x74\56", PR__CMN__FOUNDATION)]);
        goto wggiaskwosqecsuy;
        kgakoeoomqmiuyou:
        aquuskeeeususkmw:
        goto iumwoegoeuimmqqc;
        iumwoegoeuimmqqc:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto mcoyueciqyqiigcc;
        aioymewmgwwgqiwu:
        if (!isset($uoeiskamgscgeccq["\x61\x72\147\x73"]) || !is_array($uoeiskamgscgeccq["\141\x72\x67\x73"])) {
            goto uuqcwagaocukcqky;
        }
        goto uyeukoyamsaakqik;
        oswskykoomgqysqo:
        iegqiaoekkmuuqgo:
        goto goqeumecwiwykkog;
        immuwwqcgeeikcoc:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto ckkkkwqaqcyuqweo;
        myeksmogkuwykamg:
        $ywmkwiwkosakssii = [];
        goto kgakoeoomqmiuyou;
        ickmakmomaakmmmc:
        if (ManipulateArray::get($kesssewsiegssiya, "\x73\x69\156\x67\154\145\x5f\166\141\154\x75\145", false)) {
            goto ksiaqmsuomessmmm;
        }
        goto immuwwqcgeeikcoc;
        uyeukoyamsaakqik:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\141\162\x67\163"];
        goto mymoaysqioskuqqw;
        wqomsowsgcumucgm:
        if (!ManipulateArray::get($kesssewsiegssiya, "\163\151\156\147\x6c\x65\x5f\166\141\154\165\x65")) {
            goto iegqiaoekkmuuqgo;
        }
        goto cykamcqoaeemeeak;
        cykamcqoaeemeeak:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto oswskykoomgqysqo;
        goqeumecwiwykkog:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\164\141\170\x5f\x69\x6e\x70\x75\x74\x5b{$ymqmyyeuycgmigyo}\135")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\151\144", "\x74\141\x78\137\151\x6e\160\165\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\x62\157\162\144\x65\x72\x2d\x62\157\x78\40\x70\x2d\60")->yoimakcqmoqokkcu();
        goto ickmakmomaakmmmc;
        qgskwweecckaecsy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto qiuyeygsgwskkwoy;
        qwqsokugksycwkom:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\x69\156\x63\x6c\x75\144\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto amuiigmiqoueiisi;
        tmoywiwaesgeqkau:
        uuqcwagaocukcqky:
        goto myeksmogkuwykamg;
        amuiigmiqoueiisi:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\145\164\141\x5f\142\x6f\x78\x5f\x70\x6f\160\x75\x6c\141\x72", ["\x64\x61\x74\x61" => $cowauqqkuseckgyy, "\x79\x6d\161\155\x79\171\145\165\171\143\147\x6d\x69\x67\x79\x6f" => $ymqmyyeuycgmigyo]);
        goto ayskeggsaioeeogy;
        mymoaysqioskuqqw:
        goto aquuskeeeususkmw;
        goto tmoywiwaesgeqkau;
        cwoescoukwcqeqey:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto qgskwweecckaecsy;
        gakcwmyakwyigswc:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto mgqogcswmqgcgmac;
        kooeoiymgykqaycs:
        gsgsosqeoemwguea:
        goto miuswwgqmgicyuaq;
        mgqogcswmqgcgmac:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\x6f\162\144\145\x72\x62\171") == "\x69\x6e\x63\154\165\x64\145")) {
            goto gsgsosqeoemwguea;
        }
        goto meicoiioyccqusio;
        miuswwgqmgicyuaq:
        return $sikaymiwcesagayc;
        goto eqgeksiquqymuaca;
        meicoiioyccqusio:
        $ooiewiwkegguusum = implode("\54", array_map("\141\142\x73\151\x6e\x74", $ywmkwiwkosakssii["\151\x6e\x63\154\x75\x64\145"]));
        goto iiyiequuscsgsqiq;
        iiyiequuscsgsqiq:
        $sikaymiwcesagayc = "\x46\x49\x45\114\104\x28\164\56\x74\145\x72\x6d\137\151\144\54\x20{$ooiewiwkegguusum}\51";
        goto kooeoiymgykqaycs;
        eqgeksiquqymuaca:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto cyckueeyskywyumk;
        yksoqouokyaskqki:
        return ["\x65\x63\150\x6f" => $koaqeegoeiaiccse, self::NAME => "\156\x65\x77{$ymqmyyeuycgmigyo}\137\160\141\x72\x65\x6e\164", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\151\144\x65\x5f\x65\x6d\x70\x74\x79" => 0, "\x68\x69\x65\x72\141\162\x63\x68\151\x63\x61\x6c" => 1, "\163\x68\x6f\167\137\x6f\160\164\151\x6f\x6e\137\x6e\x6f\156\x65" => "\46\155\144\x61\163\x68\73\x20{$kesssewsiegssiya->labels->parent_item}\x20\x26\x6d\x64\141\163\x68\x3b"];
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

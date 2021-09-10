<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\x6e\x69\164"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\x74\x5f\164\145\162\x6d\163\137\141\162\147\163", [$this, "\x73\x67\153\151\x79\x65\167\x63\x6f\157\147\147\x63\x6d\153\x73"])->cecaguuoecmccuse("\x67\x65\164\137\164\x65\x72\155\163\137\157\x72\x64\x65\162\142\x79", [$this, "\153\165\x6f\x79\x69\161\151\165\x73\163\145\x79\145\141\x65\x61"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto gswwomycucqmsywk;
        tmyuuoeywociqseo:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\141\x78\x6f\x6e\157\x6d\x79\x5f\163\151\156\x67\154\x65\137\166\x61\154\x75\x65\x5f\155\x6f\144\x69\x66\x79\137\151\164\145\155\x73"), []);
        goto mkyomwyoeskcakyi;
        mkyomwyoeskcakyi:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto iymwescsmiywgwui;
            ceiaogwwoekcyacg:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\163\x69\156\147\154\145\137\x76\x61\154\165\145"))) {
                goto yeaoaicqksoigqwu;
            }
            goto gweqggykcmiiawwc;
            sweokouicekqeyse:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\151\x69\x69\x71\x65\x77\x73\x73\x65\x79\x77\145\x6d\161\x75"];
            goto skyckeomciwscaso;
            gweqggykcmiiawwc:
            $kesssewsiegssiya->single_value = true;
            goto cmmuyseicemsyouq;
            mqgywkmwkwqgsius:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto cqamkyuumwogqcas;
            cmmuyseicemsyouq:
            $kesssewsiegssiya->meta_box_cb = [$this, "\x61\x75\x73\171\155\x6d\147\x73\x6b\x73\x6f\161\167\x75\161\153"];
            goto ewysmowcmmykqscm;
            cqamkyuumwogqcas:
            smuioeqccoouuewa:
            goto mqmquwuyocuoikae;
            skyckeomciwscaso:
            $kesssewsiegssiya->rewrite["\x68\151\x65\x72\x61\x72\143\150\x69\143\141\154"] = false;
            goto mqgywkmwkwqgsius;
            ewysmowcmmykqscm:
            yeaoaicqksoigqwu:
            goto sweokouicekqeyse;
            iymwescsmiywgwui:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto ceiaogwwoekcyacg;
            mqmquwuyocuoikae:
        }
        goto eiwwmuekkuasciug;
        eiwwmuekkuasciug:
        ccasgycsymsuuwks:
        goto acmoisuwocsciyae;
        gswwomycucqmsywk:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto tmyuuoeywociqseo;
        acmoisuwocsciyae:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto pamyaqouossmosoe;
        pamyaqouossmosoe:
        if (!is_admin()) {
            goto ocysawskymukqmeq;
        }
        goto eckeocwysskicowi;
        mqssosgumiesimkw:
        ocysawskymukqmeq:
        goto gwyacasmwuiceqwi;
        gwyacasmwuiceqwi:
        return $ywmkwiwkosakssii;
        goto geasmqwwokmeqayu;
        oskymakeiqaoiukk:
        return $ywmkwiwkosakssii;
        goto mqssosgumiesimkw;
        eckeocwysskicowi:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto oskymakeiqaoiukk;
        geasmqwwokmeqayu:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto iomkccwaewyicouy;
        eemagcyswykuayai:
        if (is_string($uyuaosigqymaqsaa)) {
            goto isqacycsggwaoyqw;
        }
        goto aegcoomigmqwwaka;
        uyewsowgcymwsuwu:
        sewqkgoqqeiogwgc:
        goto aqqqwiuwoymusgey;
        wwqmyeqgkqmkoosk:
        goto sewqkgoqqeiogwgc;
        goto sqygiwwewksqgica;
        aqqqwiuwoymusgey:
        return $uyuaosigqymaqsaa;
        goto mqimqkqmmswccmew;
        guqgcqqsyaacwsuk:
        ewasskcgskcwkeyq:
        goto eoqccooyeaocyegw;
        iomkccwaewyicouy:
        if (is_array($uyuaosigqymaqsaa)) {
            goto ewasskcgskcwkeyq;
        }
        goto eemagcyswykuayai;
        eoqccooyeaocyegw:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto wwqmyeqgkqmkoosk;
        sqygiwwewksqgica:
        isqacycsggwaoyqw:
        goto eukeqiqsekiaqkyk;
        eukeqiqsekiaqkyk:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto uyewsowgcymwsuwu;
        aegcoomigmqwwaka:
        goto sewqkgoqqeiogwgc;
        goto guqgcqqsyaacwsuk;
        mqimqkqmmswccmew:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto kmycyawgoewowaeq;
        kmycyawgoewowaeq:
        if (!isset($uoeiskamgscgeccq["\x61\162\x67\x73"]) || !is_array($uoeiskamgscgeccq["\x61\x72\147\x73"])) {
            goto oamigoywuyowgcow;
        }
        goto oeqekywmewqowkwg;
        wsymimooikcoeamc:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto gmqcqaiwkusyiuey;
        soeueuyguemogamc:
        oamigoywuyowgcow:
        goto aysoyukoimiemacc;
        aysoyukoimiemacc:
        $ywmkwiwkosakssii = [];
        goto wecayusimwoiswuw;
        saicagwascmeamuk:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\x65\x74\141\137\x62\157\x78\x5f\x70\x6f\x70\165\154\141\162", ["\144\141\x74\141" => $cowauqqkuseckgyy, "\156\141\155\x65" => $ymqmyyeuycgmigyo]);
        goto cgewmgsswwywkoki;
        gseomoauqsuqccme:
        goto uqogiiekomwssgee;
        goto soeueuyguemogamc;
        wggceogiyyyaoqca:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\x69\156\143\154\165\x64\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto saicagwascmeamuk;
        gmqcqaiwkusyiuey:
        soumiseyqqgqccym:
        goto guyauwwommggyukw;
        wyiuscyymgoqkmws:
        if (!ManipulateArray::get($kesssewsiegssiya, "\x73\x69\x6e\147\x6c\145\x5f\166\x61\154\165\x65")) {
            goto soumiseyqqgqccym;
        }
        goto wsymimooikcoeamc;
        swwaaaeuyyocowgq:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto wggceogiyyyaoqca;
        eusmmqcsiiyiogqg:
        if (!isset($kesssewsiegssiya)) {
            goto kegeyiwiieqmocsk;
        }
        goto kymauouamycysiyy;
        wecayusimwoiswuw:
        uqogiiekomwssgee:
        goto ioscumsgeuoekyik;
        qgwisswsyykiimuq:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto maakkwkkckwawgqq;
        maakkwkkckwawgqq:
        wsgkyquaeocsaiqk:
        goto swwaaaeuyyocowgq;
        kumiqmuaqymmkyic:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto iqecwuuaikqmkqyy;
        akogicckgmsmmiag:
        if (ManipulateArray::get($kesssewsiegssiya, "\163\151\156\x67\x6c\x65\x5f\x76\x61\x6c\165\145", false)) {
            goto wsgkyquaeocsaiqk;
        }
        goto qgwisswsyykiimuq;
        cgewmgsswwywkoki:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\137\142\157\x78\137\163\151\156\147\x6c\x65\x5f\x76\x61\154\165\x65", ["\x6c\x69\163\x74" => $augiookssyeuewki, "\160\x6f\160\x75\154\x61\x72" => $cowauqqkuseckgyy, "\x74\x61\x78\157\156\157\x6d\171" => $kesssewsiegssiya, "\x6e\x61\155\145" => $ymqmyyeuycgmigyo, "\160\157\163\x74" => ManipulatePost::mwikyscisascoeea($post), "\141\x72\147\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\x65\155\160\164\171\137\x6d\x65\x73\x73\141\147\x65" => __("\124\x68\145\162\x65\40\141\162\x65\40\156\x6f\x74\x20\x25\163\40\171\x65\x74\56", PR__CMN__FOUNDATION)]);
        goto teeogqoaqaamycck;
        kymauouamycysiyy:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto kumiqmuaqymmkyic;
        iqecwuuaikqmkqyy:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\146\x69\x65\x6c\x64\163" => self::IDS]);
        goto wyiuscyymgoqkmws;
        teeogqoaqaamycck:
        kegeyiwiieqmocsk:
        goto cuoeygmcaqgwuauk;
        guyauwwommggyukw:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\164\x61\x78\137\x69\156\160\x75\x74\x5b{$ymqmyyeuycgmigyo}\x5d")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\151\x64", "\x74\141\x78\137\151\x6e\x70\x75\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\142\157\x72\144\145\162\x2d\x62\x6f\x78\x20\x70\55\60")->yoimakcqmoqokkcu();
        goto akogicckgmsmmiag;
        oeqekywmewqowkwg:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\141\162\147\x73"];
        goto gseomoauqsuqccme;
        ioscumsgeuoekyik:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto eusmmqcsiiyiogqg;
        cuoeygmcaqgwuauk:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto sqcuywaguiesgqks;
        wyiyueigwggemieu:
        $sikaymiwcesagayc = "\106\111\105\x4c\104\50\x74\56\x74\145\x72\155\137\x69\144\54\x20{$ooiewiwkegguusum}\51";
        goto kkqcmwywuusgekmw;
        ksukgeseassggeke:
        $ooiewiwkegguusum = implode("\54", array_map("\x61\142\163\151\156\x74", $ywmkwiwkosakssii["\151\156\x63\x6c\165\x64\145"]));
        goto wyiyueigwggemieu;
        sqcuywaguiesgqks:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\x6f\x72\x64\x65\162\x62\171") == "\x69\156\143\x6c\x75\144\145")) {
            goto wqykcwiyiawemsii;
        }
        goto ksukgeseassggeke;
        kkqcmwywuusgekmw:
        wqykcwiyiawemsii:
        goto uukuqcowwaqgmgag;
        uukuqcowwaqgmgag:
        return $sikaymiwcesagayc;
        goto eusgmgmouwqgoomc;
        eusgmgmouwqgoomc:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto qwiikwcawgeqkuwi;
        uayimmyaoyciogiq:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cksgmgyakmmkomoq;
        qwiikwcawgeqkuwi:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto uayimmyaoyciogiq;
        cksgmgyakmmkomoq:
        return ["\x65\x63\x68\157" => $koaqeegoeiaiccse, self::NAME => "\x6e\x65\167{$ymqmyyeuycgmigyo}\137\160\x61\162\x65\156\164", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\150\x69\144\145\137\x65\x6d\x70\x74\x79" => 0, "\150\151\x65\162\141\162\143\150\151\x63\141\154" => 1, "\x73\150\157\x77\137\x6f\x70\164\x69\x6f\x6e\137\156\x6f\x6e\x65" => "\x26\x6d\144\141\163\150\73\40{$kesssewsiegssiya->labels->parent_item}\40\46\x6d\x64\141\163\150\x3b"];
        goto akqwyoaqqkwiweke;
        akqwyoaqqkwiweke:
    }
}

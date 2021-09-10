<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\156\151\x74"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\164\137\164\145\x72\155\163\137\141\162\147\x73", [$this, "\x73\147\153\x69\x79\145\x77\x63\157\157\x67\x67\x63\155\153\x73"])->cecaguuoecmccuse("\147\x65\164\x5f\x74\145\x72\155\x73\137\157\162\144\145\162\x62\x79", [$this, "\x6b\165\157\x79\151\161\151\x75\163\163\x65\x79\145\141\145\141"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto gswwomycucqmsywk;
        mkyomwyoeskcakyi:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto iymwescsmiywgwui;
            ceiaogwwoekcyacg:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\x73\151\156\147\154\x65\x5f\x76\x61\x6c\165\x65"))) {
                goto yeaoaicqksoigqwu;
            }
            goto gweqggykcmiiawwc;
            skyckeomciwscaso:
            $kesssewsiegssiya->rewrite["\x68\151\145\162\x61\x72\x63\x68\x69\x63\141\x6c"] = false;
            goto mqgywkmwkwqgsius;
            ewysmowcmmykqscm:
            yeaoaicqksoigqwu:
            goto sweokouicekqeyse;
            gweqggykcmiiawwc:
            $kesssewsiegssiya->single_value = true;
            goto cmmuyseicemsyouq;
            iymwescsmiywgwui:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto ceiaogwwoekcyacg;
            cmmuyseicemsyouq:
            $kesssewsiegssiya->meta_box_cb = [$this, "\141\165\x73\171\155\155\147\x73\x6b\163\157\x71\x77\x75\x71\153"];
            goto ewysmowcmmykqscm;
            mqgywkmwkwqgsius:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto cqamkyuumwogqcas;
            sweokouicekqeyse:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\x69\151\151\x71\145\x77\163\163\x65\x79\167\x65\155\161\165"];
            goto skyckeomciwscaso;
            cqamkyuumwogqcas:
            smuioeqccoouuewa:
            goto mqmquwuyocuoikae;
            mqmquwuyocuoikae:
        }
        goto eiwwmuekkuasciug;
        tmyuuoeywociqseo:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\141\x78\x6f\x6e\x6f\x6d\171\x5f\163\x69\156\147\154\145\137\166\141\x6c\x75\x65\137\x6d\x6f\x64\151\146\x79\x5f\x69\164\145\x6d\163"), []);
        goto mkyomwyoeskcakyi;
        gswwomycucqmsywk:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto tmyuuoeywociqseo;
        eiwwmuekkuasciug:
        ccasgycsymsuuwks:
        goto acmoisuwocsciyae;
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
        gwyacasmwuiceqwi:
        return $ywmkwiwkosakssii;
        goto geasmqwwokmeqayu;
        oskymakeiqaoiukk:
        return $ywmkwiwkosakssii;
        goto mqssosgumiesimkw;
        eckeocwysskicowi:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto oskymakeiqaoiukk;
        mqssosgumiesimkw:
        ocysawskymukqmeq:
        goto gwyacasmwuiceqwi;
        geasmqwwokmeqayu:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto iomkccwaewyicouy;
        iomkccwaewyicouy:
        if (is_array($uyuaosigqymaqsaa)) {
            goto ewasskcgskcwkeyq;
        }
        goto eemagcyswykuayai;
        uyewsowgcymwsuwu:
        sewqkgoqqeiogwgc:
        goto aqqqwiuwoymusgey;
        sqygiwwewksqgica:
        isqacycsggwaoyqw:
        goto eukeqiqsekiaqkyk;
        aqqqwiuwoymusgey:
        return $uyuaosigqymaqsaa;
        goto mqimqkqmmswccmew;
        eemagcyswykuayai:
        if (is_string($uyuaosigqymaqsaa)) {
            goto isqacycsggwaoyqw;
        }
        goto aegcoomigmqwwaka;
        wwqmyeqgkqmkoosk:
        goto sewqkgoqqeiogwgc;
        goto sqygiwwewksqgica;
        aegcoomigmqwwaka:
        goto sewqkgoqqeiogwgc;
        goto guqgcqqsyaacwsuk;
        eoqccooyeaocyegw:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto wwqmyeqgkqmkoosk;
        eukeqiqsekiaqkyk:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto uyewsowgcymwsuwu;
        guqgcqqsyaacwsuk:
        ewasskcgskcwkeyq:
        goto eoqccooyeaocyegw;
        mqimqkqmmswccmew:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto kmycyawgoewowaeq;
        wyiuscyymgoqkmws:
        if (!ManipulateArray::get($kesssewsiegssiya, "\x73\151\x6e\147\x6c\x65\x5f\x76\x61\x6c\165\145")) {
            goto soumiseyqqgqccym;
        }
        goto wsymimooikcoeamc;
        qgwisswsyykiimuq:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto maakkwkkckwawgqq;
        cgewmgsswwywkoki:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\142\x6f\170\137\x73\x69\x6e\147\154\x65\137\x76\141\x6c\165\145", ["\154\x69\x73\164" => $augiookssyeuewki, "\x70\157\x70\x75\x6c\x61\x72" => $cowauqqkuseckgyy, "\x74\x61\170\x6f\x6e\x6f\155\171" => $kesssewsiegssiya, "\x6e\x61\x6d\145" => $ymqmyyeuycgmigyo, "\x70\157\x73\x74" => ManipulatePost::mwikyscisascoeea($post), "\141\x72\147\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\145\x6d\160\164\171\x5f\x6d\145\163\x73\141\147\145" => __("\124\150\145\x72\145\x20\x61\162\x65\40\156\x6f\x74\40\45\x73\x20\171\x65\164\x2e", PR__CMN__FOUNDATION)]);
        goto teeogqoaqaamycck;
        ioscumsgeuoekyik:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto eusmmqcsiiyiogqg;
        wggceogiyyyaoqca:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\151\x6e\143\x6c\x75\144\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto saicagwascmeamuk;
        soeueuyguemogamc:
        oamigoywuyowgcow:
        goto aysoyukoimiemacc;
        oeqekywmewqowkwg:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\x72\147\x73"];
        goto gseomoauqsuqccme;
        gseomoauqsuqccme:
        goto uqogiiekomwssgee;
        goto soeueuyguemogamc;
        akogicckgmsmmiag:
        if (ManipulateArray::get($kesssewsiegssiya, "\x73\x69\x6e\147\154\x65\137\x76\x61\154\165\x65", false)) {
            goto wsgkyquaeocsaiqk;
        }
        goto qgwisswsyykiimuq;
        wsymimooikcoeamc:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto gmqcqaiwkusyiuey;
        aysoyukoimiemacc:
        $ywmkwiwkosakssii = [];
        goto wecayusimwoiswuw;
        guyauwwommggyukw:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\x74\141\x78\x5f\x69\156\x70\x75\x74\133{$ymqmyyeuycgmigyo}\x5d")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\151\x64", "\164\x61\170\x5f\151\x6e\x70\165\x74\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\142\x6f\162\x64\x65\162\x2d\142\157\x78\40\x70\55\60")->yoimakcqmoqokkcu();
        goto akogicckgmsmmiag;
        maakkwkkckwawgqq:
        wsgkyquaeocsaiqk:
        goto swwaaaeuyyocowgq;
        iqecwuuaikqmkqyy:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\146\x69\145\154\144\x73" => self::IDS]);
        goto wyiuscyymgoqkmws;
        saicagwascmeamuk:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\x65\164\x61\137\142\x6f\x78\x5f\x70\157\x70\165\x6c\141\x72", ["\144\x61\x74\141" => $cowauqqkuseckgyy, "\156\x61\x6d\x65" => $ymqmyyeuycgmigyo]);
        goto cgewmgsswwywkoki;
        wecayusimwoiswuw:
        uqogiiekomwssgee:
        goto ioscumsgeuoekyik;
        gmqcqaiwkusyiuey:
        soumiseyqqgqccym:
        goto guyauwwommggyukw;
        teeogqoaqaamycck:
        kegeyiwiieqmocsk:
        goto cuoeygmcaqgwuauk;
        kumiqmuaqymmkyic:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto iqecwuuaikqmkqyy;
        kmycyawgoewowaeq:
        if (!isset($uoeiskamgscgeccq["\x61\x72\x67\x73"]) || !is_array($uoeiskamgscgeccq["\141\x72\147\x73"])) {
            goto oamigoywuyowgcow;
        }
        goto oeqekywmewqowkwg;
        eusmmqcsiiyiogqg:
        if (!isset($kesssewsiegssiya)) {
            goto kegeyiwiieqmocsk;
        }
        goto kymauouamycysiyy;
        kymauouamycysiyy:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto kumiqmuaqymmkyic;
        swwaaaeuyyocowgq:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto wggceogiyyyaoqca;
        cuoeygmcaqgwuauk:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto sqcuywaguiesgqks;
        sqcuywaguiesgqks:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\157\x72\x64\145\x72\x62\x79") == "\151\x6e\x63\x6c\x75\x64\145")) {
            goto wqykcwiyiawemsii;
        }
        goto ksukgeseassggeke;
        wyiyueigwggemieu:
        $sikaymiwcesagayc = "\x46\111\x45\x4c\104\x28\x74\56\x74\145\x72\155\x5f\151\144\x2c\40{$ooiewiwkegguusum}\51";
        goto kkqcmwywuusgekmw;
        ksukgeseassggeke:
        $ooiewiwkegguusum = implode("\54", array_map("\141\x62\163\151\x6e\164", $ywmkwiwkosakssii["\x69\156\143\x6c\165\144\x65"]));
        goto wyiyueigwggemieu;
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
        cksgmgyakmmkomoq:
        return ["\145\143\x68\157" => $koaqeegoeiaiccse, self::NAME => "\x6e\x65\167{$ymqmyyeuycgmigyo}\137\160\141\162\145\x6e\x74", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\x69\x64\x65\137\x65\x6d\x70\164\x79" => 0, "\x68\x69\x65\x72\141\x72\x63\150\x69\143\141\x6c" => 1, "\163\150\x6f\x77\x5f\x6f\160\x74\x69\x6f\x6e\137\156\157\156\145" => "\46\155\x64\141\x73\150\73\x20{$kesssewsiegssiya->labels->parent_item}\40\x26\155\x64\141\163\x68\x3b"];
        goto akqwyoaqqkwiweke;
        uayimmyaoyciogiq:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cksgmgyakmmkomoq;
        qwiikwcawgeqkuwi:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto uayimmyaoyciogiq;
        akqwyoaqqkwiweke:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\x69\x74"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\x65\x74\x5f\164\145\162\155\x73\137\x61\x72\x67\163", [$this, "\x73\x67\153\151\171\x65\167\143\x6f\x6f\147\147\x63\x6d\x6b\x73"])->cecaguuoecmccuse("\x67\145\164\137\x74\x65\x72\155\163\x5f\157\x72\x64\x65\162\x62\171", [$this, "\x6b\x75\x6f\171\151\x71\151\x75\163\163\145\171\x65\141\x65\141"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto mqgywkmwkwqgsius;
        cqamkyuumwogqcas:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\x61\x78\157\x6e\x6f\x6d\171\137\x73\151\156\147\154\145\137\166\x61\154\x75\x65\x5f\155\157\x64\151\x66\171\137\151\164\x65\x6d\163"), []);
        goto mqmquwuyocuoikae;
        mqmquwuyocuoikae:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto ccasgycsymsuuwks;
            iymwescsmiywgwui:
            $kesssewsiegssiya->meta_box_cb = [$this, "\141\x75\x73\171\155\155\147\163\x6b\x73\x6f\x71\x77\165\x71\x6b"];
            goto ceiaogwwoekcyacg;
            smuioeqccoouuewa:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\x73\151\x6e\147\154\x65\x5f\x76\141\154\x75\x65"))) {
                goto uysasageemkuuusg;
            }
            goto yeaoaicqksoigqwu;
            sweokouicekqeyse:
            scuasiqkgymskyoc:
            goto skyckeomciwscaso;
            cmmuyseicemsyouq:
            $kesssewsiegssiya->rewrite["\x68\151\x65\x72\141\x72\x63\150\151\143\141\x6c"] = false;
            goto ewysmowcmmykqscm;
            ceiaogwwoekcyacg:
            uysasageemkuuusg:
            goto gweqggykcmiiawwc;
            ewysmowcmmykqscm:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto sweokouicekqeyse;
            gweqggykcmiiawwc:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\151\x69\151\x71\x65\167\x73\163\145\171\x77\145\x6d\161\165"];
            goto cmmuyseicemsyouq;
            yeaoaicqksoigqwu:
            $kesssewsiegssiya->single_value = true;
            goto iymwescsmiywgwui;
            ccasgycsymsuuwks:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto smuioeqccoouuewa;
            skyckeomciwscaso:
        }
        goto gswwomycucqmsywk;
        gswwomycucqmsywk:
        yewuugymokaikqmq:
        goto tmyuuoeywociqseo;
        mqgywkmwkwqgsius:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto cqamkyuumwogqcas;
        tmyuuoeywociqseo:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto eiwwmuekkuasciug;
        ocysawskymukqmeq:
        return $ywmkwiwkosakssii;
        goto pamyaqouossmosoe;
        eckeocwysskicowi:
        return $ywmkwiwkosakssii;
        goto oskymakeiqaoiukk;
        eiwwmuekkuasciug:
        if (!is_admin()) {
            goto mkyomwyoeskcakyi;
        }
        goto acmoisuwocsciyae;
        acmoisuwocsciyae:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto ocysawskymukqmeq;
        pamyaqouossmosoe:
        mkyomwyoeskcakyi:
        goto eckeocwysskicowi;
        oskymakeiqaoiukk:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto sewqkgoqqeiogwgc;
        sewqkgoqqeiogwgc:
        if (is_array($uyuaosigqymaqsaa)) {
            goto gwyacasmwuiceqwi;
        }
        goto ewasskcgskcwkeyq;
        sqygiwwewksqgica:
        return $uyuaosigqymaqsaa;
        goto eukeqiqsekiaqkyk;
        iomkccwaewyicouy:
        gwyacasmwuiceqwi:
        goto eemagcyswykuayai;
        wwqmyeqgkqmkoosk:
        mqssosgumiesimkw:
        goto sqygiwwewksqgica;
        guqgcqqsyaacwsuk:
        geasmqwwokmeqayu:
        goto eoqccooyeaocyegw;
        ewasskcgskcwkeyq:
        if (is_string($uyuaosigqymaqsaa)) {
            goto geasmqwwokmeqayu;
        }
        goto isqacycsggwaoyqw;
        isqacycsggwaoyqw:
        goto mqssosgumiesimkw;
        goto iomkccwaewyicouy;
        eemagcyswykuayai:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto aegcoomigmqwwaka;
        aegcoomigmqwwaka:
        goto mqssosgumiesimkw;
        goto guqgcqqsyaacwsuk;
        eoqccooyeaocyegw:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto wwqmyeqgkqmkoosk;
        eukeqiqsekiaqkyk:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto soumiseyqqgqccym;
        qgwisswsyykiimuq:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\x69\156\143\154\165\x64\145" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto maakkwkkckwawgqq;
        maakkwkkckwawgqq:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\x65\164\141\137\x62\157\170\137\160\157\160\165\154\141\162", ["\x64\141\x74\x61" => $cowauqqkuseckgyy, "\156\141\x6d\145" => $ymqmyyeuycgmigyo]);
        goto swwaaaeuyyocowgq;
        swwaaaeuyyocowgq:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\142\157\x78\x5f\163\x69\156\x67\154\145\x5f\x76\141\x6c\x75\x65", ["\154\x69\x73\x74" => $augiookssyeuewki, "\x70\157\x70\x75\x6c\x61\x72" => $cowauqqkuseckgyy, "\x74\141\170\x6f\x6e\x6f\x6d\x79" => $kesssewsiegssiya, "\156\x61\x6d\145" => $ymqmyyeuycgmigyo, "\160\157\163\x74" => ManipulatePost::mwikyscisascoeea($post), "\141\x72\147\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\x65\x6d\x70\x74\x79\137\155\x65\163\163\x61\x67\x65" => __("\x54\x68\x65\162\145\40\x61\x72\145\40\x6e\157\164\40\45\163\x20\x79\x65\x74\x2e", PR__CMN__FOUNDATION)]);
        goto wggceogiyyyaoqca;
        iqecwuuaikqmkqyy:
        mqimqkqmmswccmew:
        goto wyiuscyymgoqkmws;
        eusmmqcsiiyiogqg:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\146\x69\145\x6c\x64\163" => self::IDS]);
        goto kymauouamycysiyy;
        wecayusimwoiswuw:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto ioscumsgeuoekyik;
        soeueuyguemogamc:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto aysoyukoimiemacc;
        ioscumsgeuoekyik:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto eusmmqcsiiyiogqg;
        kmycyawgoewowaeq:
        uyewsowgcymwsuwu:
        goto oeqekywmewqowkwg;
        wsymimooikcoeamc:
        if (ManipulateArray::get($kesssewsiegssiya, "\163\x69\x6e\147\x6c\x65\137\166\x61\154\x75\x65", false)) {
            goto oamigoywuyowgcow;
        }
        goto gmqcqaiwkusyiuey;
        wyiuscyymgoqkmws:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\x74\141\x78\137\151\x6e\x70\165\x74\x5b{$ymqmyyeuycgmigyo}\x5d")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\x69\x64", "\x74\x61\x78\x5f\151\156\x70\165\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\x62\157\162\x64\x65\x72\55\x62\157\170\40\160\55\60")->yoimakcqmoqokkcu();
        goto wsymimooikcoeamc;
        aysoyukoimiemacc:
        if (!isset($kesssewsiegssiya)) {
            goto uqogiiekomwssgee;
        }
        goto wecayusimwoiswuw;
        oeqekywmewqowkwg:
        $ywmkwiwkosakssii = [];
        goto gseomoauqsuqccme;
        soumiseyqqgqccym:
        if (!isset($uoeiskamgscgeccq["\x61\x72\x67\163"]) || !is_array($uoeiskamgscgeccq["\x61\162\147\163"])) {
            goto uyewsowgcymwsuwu;
        }
        goto wsgkyquaeocsaiqk;
        gmqcqaiwkusyiuey:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto guyauwwommggyukw;
        gseomoauqsuqccme:
        aqqqwiuwoymusgey:
        goto soeueuyguemogamc;
        wggceogiyyyaoqca:
        uqogiiekomwssgee:
        goto saicagwascmeamuk;
        kegeyiwiieqmocsk:
        goto aqqqwiuwoymusgey;
        goto kmycyawgoewowaeq;
        guyauwwommggyukw:
        oamigoywuyowgcow:
        goto akogicckgmsmmiag;
        akogicckgmsmmiag:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto qgwisswsyykiimuq;
        kumiqmuaqymmkyic:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto iqecwuuaikqmkqyy;
        wsgkyquaeocsaiqk:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\x72\x67\x73"];
        goto kegeyiwiieqmocsk;
        kymauouamycysiyy:
        if (!ManipulateArray::get($kesssewsiegssiya, "\163\x69\156\x67\154\145\x5f\166\x61\x6c\x75\x65")) {
            goto mqimqkqmmswccmew;
        }
        goto kumiqmuaqymmkyic;
        saicagwascmeamuk:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto teeogqoaqaamycck;
        teeogqoaqaamycck:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\157\162\144\x65\162\142\171") == "\x69\156\143\154\165\x64\145")) {
            goto cgewmgsswwywkoki;
        }
        goto cuoeygmcaqgwuauk;
        sqcuywaguiesgqks:
        cgewmgsswwywkoki:
        goto ksukgeseassggeke;
        cuoeygmcaqgwuauk:
        $ooiewiwkegguusum = implode("\54", array_map("\141\x62\163\151\x6e\164", $ywmkwiwkosakssii["\151\x6e\x63\154\165\x64\145"]));
        goto wqykcwiyiawemsii;
        ksukgeseassggeke:
        return $sikaymiwcesagayc;
        goto wyiyueigwggemieu;
        wqykcwiyiawemsii:
        $sikaymiwcesagayc = "\x46\111\x45\x4c\104\50\x74\x2e\x74\x65\162\x6d\x5f\x69\x64\54\40{$ooiewiwkegguusum}\51";
        goto sqcuywaguiesgqks;
        wyiyueigwggemieu:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto kkqcmwywuusgekmw;
        eusgmgmouwqgoomc:
        return ["\145\x63\x68\157" => $koaqeegoeiaiccse, self::NAME => "\x6e\145\x77{$ymqmyyeuycgmigyo}\137\x70\x61\162\x65\156\x74", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\x68\x69\144\145\137\x65\x6d\160\x74\x79" => 0, "\x68\x69\145\162\x61\x72\x63\150\x69\143\x61\x6c" => 1, "\163\150\x6f\167\137\x6f\x70\x74\151\x6f\156\137\x6e\157\x6e\x65" => "\46\x6d\144\x61\x73\150\x3b\x20{$kesssewsiegssiya->labels->parent_item}\x20\x26\x6d\x64\x61\x73\150\73"];
        goto qwiikwcawgeqkuwi;
        uukuqcowwaqgmgag:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto eusgmgmouwqgoomc;
        kkqcmwywuusgekmw:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto uukuqcowwaqgmgag;
        qwiikwcawgeqkuwi:
    }
}

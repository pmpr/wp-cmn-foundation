<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\156\151\x74"], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\145\164\x5f\164\x65\162\x6d\x73\137\x61\x72\147\x73", [$this, "\x73\147\x6b\x69\171\x65\x77\x63\157\157\x67\147\x63\155\x6b\x73"])->cecaguuoecmccuse("\147\145\x74\137\164\x65\162\x6d\x73\137\x6f\162\144\145\x72\142\x79", [$this, "\x6b\x75\157\171\151\x71\x69\x75\x73\163\x65\x79\x65\x61\145\141"], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        goto ioomkicqkmoooiew;
        ioomkicqkmoooiew:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        goto asuwukmiyuqqgqiy;
        asuwukmiyuqqgqiy:
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\141\x78\x6f\x6e\157\x6d\171\x5f\x73\x69\156\x67\154\145\137\166\141\x6c\x75\x65\x5f\x6d\157\x64\151\146\171\137\x69\x74\145\x6d\x73"), []);
        goto cqcaimmsooakqmae;
        cqcaimmsooakqmae:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wwsamammkqcsocqc;
            uucoqooygmoeuicu:
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            goto ugakmuywaoowqymc;
            yewcqwqmykemykca:
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\151\x69\x69\161\x65\x77\x73\163\145\x79\x77\145\x6d\161\x75"];
            goto wauomwaoauygqsou;
            iqomqkaueoackgwg:
            $kesssewsiegssiya->meta_box_cb = [$this, "\141\165\163\171\x6d\155\x67\x73\153\x73\x6f\x71\167\165\161\153"];
            goto ysowsoswoigywasy;
            wwsamammkqcsocqc:
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            goto cceykcumeqigcqkg;
            ugakmuywaoowqymc:
            qugokekqyguksees:
            goto soyyokqommwwoyoy;
            cceykcumeqigcqkg:
            if (!(in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, "\163\x69\x6e\x67\154\x65\x5f\166\141\154\x75\x65"))) {
                goto emsewgkwsmcgkoyy;
            }
            goto gkmiesukccsqmcqy;
            gkmiesukccsqmcqy:
            $kesssewsiegssiya->single_value = true;
            goto iqomqkaueoackgwg;
            wauomwaoauygqsou:
            $kesssewsiegssiya->rewrite["\x68\x69\145\162\x61\x72\x63\x68\x69\143\x61\154"] = false;
            goto uucoqooygmoeuicu;
            ysowsoswoigywasy:
            emsewgkwsmcgkoyy:
            goto yewcqwqmykemykca;
            soyyokqommwwoyoy:
        }
        goto iykceckkokwcsgoi;
        iykceckkokwcsgoi:
        wqmuwigkssqkoweq:
        goto oimgigccqeqcsmoy;
        oimgigccqeqcsmoy:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        goto goicqkqwoomuowkw;
        qoeaosoumsicoqms:
        gqemygsogaaasyes:
        goto yicumoqkcoycyoyu;
        goicqkqwoomuowkw:
        if (!is_admin()) {
            goto gqemygsogaaasyes;
        }
        goto qagigacwywmweskc;
        qagigacwywmweskc:
        $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
        goto akiymyugggumyuic;
        yicumoqkcoycyoyu:
        return $ywmkwiwkosakssii;
        goto wqmquqcyioicymwu;
        akiymyugggumyuic:
        return $ywmkwiwkosakssii;
        goto qoeaosoumsicoqms;
        wqmquqcyioicymwu:
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        goto ywwqgsuuquocmqgk;
        ewmcqauqqeywoqcs:
        mqugkocskuaokeiy:
        goto yayoumcciuyieeoi;
        ycwwyeycsiquwiyq:
        goto moywwywcsegwawmi;
        goto ewmcqauqqeywoqcs;
        omsqscuggqqkuigc:
        moywwywcsegwawmi:
        goto eaaicwyuwkogsies;
        yayoumcciuyieeoi:
        $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        goto uyieackqwooqcqos;
        owaccsusoeoacmwc:
        if (is_string($uyuaosigqymaqsaa)) {
            goto owqyqioycqkesioo;
        }
        goto ycwwyeycsiquwiyq;
        emmcgqumuacycqgg:
        $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        goto omsqscuggqqkuigc;
        ywwqgsuuquocmqgk:
        if (is_array($uyuaosigqymaqsaa)) {
            goto mqugkocskuaokeiy;
        }
        goto owaccsusoeoacmwc;
        uyieackqwooqcqos:
        goto moywwywcsegwawmi;
        goto suumgeqekqgggugc;
        suumgeqekqgggugc:
        owqyqioycqkesioo:
        goto emmcgqumuacycqgg;
        eaaicwyuwkogsies:
        return $uyuaosigqymaqsaa;
        goto akquuwsekmuoicae;
        akquuwsekmuoicae:
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        goto eaqoukeuceuywwac;
        qkueygwuioiiemuw:
        echo $this->iuygowkemiiwqmiw("\155\x65\164\x61\x5f\x62\x6f\170\137\163\151\x6e\x67\x6c\145\x5f\166\x61\x6c\x75\145", ["\x6c\151\163\x74" => $augiookssyeuewki, "\160\157\160\165\x6c\x61\162" => $cowauqqkuseckgyy, "\x74\x61\x78\157\x6e\x6f\155\x79" => $kesssewsiegssiya, "\156\141\155\145" => $ymqmyyeuycgmigyo, "\160\x6f\x73\x74" => ManipulatePost::mwikyscisascoeea($post), "\x61\x72\x67\163" => self::esqgqsacwywoakok($kesssewsiegssiya), "\145\155\x70\x74\x79\x5f\155\x65\x73\x73\141\x67\x65" => __("\124\x68\x65\x72\x65\40\141\162\145\40\156\157\164\x20\45\x73\40\171\145\164\56", PR__CMN__FOUNDATION)]);
        goto csgmgackuimwqgmw;
        sgmwwuiygokssyeg:
        $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
        goto lmsiwkmayqggkuie;
        eoggoeeymkgmcckw:
        if (!isset($kesssewsiegssiya)) {
            goto gemyysqyokmecguu;
        }
        goto sgmwwuiygokssyeg;
        eeycgakkgoakqaac:
        $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
        goto gscqagmcimoymgeq;
        ceuyeoigyioagyou:
        $augiookssyeuewki = $augiookssyeuewki->render();
        goto qagksgqcwesuogsi;
        gsmueswaqwsqiqay:
        $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\x65\164\141\137\x62\x6f\170\x5f\160\157\160\165\x6c\x61\x72", ["\x64\141\x74\x61" => $cowauqqkuseckgyy, "\x6e\141\155\x65" => $ymqmyyeuycgmigyo]);
        goto qkueygwuioiiemuw;
        gakugweoyossmeao:
        $ywmkwiwkosakssii = [];
        goto euqokgqeguqwueas;
        aieuuwkemkgccgqq:
        if (ManipulateArray::get($kesssewsiegssiya, "\x73\x69\156\147\x6c\x65\137\x76\141\154\165\145", false)) {
            goto keggycaoqkyockgu;
        }
        goto egmkyicacugkkoie;
        lmsiwkmayqggkuie:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto mkeiwccsuyqyqaom;
        ioyamykqysewiueo:
        sgqkaakkaugosoak:
        goto gakugweoyossmeao;
        gscqagmcimoymgeq:
        kikeekyeuiyoiuoc:
        goto gqucksyyuwcwiyog;
        ssgkiscaiguwcyeq:
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        goto eoggoeeymkgmcckw;
        qagksgqcwesuogsi:
        $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ["\151\x6e\143\154\165\144\x65" => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
        goto gsmueswaqwsqiqay;
        eaqoukeuceuywwac:
        if (!isset($uoeiskamgscgeccq["\141\x72\147\163"]) || !is_array($uoeiskamgscgeccq["\x61\162\x67\x73"])) {
            goto sgqkaakkaugosoak;
        }
        goto eyqiqgwmkyegsmgw;
        eyqiqgwmkyegsmgw:
        $ywmkwiwkosakssii = $uoeiskamgscgeccq["\x61\162\147\x73"];
        goto emeycusyiaccgcoo;
        csgmgackuimwqgmw:
        gemyysqyokmecguu:
        goto siaqoyuoaccceoqy;
        gqucksyyuwcwiyog:
        $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("\164\141\170\137\151\156\160\165\164\x5b{$ymqmyyeuycgmigyo}\x5d")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw("\151\x64", "\164\141\x78\137\151\x6e\x70\x75\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc("\x62\x6f\x72\x64\x65\162\x2d\142\x6f\x78\40\x70\x2d\x30")->yoimakcqmoqokkcu();
        goto aieuuwkemkgccgqq;
        gqukqoawwwyuukwc:
        keggycaoqkyockgu:
        goto ceuyeoigyioagyou;
        euqokgqeguqwueas:
        omqyiocewcgomqks:
        goto ssgkiscaiguwcyeq;
        ygooeemqcwgcmwgy:
        if (!ManipulateArray::get($kesssewsiegssiya, "\163\151\156\147\x6c\x65\137\x76\x61\x6c\x75\145")) {
            goto kikeekyeuiyoiuoc;
        }
        goto eeycgakkgoakqaac;
        emeycusyiaccgcoo:
        goto omqyiocewcgomqks;
        goto ioyamykqysewiueo;
        mkeiwccsuyqyqaom:
        $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ["\146\151\x65\x6c\144\x73" => self::IDS]);
        goto ygooeemqcwgcmwgy;
        egmkyicacugkkoie:
        $augiookssyeuewki->oikgogcweiiaocka();
        goto gqukqoawwwyuukwc;
        siaqoyuoaccceoqy:
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        goto yewuugymokaikqmq;
        uysasageemkuuusg:
        $sikaymiwcesagayc = "\x46\111\105\114\104\x28\164\x2e\164\145\162\155\137\x69\144\54\40{$ooiewiwkegguusum}\51";
        goto ccasgycsymsuuwks;
        scuasiqkgymskyoc:
        $ooiewiwkegguusum = implode("\54", array_map("\141\x62\163\x69\156\164", $ywmkwiwkosakssii["\x69\156\x63\x6c\x75\144\x65"]));
        goto uysasageemkuuusg;
        smuioeqccoouuewa:
        return $sikaymiwcesagayc;
        goto yeaoaicqksoigqwu;
        ccasgycsymsuuwks:
        hgmsiocesiimemgo:
        goto smuioeqccoouuewa;
        yewuugymokaikqmq:
        if (!(ManipulateArray::get($ywmkwiwkosakssii, "\157\x72\144\145\162\x62\x79") == "\x69\156\x63\154\x75\144\145")) {
            goto hgmsiocesiimemgo;
        }
        goto scuasiqkgymskyoc;
        yeaoaicqksoigqwu:
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        goto iymwescsmiywgwui;
        ceiaogwwoekcyacg:
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto gweqggykcmiiawwc;
        iymwescsmiywgwui:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ceiaogwwoekcyacg;
        gweqggykcmiiawwc:
        return ["\145\143\x68\x6f" => $koaqeegoeiaiccse, self::NAME => "\156\x65\167{$ymqmyyeuycgmigyo}\x5f\160\x61\162\145\156\x74", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, "\150\151\144\x65\x5f\145\x6d\160\x74\x79" => 0, "\150\151\145\x72\x61\x72\x63\x68\151\x63\141\x6c" => 1, "\x73\x68\157\167\137\x6f\x70\164\x69\157\156\x5f\156\157\156\145" => "\46\155\144\x61\x73\x68\x3b\x20{$kesssewsiegssiya->labels->parent_item}\40\46\155\x64\x61\x73\x68\73"];
        goto cmmuyseicemsyouq;
        cmmuyseicemsyouq:
    }
}

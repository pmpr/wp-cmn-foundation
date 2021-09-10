<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class GlobalAttribute extends BaseAttribute
{
    const VALUE_TYPE = self::VALUE . "\137\x74\x79\160\145";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto ayuwgkkummcqqesk;
        eqgkqikoqkaiuocm:
        $this->model = Model::symcgieuakksimmu();
        goto mouaeysyaawwqsmq;
        ayuwgkkummcqqesk:
        $this->name = "\147\x6c\157\x62\141\154";
        goto eqgkqikoqkaiuocm;
        mouaeysyaawwqsmq:
        parent::__construct();
        goto gsiaweqgymagyokg;
        gsiaweqgymagyokg:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\160\154\165\x67\x69\x6e\x73\137\x6c\x6f\141\144\145\144", [$this, "\x69\143\167\x63\147\x6d\x63\x6f\x69\x6d\x71\145\151\x67\171\145"])->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\155\155\145\162\x63\145\x5f\141\164\x74\162\x69\142\x75\164\145\x5f\165\x70\144\141\x74\145\x64", [$this, "\163\141\166\145"])->qcsmikeggeemccuu("\167\157\157\143\x6f\x6d\155\x65\x72\x63\x65\137\141\146\x74\145\162\x5f\x61\144\x64\x5f\x61\164\164\x72\x69\x62\165\x74\x65\x5f\146\151\145\x6c\144\x73", [$this, "\x69\x69\x73\143\x71\x63\167\141\151\143\145\x6f\153\x6f\x79\165"])->qcsmikeggeemccuu("\x77\157\157\143\157\x6d\x6d\145\x72\143\145\137\141\146\164\x65\x72\x5f\x65\x64\151\x74\137\141\164\164\162\x69\142\165\x74\x65\x5f\x66\151\x65\154\x64\163", [$this, "\x67\x67\x63\171\x67\141\171\143\155\143\143\143\x65\x73\167\x6f"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\167\157\x6f\x63\157\155\155\145\x72\143\x65\137\141\164\x74\x72\151\x62\x75\164\x65\x5f\164\141\x78\157\x6e\157\x6d\x69\x65\x73", [$this, "\147\163\143\x6b\161\x79\x73\x6f\153\x75\x6d\x6b\x77\161\163\161"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\x6f\x63\x6f\x6d\155\x65\162\x63\x65\137\x61\x74\164\x72\151\x62\x75\164\x65\137\x74\x61\x78\157\156\x6f\x6d\x69\x65\x73\x5f\x76\141\x6c\165\x65\x5f\x74\171\x70\145\x73"), [self::DATE => __("\x44\141\x74\x65", PR__CMN__FOUNDATION), self::NUMBER => __("\116\x75\155\x62\x65\x72", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\126\x61\154\165\145\x20\164\x79\160\145", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\x54\x79\160\x65\40\x6f\x66\x20\166\141\x6c\165\x65\x73", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto komaikgkmaeoescu;
        kgyqmwecomucoumg:
        return $oammesyieqmwuwyi;
        goto euekwowaokcqsgsw;
        komaikgkmaeoescu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto syeosgmcsoykgmoi;
        qmukimkmkeagqocg:
        wwgssoakwoscwoss:
        goto kgyqmwecomucoumg;
        cmaemkmgukqugeow:
        gaqiaugiyyuoaywe:
        goto qmukimkmkeagqocg;
        oyauiswikoukcyqy:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto ismmoaqwqiyscccu;
            usukaqsqeowqkwwu:
            syuuameqwoymyswo:
            goto ukaumyigguemyqmg;
            ismmoaqwqiyscccu:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\x61\x74\x74\162\151\142\x75\x74\145\x5f\151\x64");
            goto seymakqosammeimy;
            weciiuggqamwweai:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                goto gqaiosgasmiekmma;
                eeyukwscccmigmuq:
                $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                goto oqmwiucmyoiwciws;
                gqaiosgasmiekmma:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto eeyukwscccmigmuq;
                oqmwiucmyoiwciws:
                kykgeuicqicmuucg:
                goto sqummycmewomisus;
                sqummycmewomisus:
            }
            goto usukaqsqeowqkwwu;
            mekmkiaykamiugmo:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto okieooymmiqqwsui;
            ukaumyigguemyqmg:
            uaeqweeeyaoceeae:
            goto mekmkiaykamiugmo;
            seymakqosammeimy:
            if (!$mqeiemgcoiugcyuc) {
                goto uaeqweeeyaoceeae;
            }
            goto weciiuggqamwweai;
            okieooymmiqqwsui:
            ismswigsaeymicgu:
            goto wukeekgkakowukck;
            wukeekgkakowukck:
        }
        goto cmaemkmgukqugeow;
        syeosgmcsoykgmoi:
        if (!is_array($oammesyieqmwuwyi)) {
            goto wwgssoakwoscwoss;
        }
        goto oyauiswikoukcyqy;
        euekwowaokcqsgsw:
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return $ymkomoccmymcoiea->get_id();
    }
    
    public function save($aokagokqyuysuksm)
    {
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto wioguogamqaikqqy;
            aiaagscmgeyuqaky:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wmgigiqsosicakwu;
            wioguogamqaikqqy:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto qkqkgaaomgkyowwy;
            }
            goto aiaagscmgeyuqaky;
            okccyiwkococowmi:
            euuqcskgauwamyuw:
            goto iquwggoqmwgkouio;
            wmgigiqsosicakwu:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto kyayieiyyyqgkcyc;
            uwaoaysiccasmygw:
            qkqkgaaomgkyowwy:
            goto okccyiwkococowmi;
            kyayieiyyyqgkcyc:
            $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            goto uwaoaysiccasmygw;
            iquwggoqmwgkouio:
        }
        gammgmwagsemkuua:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc);
    }
    public function iiscqcwaiceokoyu()
    {
        goto fauegywkmasowmki;
        bkusemkaeowgcggg:
        aumkeyeqwqukcyqm:
        goto acwgyguyoswiiayo;
        fauegywkmasowmki:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto sgggogwmywukuwoq;
        sgggogwmywukuwoq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus);
            moaqsaoasisemagk:
        }
        goto bkusemkaeowgcggg;
        acwgyguyoswiiayo:
    }
    public function ggcygaycmccceswo()
    {
        goto mkeikioeqcuumiga;
        mkeikioeqcuumiga:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\x65\144\151\x74");
        goto gusqaksmckugmucc;
        uceqaououkceeiui:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto siymqewiegkgsuai;
        useqkkasoyuoecio:
        oqqsaycukyyqkwwa:
        goto kemqmaqgsgueoaye;
        siymqewiegkgsuai:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto gkaauyqyceyeasym;
            gkaauyqyceyeasym:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto aosqacyissiuywmy;
            }
            goto iyiogqckuesmwgsi;
            eickccugyqkeaqqs:
            aosqacyissiuywmy:
            goto wecqaqqeqaiwuqmc;
            iyiogqckuesmwgsi:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto akgikwguwgmkickm;
            wecqaqqeqaiwuqmc:
            lsgwaumeuqgqgykm:
            goto koayqokgokmcaeou;
            akgikwguwgmkickm:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto eickccugyqkeaqqs;
            koayqokgokmcaeou:
        }
        goto useqkkasoyuoecio;
        kemqmaqgsgueoaye:
        owgquegaygweeuwq:
        goto wccugoogysmyisqe;
        gusqaksmckugmucc:
        if (!$wwgeaeqgacgwooqi) {
            goto owgquegaygweeuwq;
        }
        goto uceqaououkceeiui;
        wccugoogysmyisqe:
    }
}

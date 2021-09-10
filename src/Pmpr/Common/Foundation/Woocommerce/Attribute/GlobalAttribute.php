<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const VALUE_TYPE = self::VALUE . "\x5f\x74\171\x70\145";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto gsiaweqgymagyokg;
        gsiaweqgymagyokg:
        $this->name = "\147\x6c\x6f\x62\x61\154";
        goto gaqiaugiyyuoaywe;
        gaqiaugiyyuoaywe:
        $this->model = Model::symcgieuakksimmu();
        goto ismswigsaeymicgu;
        ismswigsaeymicgu:
        parent::__construct();
        goto syuuameqwoymyswo;
        syuuameqwoymyswo:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\160\x6c\x75\147\x69\156\x73\137\x6c\x6f\141\x64\x65\x64", [$this, "\151\143\167\x63\147\x6d\x63\x6f\151\x6d\161\x65\x69\147\171\145"])->qcsmikeggeemccuu("\167\x6f\x6f\143\x6f\x6d\155\x65\162\143\x65\x5f\x61\x74\164\x72\x69\142\x75\164\x65\137\x75\x70\144\141\x74\145\144", [$this, "\163\141\x76\x65"])->qcsmikeggeemccuu("\167\x6f\157\x63\157\x6d\x6d\x65\162\x63\145\137\x61\146\x74\145\x72\137\x61\x64\144\137\141\164\164\x72\x69\x62\165\x74\145\x5f\x66\x69\x65\154\x64\163", [$this, "\151\x69\163\143\161\x63\167\x61\x69\x63\x65\157\x6b\x6f\171\165"])->qcsmikeggeemccuu("\167\157\x6f\x63\157\155\155\x65\x72\143\145\x5f\x61\x66\x74\x65\162\x5f\x65\144\151\164\137\x61\164\164\x72\x69\x62\x75\x74\145\137\146\151\145\154\144\163", [$this, "\147\147\x63\171\x67\x61\171\143\155\x63\143\143\x65\163\167\157"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\157\143\x6f\x6d\155\145\x72\x63\x65\137\x61\164\164\162\151\142\165\164\x65\x5f\164\x61\x78\x6f\156\x6f\155\151\145\163", [$this, "\x67\x73\x63\x6b\161\171\163\157\153\x75\155\x6b\167\x71\163\161"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\157\143\157\x6d\155\145\x72\x63\145\137\x61\164\x74\x72\151\x62\x75\164\x65\x5f\164\141\x78\x6f\x6e\157\x6d\x69\145\163\137\166\141\154\165\x65\x5f\x74\x79\x70\x65\163"), [self::DATE => __("\x44\141\x74\145", PR__CMN__FOUNDATION), self::NUMBER => __("\x4e\x75\155\x62\x65\x72", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\126\x61\x6c\165\x65\40\164\x79\160\145", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\124\x79\x70\x65\40\x6f\146\40\166\141\154\165\145\x73", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto cmaemkmgukqugeow;
        euekwowaokcqsgsw:
        kykgeuicqicmuucg:
        goto gammgmwagsemkuua;
        kgyqmwecomucoumg:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto usukaqsqeowqkwwu;
            komaikgkmaeoescu:
            gqaiosgasmiekmma:
            goto syeosgmcsoykgmoi;
            okieooymmiqqwsui:
            eeyukwscccmigmuq:
            goto wukeekgkakowukck;
            wwgssoakwoscwoss:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto komaikgkmaeoescu;
            ukaumyigguemyqmg:
            if (!$mqeiemgcoiugcyuc) {
                goto weciiuggqamwweai;
            }
            goto mekmkiaykamiugmo;
            usukaqsqeowqkwwu:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\141\x74\164\162\151\142\165\164\145\x5f\151\x64");
            goto ukaumyigguemyqmg;
            wukeekgkakowukck:
            weciiuggqamwweai:
            goto wwgssoakwoscwoss;
            mekmkiaykamiugmo:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                goto sqummycmewomisus;
                uaeqweeeyaoceeae:
                $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                goto ismmoaqwqiyscccu;
                ismmoaqwqiyscccu:
                oqmwiucmyoiwciws:
                goto seymakqosammeimy;
                sqummycmewomisus:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto uaeqweeeyaoceeae;
                seymakqosammeimy:
            }
            goto okieooymmiqqwsui;
            syeosgmcsoykgmoi:
        }
        goto euekwowaokcqsgsw;
        cmaemkmgukqugeow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qmukimkmkeagqocg;
        gammgmwagsemkuua:
        oyauiswikoukcyqy:
        goto euuqcskgauwamyuw;
        qmukimkmkeagqocg:
        if (!is_array($oammesyieqmwuwyi)) {
            goto oyauiswikoukcyqy;
        }
        goto kgyqmwecomucoumg;
        euuqcskgauwamyuw:
        return $oammesyieqmwuwyi;
        goto qkqkgaaomgkyowwy;
        qkqkgaaomgkyowwy:
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
            goto kyayieiyyyqgkcyc;
            okccyiwkococowmi:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto iquwggoqmwgkouio;
            uwaoaysiccasmygw:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto okccyiwkococowmi;
            moaqsaoasisemagk:
            aiaagscmgeyuqaky:
            goto fauegywkmasowmki;
            iquwggoqmwgkouio:
            $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            goto aumkeyeqwqukcyqm;
            kyayieiyyyqgkcyc:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto wmgigiqsosicakwu;
            }
            goto uwaoaysiccasmygw;
            aumkeyeqwqukcyqm:
            wmgigiqsosicakwu:
            goto moaqsaoasisemagk;
            fauegywkmasowmki:
        }
        wioguogamqaikqqy:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc);
    }
    public function iiscqcwaiceokoyu()
    {
        goto acwgyguyoswiiayo;
        lsgwaumeuqgqgykm:
        sgggogwmywukuwoq:
        goto aosqacyissiuywmy;
        acwgyguyoswiiayo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oqqsaycukyyqkwwa;
        oqqsaycukyyqkwwa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus);
            bkusemkaeowgcggg:
        }
        goto lsgwaumeuqgqgykm;
        aosqacyissiuywmy:
    }
    public function ggcygaycmccceswo()
    {
        goto siymqewiegkgsuai;
        wccugoogysmyisqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto eickccugyqkeaqqs;
            eickccugyqkeaqqs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto akgikwguwgmkickm;
            }
            goto wecqaqqeqaiwuqmc;
            owgquegaygweeuwq:
            akgikwguwgmkickm:
            goto mkeikioeqcuumiga;
            mkeikioeqcuumiga:
            iyiogqckuesmwgsi:
            goto gusqaksmckugmucc;
            koayqokgokmcaeou:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto owgquegaygweeuwq;
            wecqaqqeqaiwuqmc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto koayqokgokmcaeou;
            gusqaksmckugmucc:
        }
        goto eaqqgoagskioaooo;
        smwyssciamywmcwc:
        uceqaououkceeiui:
        goto ukyauawycqguowmk;
        eaqqgoagskioaooo:
        gkaauyqyceyeasym:
        goto smwyssciamywmcwc;
        useqkkasoyuoecio:
        if (!$wwgeaeqgacgwooqi) {
            goto uceqaououkceeiui;
        }
        goto kemqmaqgsgueoaye;
        siymqewiegkgsuai:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\145\x64\151\164");
        goto useqkkasoyuoecio;
        kemqmaqgsgueoaye:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wccugoogysmyisqe;
        ukyauawycqguowmk:
    }
}

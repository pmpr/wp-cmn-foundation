<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const VALUE_TYPE = self::VALUE . "\x5f\164\171\x70\x65";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto gsiaweqgymagyokg;
        gaqiaugiyyuoaywe:
        $this->model = Model::symcgieuakksimmu();
        goto ismswigsaeymicgu;
        ismswigsaeymicgu:
        parent::__construct();
        goto syuuameqwoymyswo;
        gsiaweqgymagyokg:
        $this->name = "\147\x6c\157\142\141\x6c";
        goto gaqiaugiyyuoaywe;
        syuuameqwoymyswo:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\160\x6c\165\147\151\156\163\137\x6c\x6f\x61\144\145\x64", [$this, "\151\x63\x77\143\x67\155\143\157\151\x6d\x71\x65\151\x67\x79\x65"])->qcsmikeggeemccuu("\167\157\x6f\x63\157\x6d\x6d\x65\x72\143\x65\137\141\164\x74\x72\151\x62\x75\x74\x65\137\x75\160\x64\141\x74\145\x64", [$this, "\163\x61\x76\145"])->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\155\x6d\x65\162\143\x65\x5f\141\146\164\145\162\137\x61\144\x64\x5f\x61\164\x74\162\x69\x62\165\x74\x65\137\146\151\x65\154\x64\x73", [$this, "\x69\151\163\x63\161\143\x77\x61\151\x63\x65\x6f\x6b\x6f\x79\165"])->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\x65\x72\x63\145\137\141\x66\164\x65\162\137\x65\x64\151\164\137\141\164\164\162\x69\142\x75\x74\145\x5f\x66\151\x65\x6c\x64\x73", [$this, "\x67\x67\143\171\147\x61\171\143\155\x63\143\143\145\163\x77\157"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\157\x63\157\x6d\155\x65\162\143\145\x5f\x61\x74\x74\162\151\142\x75\164\145\137\164\141\x78\x6f\x6e\157\155\151\x65\x73", [$this, "\147\163\143\153\161\x79\x73\x6f\153\x75\155\x6b\167\161\x73\161"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\x6f\143\x6f\x6d\155\145\x72\x63\145\x5f\x61\x74\164\162\151\142\x75\164\x65\x5f\x74\x61\170\x6f\156\157\155\151\145\163\137\x76\x61\154\x75\145\x5f\164\x79\160\x65\x73"), [self::DATE => __("\x44\x61\164\145", PR__CMN__FOUNDATION), self::NUMBER => __("\x4e\x75\x6d\142\145\x72", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\126\141\154\x75\145\x20\164\x79\x70\x65", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\124\x79\x70\x65\40\x6f\x66\x20\x76\x61\154\165\x65\163", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto cmaemkmgukqugeow;
        euuqcskgauwamyuw:
        return $oammesyieqmwuwyi;
        goto qkqkgaaomgkyowwy;
        euekwowaokcqsgsw:
        kykgeuicqicmuucg:
        goto gammgmwagsemkuua;
        kgyqmwecomucoumg:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto usukaqsqeowqkwwu;
            ukaumyigguemyqmg:
            if (!$mqeiemgcoiugcyuc) {
                goto weciiuggqamwweai;
            }
            goto mekmkiaykamiugmo;
            mekmkiaykamiugmo:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                goto sqummycmewomisus;
                sqummycmewomisus:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto uaeqweeeyaoceeae;
                ismmoaqwqiyscccu:
                oqmwiucmyoiwciws:
                goto seymakqosammeimy;
                uaeqweeeyaoceeae:
                $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                goto ismmoaqwqiyscccu;
                seymakqosammeimy:
            }
            goto okieooymmiqqwsui;
            wukeekgkakowukck:
            weciiuggqamwweai:
            goto wwgssoakwoscwoss;
            komaikgkmaeoescu:
            gqaiosgasmiekmma:
            goto syeosgmcsoykgmoi;
            wwgssoakwoscwoss:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto komaikgkmaeoescu;
            usukaqsqeowqkwwu:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\141\164\x74\162\151\142\165\x74\x65\x5f\x69\144");
            goto ukaumyigguemyqmg;
            okieooymmiqqwsui:
            eeyukwscccmigmuq:
            goto wukeekgkakowukck;
            syeosgmcsoykgmoi:
        }
        goto euekwowaokcqsgsw;
        qmukimkmkeagqocg:
        if (!is_array($oammesyieqmwuwyi)) {
            goto oyauiswikoukcyqy;
        }
        goto kgyqmwecomucoumg;
        cmaemkmgukqugeow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qmukimkmkeagqocg;
        gammgmwagsemkuua:
        oyauiswikoukcyqy:
        goto euuqcskgauwamyuw;
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
            iquwggoqmwgkouio:
            $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            goto aumkeyeqwqukcyqm;
            okccyiwkococowmi:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto iquwggoqmwgkouio;
            uwaoaysiccasmygw:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto okccyiwkococowmi;
            moaqsaoasisemagk:
            aiaagscmgeyuqaky:
            goto fauegywkmasowmki;
            aumkeyeqwqukcyqm:
            wmgigiqsosicakwu:
            goto moaqsaoasisemagk;
            kyayieiyyyqgkcyc:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto wmgigiqsosicakwu;
            }
            goto uwaoaysiccasmygw;
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
        acwgyguyoswiiayo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oqqsaycukyyqkwwa;
        lsgwaumeuqgqgykm:
        sgggogwmywukuwoq:
        goto aosqacyissiuywmy;
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
        siymqewiegkgsuai:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\145\144\x69\x74");
        goto useqkkasoyuoecio;
        eaqqgoagskioaooo:
        gkaauyqyceyeasym:
        goto smwyssciamywmcwc;
        smwyssciamywmcwc:
        uceqaououkceeiui:
        goto ukyauawycqguowmk;
        kemqmaqgsgueoaye:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wccugoogysmyisqe;
        useqkkasoyuoecio:
        if (!$wwgeaeqgacgwooqi) {
            goto uceqaououkceeiui;
        }
        goto kemqmaqgsgueoaye;
        wccugoogysmyisqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto eickccugyqkeaqqs;
            wecqaqqeqaiwuqmc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto koayqokgokmcaeou;
            eickccugyqkeaqqs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto akgikwguwgmkickm;
            }
            goto wecqaqqeqaiwuqmc;
            owgquegaygweeuwq:
            akgikwguwgmkickm:
            goto mkeikioeqcuumiga;
            koayqokgokmcaeou:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto owgquegaygweeuwq;
            mkeikioeqcuumiga:
            iyiogqckuesmwgsi:
            goto gusqaksmckugmucc;
            gusqaksmckugmucc:
        }
        goto eaqqgoagskioaooo;
        ukyauawycqguowmk:
    }
}

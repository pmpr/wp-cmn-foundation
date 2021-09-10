<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const VALUE_TYPE = self::VALUE . "\137\x74\171\160\145";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto gsiaweqgymagyokg;
        gsiaweqgymagyokg:
        $this->name = "\147\x6c\x6f\x62\x61\x6c";
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
        $this->qcsmikeggeemccuu("\x70\154\165\147\x69\x6e\x73\x5f\154\x6f\141\144\x65\x64", [$this, "\x69\x63\x77\x63\147\x6d\x63\x6f\151\x6d\161\145\151\x67\x79\x65"])->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\155\155\145\162\143\145\x5f\141\164\x74\162\x69\142\165\x74\145\x5f\x75\x70\144\x61\x74\x65\x64", [$this, "\x73\141\166\x65"])->qcsmikeggeemccuu("\x77\157\157\x63\x6f\x6d\155\145\x72\143\x65\x5f\x61\x66\164\145\162\137\x61\144\144\137\x61\x74\164\x72\x69\x62\165\164\145\137\146\151\x65\154\x64\163", [$this, "\151\x69\163\x63\161\143\167\x61\x69\143\x65\157\153\x6f\171\x75"])->qcsmikeggeemccuu("\167\x6f\x6f\143\x6f\155\155\x65\162\143\x65\137\x61\146\x74\145\x72\137\145\x64\151\164\137\141\x74\164\x72\x69\x62\x75\x74\145\x5f\146\151\145\x6c\x64\x73", [$this, "\x67\x67\x63\171\147\x61\171\143\155\x63\x63\143\x65\163\x77\157"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\155\x6d\145\162\x63\145\137\x61\x74\x74\162\151\x62\x75\164\x65\x5f\164\x61\170\157\156\x6f\x6d\151\x65\163", [$this, "\147\x73\143\153\161\x79\x73\x6f\153\x75\155\x6b\167\161\163\161"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\157\143\157\x6d\155\x65\162\143\145\x5f\x61\x74\x74\162\151\142\165\164\145\137\164\141\x78\x6f\x6e\x6f\x6d\x69\145\x73\x5f\166\141\154\x75\x65\137\x74\x79\160\145\x73"), [self::DATE => __("\x44\141\164\x65", PR__CMN__FOUNDATION), self::NUMBER => __("\x4e\x75\155\x62\x65\x72", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\126\x61\154\x75\145\40\x74\171\160\145", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\x54\x79\x70\x65\40\157\x66\40\x76\141\x6c\x75\145\163", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto cmaemkmgukqugeow;
        qmukimkmkeagqocg:
        if (!is_array($oammesyieqmwuwyi)) {
            goto oyauiswikoukcyqy;
        }
        goto kgyqmwecomucoumg;
        gammgmwagsemkuua:
        oyauiswikoukcyqy:
        goto euuqcskgauwamyuw;
        kgyqmwecomucoumg:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto usukaqsqeowqkwwu;
            okieooymmiqqwsui:
            eeyukwscccmigmuq:
            goto wukeekgkakowukck;
            ukaumyigguemyqmg:
            if (!$mqeiemgcoiugcyuc) {
                goto weciiuggqamwweai;
            }
            goto mekmkiaykamiugmo;
            usukaqsqeowqkwwu:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\x61\x74\x74\162\151\x62\x75\x74\x65\137\x69\144");
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
                sqummycmewomisus:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto uaeqweeeyaoceeae;
                ismmoaqwqiyscccu:
                oqmwiucmyoiwciws:
                goto seymakqosammeimy;
                seymakqosammeimy:
            }
            goto okieooymmiqqwsui;
            komaikgkmaeoescu:
            gqaiosgasmiekmma:
            goto syeosgmcsoykgmoi;
            wwgssoakwoscwoss:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto komaikgkmaeoescu;
            syeosgmcsoykgmoi:
        }
        goto euekwowaokcqsgsw;
        euuqcskgauwamyuw:
        return $oammesyieqmwuwyi;
        goto qkqkgaaomgkyowwy;
        euekwowaokcqsgsw:
        kykgeuicqicmuucg:
        goto gammgmwagsemkuua;
        cmaemkmgukqugeow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qmukimkmkeagqocg;
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
            aumkeyeqwqukcyqm:
            wmgigiqsosicakwu:
            goto moaqsaoasisemagk;
            kyayieiyyyqgkcyc:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto wmgigiqsosicakwu;
            }
            goto uwaoaysiccasmygw;
            uwaoaysiccasmygw:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto okccyiwkococowmi;
            moaqsaoasisemagk:
            aiaagscmgeyuqaky:
            goto fauegywkmasowmki;
            okccyiwkococowmi:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto iquwggoqmwgkouio;
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
        useqkkasoyuoecio:
        if (!$wwgeaeqgacgwooqi) {
            goto uceqaououkceeiui;
        }
        goto kemqmaqgsgueoaye;
        wccugoogysmyisqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto eickccugyqkeaqqs;
            mkeikioeqcuumiga:
            iyiogqckuesmwgsi:
            goto gusqaksmckugmucc;
            koayqokgokmcaeou:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto owgquegaygweeuwq;
            owgquegaygweeuwq:
            akgikwguwgmkickm:
            goto mkeikioeqcuumiga;
            eickccugyqkeaqqs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto akgikwguwgmkickm;
            }
            goto wecqaqqeqaiwuqmc;
            wecqaqqeqaiwuqmc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto koayqokgokmcaeou;
            gusqaksmckugmucc:
        }
        goto eaqqgoagskioaooo;
        eaqqgoagskioaooo:
        gkaauyqyceyeasym:
        goto smwyssciamywmcwc;
        siymqewiegkgsuai:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\x65\x64\151\164");
        goto useqkkasoyuoecio;
        smwyssciamywmcwc:
        uceqaououkceeiui:
        goto ukyauawycqguowmk;
        kemqmaqgsgueoaye:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wccugoogysmyisqe;
        ukyauawycqguowmk:
    }
}

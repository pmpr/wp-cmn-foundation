<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const VALUE_TYPE = self::VALUE . "\137\164\x79\x70\x65";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto eiwsqkiauqoseceu;
        eiwsqkiauqoseceu:
        $this->name = "\x67\154\x6f\142\141\154";
        goto meuauqksicgeyqci;
        ycwuaycumimegeaw:
        parent::__construct();
        goto emcwccgymecyuwog;
        meuauqksicgeyqci:
        $this->model = Model::symcgieuakksimmu();
        goto ycwuaycumimegeaw;
        emcwccgymecyuwog:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\160\154\x75\147\151\156\163\x5f\x6c\x6f\x61\144\x65\x64", [$this, "\151\143\x77\143\147\155\x63\157\151\155\161\145\x69\147\171\145"])->qcsmikeggeemccuu("\167\x6f\x6f\143\x6f\155\155\145\x72\143\145\x5f\x61\x74\x74\162\x69\142\165\164\145\x5f\x75\x70\144\141\164\x65\x64", [$this, "\163\141\166\145"])->qcsmikeggeemccuu("\167\x6f\157\x63\x6f\155\x6d\145\162\143\145\x5f\141\146\164\x65\162\137\141\144\144\x5f\x61\x74\x74\x72\x69\142\165\x74\x65\137\x66\151\145\154\x64\x73", [$this, "\x69\151\163\x63\161\143\167\x61\151\143\145\157\x6b\x6f\171\x75"])->qcsmikeggeemccuu("\167\x6f\157\143\x6f\155\x6d\x65\162\143\x65\x5f\x61\146\x74\x65\162\x5f\145\x64\151\164\137\x61\164\x74\162\151\142\x75\164\145\137\146\151\145\x6c\x64\163", [$this, "\x67\x67\143\171\x67\141\171\x63\x6d\143\143\143\145\163\x77\x6f"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\157\x63\157\155\155\x65\x72\143\145\x5f\141\x74\x74\162\x69\142\165\x74\x65\137\x74\141\170\x6f\156\x6f\x6d\x69\145\x73", [$this, "\147\163\143\153\x71\171\x73\x6f\x6b\165\x6d\x6b\167\161\x73\x71"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\157\x63\157\155\x6d\x65\162\143\x65\x5f\x61\x74\164\x72\151\x62\x75\164\145\137\x74\141\x78\157\156\x6f\155\151\x65\163\137\x76\141\154\165\x65\137\164\171\x70\x65\163"), [self::DATE => __("\x44\141\164\x65", PR__CMN__FOUNDATION), self::NUMBER => __("\x4e\x75\x6d\x62\x65\x72", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\x56\x61\154\x75\145\40\164\x79\x70\145", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\124\171\160\x65\x20\157\146\x20\x76\141\x6c\x75\145\163", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto smuqqgosmeymscwo;
        gyyuyqcmmcsoemkc:
        return $oammesyieqmwuwyi;
        goto ukgemiyqimumoyoa;
        micgaswksmmkmgkq:
        if (!is_array($oammesyieqmwuwyi)) {
            goto ukkkayewayqiekce;
        }
        goto gqqeucaekwcskwqm;
        uegaqgayeaugeoim:
        ukkkayewayqiekce:
        goto gyyuyqcmmcsoemkc;
        ikaweoguqucoaegy:
        qcmugwqioeggciuq:
        goto uegaqgayeaugeoim;
        smuqqgosmeymscwo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto micgaswksmmkmgkq;
        gqqeucaekwcskwqm:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto kqwoqegwcaycwyou;
            umgmikwiqagosokm:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto ikiwqgmciageamia;
            ayqwqcgquogagmsc:
            gcsessaokiukkyig:
            goto cwcoqyuoyckuuios;
            cwcoqyuoyckuuios:
            gguissygssokqwso:
            goto umgmikwiqagosokm;
            guuosmqayokicema:
            if (!$mqeiemgcoiugcyuc) {
                goto gguissygssokqwso;
            }
            goto cagiyomyssauaquc;
            ikiwqgmciageamia:
            iimgquoiiseikqug:
            goto syaimiaogoukoqaa;
            cagiyomyssauaquc:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                goto okywiecqsoykqemk;
                okywiecqsoykqemk:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto acmmiiqmeggwcuis;
                ksugksoayiigqake:
                cyomuwaeeaimesos:
                goto mukqaqueesywqsuq;
                acmmiiqmeggwcuis:
                $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                goto ksugksoayiigqake;
                mukqaqueesywqsuq:
            }
            goto ayqwqcgquogagmsc;
            kqwoqegwcaycwyou:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\x61\164\164\x72\x69\x62\165\x74\145\x5f\x69\x64");
            goto guuosmqayokicema;
            syaimiaogoukoqaa:
        }
        goto ikaweoguqucoaegy;
        ukgemiyqimumoyoa:
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
            goto eggowcqiawiuwski;
            qkgoiusmuuaqwywu:
            zsscgecwckmocwqa:
            goto waiwugiowecgeeww;
            ouqgocoygmaiamou:
            $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            goto qaaymsuwqmigcoea;
            awgyiumgyeockqoa:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto ouqgocoygmaiamou;
            igkameomykgywamu:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto awgyiumgyeockqoa;
            eggowcqiawiuwski:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto weyuusiimkuykwca;
            }
            goto igkameomykgywamu;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            waiwugiowecgeeww:
        }
        miocgmmkkkksmisy:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc);
    }
    public function iiscqcwaiceokoyu()
    {
        goto wgawqekaeousiwwe;
        cuwwggakcukcesmy:
        oaoggiyikquikqmg:
        goto yukceuoyyusqyiak;
        wgawqekaeousiwwe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oewsmwkmgiiugcie;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus);
            awcqsekwccegiugq:
        }
        goto cuwwggakcukcesmy;
        yukceuoyyusqyiak:
    }
    public function ggcygaycmccceswo()
    {
        goto ewgmqmguwukoekoc;
        ewgmqmguwukoekoc:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\145\x64\151\x74");
        goto wakwsokmekawssyi;
        wakwsokmekawssyi:
        if (!$wwgeaeqgacgwooqi) {
            goto eckksscswgomeoqs;
        }
        goto okgaykwweumwcsyq;
        mmiukekqescmgkie:
        ywosowquuuociuio:
        goto agmcywmicucyeiig;
        okgaykwweumwcsyq:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qwuuagecegiqouig;
        qwuuagecegiqouig:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto msqawsuquouuugkc;
            imqikuakumuqamky:
            eeimccqyqieauwuk:
            goto myuwuwgiccywkiog;
            myuwuwgiccywkiog:
            gesseuyackqsekiy:
            goto ackiyyoociyuiaio;
            kaacyyeegamkqkak:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto uaqeuukkceomqisi;
            msqawsuquouuugkc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eeimccqyqieauwuk;
            }
            goto kaacyyeegamkqkak;
            uaqeuukkceomqisi:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto imqikuakumuqamky;
            ackiyyoociyuiaio:
        }
        goto mmiukekqescmgkie;
        agmcywmicucyeiig:
        eckksscswgomeoqs:
        goto miuwoyekioyugegk;
        miuwoyekioyugegk:
    }
}

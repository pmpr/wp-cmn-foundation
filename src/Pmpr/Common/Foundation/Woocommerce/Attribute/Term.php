<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Term extends Common
{
    const SHOW_ON_LIST = "\x73\150\157\x77\55\157\156\55\x6c\151\x73\x74";
    
    protected array $fields = [];
    
    protected $taxonomy = null;
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function yyoeeseewqmmyaee()
    {
        return $this->taxonomy;
    }
    
    public function __construct($kesssewsiegssiya)
    {
        goto meuauqksicgeyqci;
        cyomuwaeeaimesos:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\x63\157\x6d\x6d\145\x72\x63\145\x5f\x70\x72\x6f\x64\x75\x63\164\137\164\141\x78\157\x6e\157\x6d\x79\137{$this->kuaoscooeuayycye()}\137\143\165\163\x74\x6f\x6d\137\146\151\145\x6c\x64\163"), $ikgwqyuyckaewsow);
        goto okywiecqsoykqemk;
        iimgquoiiseikqug:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\126\x61\154\165\x65", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\x20\x61\x74\164\x72\151\142\x75\x74\x65\40\x69\163\x20\x61\x20\156\165\x6d\142\x65\x72\x20\x66\151\x65\x6c\144\54\40\146\151\154\x6c\x20\x74\150\151\x73\40\x66\x69\145\x6c\144\x20\164\x6f\x6f\56", PR__CMN__FOUNDATION)));
        goto gcsessaokiukkyig;
        gcsessaokiukkyig:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\157\x63\157\155\x6d\145\162\143\x65\x5f\x70\x72\x6f\x64\x75\x63\x74\137\x74\x61\x78\x6f\x6e\x6f\155\x79\x5f\143\x75\x73\164\x6f\155\137\x66\151\145\154\x64\163"), $this->ugmceccgwaaaigiy());
        goto cyomuwaeeaimesos;
        meuauqksicgeyqci:
        $this->taxonomy = $kesssewsiegssiya;
        goto ycwuaycumimegeaw;
        qcmugwqioeggciuq:
        eiwsqkiauqoseceu:
        goto iimgquoiiseikqug;
        okywiecqsoykqemk:
        parent::__construct();
        goto acmmiiqmeggwcuis;
        emcwccgymecyuwog:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\x64\141\x74\x65\137\x74\x79\160\145", __("\x44\x61\164\145\x20\x54\171\x70\x65", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\x65\143\157\x6e\144\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\115\151\x6e\165\x74\x65\x73", PR__CMN__FOUNDATION), self::HOUR => __("\115\151\156\x75\164\x65\x73", PR__CMN__FOUNDATION), self::DAY => __("\104\x61\x79\163", PR__CMN__FOUNDATION), self::WEEK => __("\127\x65\145\x6b\163", PR__CMN__FOUNDATION), self::MONTH => __("\115\x6f\x6e\164\150\163", PR__CMN__FOUNDATION), self::YEAR => __("\x59\x65\141\x72\x73", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto qcmugwqioeggciuq;
        ycwuaycumimegeaw:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\166\141\154\x75\145\x5f\x74\171\x70\145") === self::DATE)) {
            goto eiwsqkiauqoseceu;
        }
        goto emcwccgymecyuwog;
        acmmiiqmeggwcuis:
    }
    public function wigskegsqequoeks()
    {
        goto ksugksoayiigqake;
        mukqaqueesywqsuq:
        $this->qcsmikeggeemccuu("\x65\x64\151\x74\137\164\145\x72\x6d", [$this, "\157\145\167\x79\167\141\x6d\x6f\x71\x65\x69\151\x67\x61\x67\x73"], 10, 3)->qcsmikeggeemccuu("\143\162\x65\x61\x74\x65\x64\137\164\x65\x72\x6d", [$this, "\157\145\x77\x79\x77\x61\155\x6f\161\145\151\151\x67\x61\x67\163"], 10, 3)->qcsmikeggeemccuu("\x64\145\154\145\x74\x65\137\164\x65\x72\155", [$this, "\x73\x6d\x67\171\143\141\x73\141\x71\155\147\x63\x61\145\x6b\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\141\144\x64\137\x66\x6f\162\x6d\x5f\x66\151\145\x6c\144\x73", [$this, "\141\x64\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\145\144\x69\164\137\x66\157\x72\x6d\x5f\146\151\145\x6c\x64\163", [$this, "\167\x77\147\145\x61\x65\161\147\x61\143\x67\x77\x6f\x6f\x71\x69"])->qcsmikeggeemccuu("\x6d\x61\156\141\x67\145\137{$ymqmyyeuycgmigyo}\137\x63\165\x73\164\x6f\x6d\x5f\143\157\154\x75\x6d\x6e", [$this, "\x75\157\x61\x6f\x75\x65\x73\167\x77\167\155\x69\x77\x77\x71\163"], 10, 3);
        goto gguissygssokqwso;
        gguissygssokqwso:
        parent::wigskegsqequoeks();
        goto kqwoqegwcaycwyou;
        ksugksoayiigqake:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto mukqaqueesywqsuq;
        kqwoqegwcaycwyou:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\155\141\x6e\141\x67\x65\x5f\x65\x64\151\164\x2d{$this->kuaoscooeuayycye()}\x5f\143\x6f\154\165\155\x6e\163", [$this, "\x65\147\x67\x65\143\165\x75\x77\x79\153\141\141\167\x6f\x71\x77"]);
        parent::kgquecmsgcouyaya();
    }
    public function add()
    {
        $this->iuaucuookgoqiiio();
    }
    
    public function wwgeaeqgacgwooqi($iwewcwusemqaiggk)
    {
        $this->iuaucuookgoqiiio($iwewcwusemqaiggk);
    }
    
    public function kuaoscooeuayycye() : string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\141\x74\164\162\x69\x62\165\164\145\137\156\141\155\x65"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto smuqqgosmeymscwo;
        micgaswksmmkmgkq:
        guuosmqayokicema:
        goto gqqeucaekwcskwqm;
        gqqeucaekwcskwqm:
        return $wkkweuacukumqmya;
        goto ikaweoguqucoaegy;
        smuqqgosmeymscwo:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto cwcoqyuoyckuuios;
            umgmikwiqagosokm:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto ikiwqgmciageamia;
            cwcoqyuoyckuuios:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto ayqwqcgquogagmsc;
            }
            goto umgmikwiqagosokm;
            syaimiaogoukoqaa:
            cagiyomyssauaquc:
            goto ukkkayewayqiekce;
            ikiwqgmciageamia:
            ayqwqcgquogagmsc:
            goto syaimiaogoukoqaa;
            ukkkayewayqiekce:
        }
        goto micgaswksmmkmgkq;
        ikaweoguqucoaegy:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto waiwugiowecgeeww;
        awcqsekwccegiugq:
        uegaqgayeaugeoim:
        goto wgawqekaeousiwwe;
        waiwugiowecgeeww:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oaoggiyikquikqmg;
        oaoggiyikquikqmg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto zsscgecwckmocwqa;
            zsscgecwckmocwqa:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto miocgmmkkkksmisy;
            }
            goto weyuusiimkuykwca;
            igkameomykgywamu:
            ukgemiyqimumoyoa:
            goto awgyiumgyeockqoa;
            eggowcqiawiuwski:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto igkameomykgywamu;
            ouqgocoygmaiamou:
            miocgmmkkkksmisy:
            goto qaaymsuwqmigcoea;
            awgyiumgyeockqoa:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto ouqgocoygmaiamou;
            qaaymsuwqmigcoea:
            gyyuyqcmmcsoemkc:
            goto qkgoiusmuuaqwywu;
            weyuusiimkuykwca:
            if (!$iwewcwusemqaiggk) {
                goto ukgemiyqimumoyoa;
            }
            goto eggowcqiawiuwski;
            qkgoiusmuuaqwywu:
        }
        goto awcqsekwccegiugq;
        wgawqekaeousiwwe:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto ewgmqmguwukoekoc;
        ewgmqmguwukoekoc:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto eckksscswgomeoqs;
        }
        goto wakwsokmekawssyi;
        wakwsokmekawssyi:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto gesseuyackqsekiy;
            imqikuakumuqamky:
            ywosowquuuociuio:
            goto myuwuwgiccywkiog;
            myuwuwgiccywkiog:
            cuwwggakcukcesmy:
            goto ackiyyoociyuiaio;
            msqawsuquouuugkc:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto yukceuoyyusqyiak;
            }
            goto kaacyyeegamkqkak;
            eeimccqyqieauwuk:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto msqawsuquouuugkc;
            uaqeuukkceomqisi:
            yukceuoyyusqyiak:
            goto imqikuakumuqamky;
            gesseuyackqsekiy:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ywosowquuuociuio;
            }
            goto eeimccqyqieauwuk;
            kaacyyeegamkqkak:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto uaqeuukkceomqisi;
            ackiyyoociyuiaio:
        }
        goto okgaykwweumwcsyq;
        okgaykwweumwcsyq:
        oewsmwkmgiiugcie:
        goto qwuuagecegiqouig;
        qwuuagecegiqouig:
        eckksscswgomeoqs:
        goto mmiukekqescmgkie;
        mmiukekqescmgkie:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto uoowsoawqkggioeo;
        uoowsoawqkggioeo:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto miuwoyekioyugegk;
        }
        goto lwkkgmcgkowgygcs;
        ickoqwmqsgowyscy:
        agmcywmicucyeiig:
        goto cwgsuaukyieoswoq;
        ueyqgegieiwkocck:
        if (!$mceokigoiqekskwe) {
            goto agmcywmicucyeiig;
        }
        goto yukscyeaqukseeim;
        lwkkgmcgkowgygcs:
        global $wpdb;
        goto ueyqgegieiwkocck;
        cwgsuaukyieoswoq:
        miuwoyekioyugegk:
        goto uwoawkimmaqcwqcq;
        yukscyeaqukseeim:
        $wpdb->delete($wpdb->termmeta, ["\164\145\162\155\x5f\x69\x64" => $mceokigoiqekskwe], ["\x25\144"]);
        goto ickoqwmqsgowyscy;
        uwoawkimmaqcwqcq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}

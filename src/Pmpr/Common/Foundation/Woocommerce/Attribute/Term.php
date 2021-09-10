<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const SHOW_ON_LIST = "\163\x68\157\167\55\157\156\55\x6c\151\163\164";
    
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
        goto qcmugwqioeggciuq;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\157\143\x6f\x6d\x6d\x65\162\x63\x65\137\x70\x72\157\x64\165\x63\x74\x5f\164\141\x78\157\x6e\x6f\155\x79\x5f\143\165\163\x74\157\155\137\x66\x69\x65\x6c\x64\x73"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        iimgquoiiseikqug:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\166\x61\154\x75\145\137\x74\171\x70\x65") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\x64\141\164\145\137\164\171\160\x65", __("\x44\141\x74\145\x20\x54\171\160\145", PR__CMN__FOUNDATION), [self::SECOND => __("\123\x65\143\157\156\x64\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\x4d\x69\156\x75\164\x65\163", PR__CMN__FOUNDATION), self::HOUR => __("\x4d\151\x6e\x75\x74\x65\163", PR__CMN__FOUNDATION), self::DAY => __("\x44\141\171\163", PR__CMN__FOUNDATION), self::WEEK => __("\127\145\x65\x6b\163", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\157\x6e\x74\150\x73", PR__CMN__FOUNDATION), self::YEAR => __("\131\x65\141\x72\163", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\x56\141\x6c\165\x65", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\146\40\x61\x74\164\162\151\142\165\164\x65\x20\x69\163\40\141\x20\x6e\165\155\x62\x65\x72\40\146\151\145\154\144\x2c\x20\146\x69\x6c\x6c\40\164\150\x69\x73\x20\146\x69\145\x6c\x64\x20\164\x6f\x6f\56", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\x6f\143\x6f\x6d\155\145\162\x63\145\137\x70\162\157\x64\x75\143\164\x5f\x74\x61\x78\157\x6e\157\155\171\137{$this->kuaoscooeuayycye()}\x5f\x63\165\x73\x74\157\155\x5f\x66\151\x65\154\144\163"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        cagiyomyssauaquc:
        parent::wigskegsqequoeks();
        goto ayqwqcgquogagmsc;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\x65\144\x69\x74\x5f\164\145\x72\x6d", [$this, "\157\x65\167\x79\167\141\x6d\x6f\x71\x65\x69\x69\x67\x61\x67\163"], 10, 3)->qcsmikeggeemccuu("\143\x72\x65\141\x74\x65\x64\137\x74\x65\162\x6d", [$this, "\157\145\x77\x79\167\x61\x6d\157\x71\145\151\x69\147\x61\x67\163"], 10, 3)->qcsmikeggeemccuu("\144\x65\x6c\145\164\145\x5f\164\x65\x72\155", [$this, "\163\155\147\x79\x63\x61\163\x61\161\155\147\143\x61\145\x6b\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\144\144\x5f\146\157\x72\x6d\137\146\x69\145\154\x64\163", [$this, "\141\x64\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\144\x69\x74\x5f\146\x6f\x72\155\x5f\146\x69\145\x6c\x64\x73", [$this, "\167\167\x67\x65\x61\x65\x71\147\141\x63\147\167\157\x6f\x71\x69"])->qcsmikeggeemccuu("\155\141\156\141\147\145\137{$ymqmyyeuycgmigyo}\137\x63\x75\163\x74\157\155\x5f\143\157\x6c\x75\x6d\x6e", [$this, "\165\157\x61\157\x75\145\x73\167\x77\x77\x6d\x69\167\x77\x71\x73"], 10, 3);
        goto cagiyomyssauaquc;
        kqwoqegwcaycwyou:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto guuosmqayokicema;
        ayqwqcgquogagmsc:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\155\141\x6e\141\x67\145\137\x65\x64\151\x74\55{$this->kuaoscooeuayycye()}\x5f\143\157\154\165\155\156\163", [$this, "\145\x67\147\x65\143\x75\x75\167\x79\x6b\x61\x61\167\x6f\x71\x77"]);
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
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\141\164\164\x72\151\x62\165\x74\145\137\156\x61\x6d\145"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto ikaweoguqucoaegy;
        gyyuyqcmmcsoemkc:
        return $wkkweuacukumqmya;
        goto ukgemiyqimumoyoa;
        uegaqgayeaugeoim:
        cwcoqyuoyckuuios:
        goto gyyuyqcmmcsoemkc;
        ikaweoguqucoaegy:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto syaimiaogoukoqaa;
            ukkkayewayqiekce:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto smuqqgosmeymscwo;
            syaimiaogoukoqaa:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto ikiwqgmciageamia;
            }
            goto ukkkayewayqiekce;
            micgaswksmmkmgkq:
            umgmikwiqagosokm:
            goto gqqeucaekwcskwqm;
            smuqqgosmeymscwo:
            ikiwqgmciageamia:
            goto micgaswksmmkmgkq;
            gqqeucaekwcskwqm:
        }
        goto uegaqgayeaugeoim;
        ukgemiyqimumoyoa:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto wgawqekaeousiwwe;
        wgawqekaeousiwwe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oewsmwkmgiiugcie;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto igkameomykgywamu;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            oaoggiyikquikqmg:
            zsscgecwckmocwqa:
            goto awcqsekwccegiugq;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            igkameomykgywamu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eggowcqiawiuwski;
            }
            goto awgyiumgyeockqoa;
            awgyiumgyeockqoa:
            if (!$iwewcwusemqaiggk) {
                goto weyuusiimkuykwca;
            }
            goto ouqgocoygmaiamou;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
            awcqsekwccegiugq:
        }
        goto cuwwggakcukcesmy;
        cuwwggakcukcesmy:
        miocgmmkkkksmisy:
        goto yukceuoyyusqyiak;
        yukceuoyyusqyiak:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto qwuuagecegiqouig;
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        qwuuagecegiqouig:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto okgaykwweumwcsyq;
        }
        goto mmiukekqescmgkie;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            eckksscswgomeoqs:
            msqawsuquouuugkc:
            goto ewgmqmguwukoekoc;
            imqikuakumuqamky:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto eeimccqyqieauwuk;
            }
            goto myuwuwgiccywkiog;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            ewgmqmguwukoekoc:
            gesseuyackqsekiy:
            goto wakwsokmekawssyi;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
            ackiyyoociyuiaio:
            eeimccqyqieauwuk:
            goto eckksscswgomeoqs;
            kaacyyeegamkqkak:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msqawsuquouuugkc;
            }
            goto uaqeuukkceomqisi;
            wakwsokmekawssyi:
        }
        goto agmcywmicucyeiig;
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\x74\x65\x72\155\137\x69\x64" => $mceokigoiqekskwe], ["\45\x64"]);
        goto ayuwgkkummcqqesk;
        ayuwgkkummcqqesk:
        lwkkgmcgkowgygcs:
        goto eqgkqikoqkaiuocm;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        mouaeysyaawwqsmq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}

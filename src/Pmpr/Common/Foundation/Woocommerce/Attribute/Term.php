<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const SHOW_ON_LIST = "\163\150\157\x77\x2d\x6f\x6e\55\x6c\151\x73\164";
    
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
        iimgquoiiseikqug:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\x76\x61\x6c\165\x65\x5f\x74\171\160\145") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\x64\141\x74\x65\x5f\x74\x79\x70\x65", __("\x44\141\164\145\40\124\x79\x70\145", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\x65\x63\157\x6e\144\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\x4d\x69\156\165\164\145\x73", PR__CMN__FOUNDATION), self::HOUR => __("\x4d\151\156\165\164\x65\x73", PR__CMN__FOUNDATION), self::DAY => __("\104\141\x79\x73", PR__CMN__FOUNDATION), self::WEEK => __("\127\x65\145\153\163", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\157\156\x74\x68\x73", PR__CMN__FOUNDATION), self::YEAR => __("\131\145\141\x72\163", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\x5f\160\x72\157\144\165\x63\x74\x5f\164\141\170\157\156\x6f\x6d\171\137\143\165\x73\x74\x6f\x6d\x5f\146\151\x65\154\144\163"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\x6f\143\157\155\155\x65\162\x63\x65\x5f\x70\x72\157\144\165\143\164\x5f\164\x61\x78\x6f\156\157\x6d\x79\x5f{$this->kuaoscooeuayycye()}\137\143\x75\x73\164\x6f\x6d\137\x66\x69\x65\x6c\x64\163"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\x56\x61\x6c\x75\x65", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\x20\x61\164\164\x72\151\x62\x75\x74\145\x20\x69\163\40\141\x20\156\165\x6d\x62\x65\x72\x20\146\151\x65\x6c\144\54\40\146\151\x6c\154\x20\x74\150\151\163\40\146\151\145\x6c\144\x20\164\x6f\x6f\x2e", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\x65\144\x69\x74\137\x74\145\x72\155", [$this, "\157\x65\x77\x79\x77\x61\x6d\x6f\x71\x65\x69\x69\147\x61\147\163"], 10, 3)->qcsmikeggeemccuu("\143\162\145\x61\x74\145\144\137\x74\x65\162\155", [$this, "\x6f\x65\x77\171\167\x61\x6d\157\161\x65\151\x69\x67\141\147\163"], 10, 3)->qcsmikeggeemccuu("\144\x65\x6c\145\164\145\137\164\x65\x72\x6d", [$this, "\x73\155\x67\x79\x63\x61\163\x61\x71\155\x67\143\x61\145\x6b\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x61\x64\144\x5f\146\x6f\x72\x6d\x5f\146\151\x65\x6c\144\163", [$this, "\x61\144\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x65\144\151\164\x5f\146\x6f\x72\155\137\x66\151\145\x6c\x64\163", [$this, "\167\167\x67\145\141\x65\161\x67\x61\143\x67\167\x6f\x6f\x71\151"])->qcsmikeggeemccuu("\155\141\156\x61\147\145\137{$ymqmyyeuycgmigyo}\137\143\165\163\x74\x6f\x6d\137\x63\x6f\x6c\165\155\156", [$this, "\x75\157\141\157\165\145\163\x77\167\167\x6d\151\x77\167\x71\x73"], 10, 3);
        goto cagiyomyssauaquc;
        kqwoqegwcaycwyou:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto guuosmqayokicema;
        cagiyomyssauaquc:
        parent::wigskegsqequoeks();
        goto ayqwqcgquogagmsc;
        ayqwqcgquogagmsc:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x6d\141\156\141\147\145\137\x65\144\151\x74\x2d{$this->kuaoscooeuayycye()}\137\x63\157\x6c\165\155\x6e\163", [$this, "\145\x67\147\x65\x63\x75\x75\167\x79\153\141\x61\x77\157\x71\x77"]);
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
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\x61\164\x74\162\151\x62\165\164\145\x5f\156\141\155\145"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto ikaweoguqucoaegy;
        uegaqgayeaugeoim:
        cwcoqyuoyckuuios:
        goto gyyuyqcmmcsoemkc;
        ikaweoguqucoaegy:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto syaimiaogoukoqaa;
            smuqqgosmeymscwo:
            ikiwqgmciageamia:
            goto micgaswksmmkmgkq;
            syaimiaogoukoqaa:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto ikiwqgmciageamia;
            }
            goto ukkkayewayqiekce;
            micgaswksmmkmgkq:
            umgmikwiqagosokm:
            goto gqqeucaekwcskwqm;
            ukkkayewayqiekce:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto smuqqgosmeymscwo;
            gqqeucaekwcskwqm:
        }
        goto uegaqgayeaugeoim;
        gyyuyqcmmcsoemkc:
        return $wkkweuacukumqmya;
        goto ukgemiyqimumoyoa;
        ukgemiyqimumoyoa:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto wgawqekaeousiwwe;
        wgawqekaeousiwwe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oewsmwkmgiiugcie;
        cuwwggakcukcesmy:
        miocgmmkkkksmisy:
        goto yukceuoyyusqyiak;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto igkameomykgywamu;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            igkameomykgywamu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eggowcqiawiuwski;
            }
            goto awgyiumgyeockqoa;
            oaoggiyikquikqmg:
            zsscgecwckmocwqa:
            goto awcqsekwccegiugq;
            awgyiumgyeockqoa:
            if (!$iwewcwusemqaiggk) {
                goto weyuusiimkuykwca;
            }
            goto ouqgocoygmaiamou;
            awcqsekwccegiugq:
        }
        goto cuwwggakcukcesmy;
        yukceuoyyusqyiak:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto qwuuagecegiqouig;
        qwuuagecegiqouig:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto okgaykwweumwcsyq;
        }
        goto mmiukekqescmgkie;
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            ewgmqmguwukoekoc:
            gesseuyackqsekiy:
            goto wakwsokmekawssyi;
            kaacyyeegamkqkak:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msqawsuquouuugkc;
            }
            goto uaqeuukkceomqisi;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
            imqikuakumuqamky:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto eeimccqyqieauwuk;
            }
            goto myuwuwgiccywkiog;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            ackiyyoociyuiaio:
            eeimccqyqieauwuk:
            goto eckksscswgomeoqs;
            eckksscswgomeoqs:
            msqawsuquouuugkc:
            goto ewgmqmguwukoekoc;
            wakwsokmekawssyi:
        }
        goto agmcywmicucyeiig;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\x74\145\x72\x6d\137\x69\144" => $mceokigoiqekskwe], ["\x25\144"]);
        goto ayuwgkkummcqqesk;
        ayuwgkkummcqqesk:
        lwkkgmcgkowgygcs:
        goto eqgkqikoqkaiuocm;
        mouaeysyaawwqsmq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}

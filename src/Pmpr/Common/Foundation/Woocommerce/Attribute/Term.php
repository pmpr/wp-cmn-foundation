<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const SHOW_ON_LIST = "\x73\x68\157\167\55\157\x6e\55\x6c\151\x73\x74";
    
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
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\x6f\x63\157\x6d\155\145\x72\143\145\x5f\x70\162\x6f\x64\x75\x63\x74\x5f\x74\x61\170\157\156\157\x6d\171\137{$this->kuaoscooeuayycye()}\137\x63\165\163\164\157\x6d\137\x66\x69\x65\154\144\163"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\x64\x61\164\145\x5f\x74\171\x70\x65", __("\x44\141\164\x65\40\124\x79\160\x65", PR__CMN__FOUNDATION), [self::SECOND => __("\123\145\x63\x6f\156\144\163", PR__CMN__FOUNDATION), self::MINUTE => __("\115\x69\x6e\165\164\145\x73", PR__CMN__FOUNDATION), self::HOUR => __("\115\151\x6e\x75\x74\x65\x73", PR__CMN__FOUNDATION), self::DAY => __("\104\x61\x79\163", PR__CMN__FOUNDATION), self::WEEK => __("\127\x65\145\x6b\x73", PR__CMN__FOUNDATION), self::MONTH => __("\115\x6f\156\x74\x68\163", PR__CMN__FOUNDATION), self::YEAR => __("\x59\145\141\x72\163", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\x6f\143\157\x6d\155\x65\x72\x63\145\137\160\x72\157\x64\165\143\x74\137\x74\x61\x78\157\156\x6f\155\x79\137\143\165\163\x74\157\x6d\137\146\151\x65\154\x64\x73"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        iimgquoiiseikqug:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\x76\x61\x6c\165\145\x5f\x74\171\160\x65") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\126\x61\154\165\x65", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\40\141\164\x74\x72\151\142\165\164\x65\40\x69\163\x20\141\40\156\165\155\x62\x65\162\40\146\x69\x65\x6c\144\54\x20\x66\x69\x6c\x6c\x20\164\150\x69\x73\x20\x66\151\x65\154\144\40\x74\157\x6f\x2e", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        kqwoqegwcaycwyou:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto guuosmqayokicema;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\145\x64\x69\164\x5f\164\x65\x72\x6d", [$this, "\157\145\x77\171\167\141\155\x6f\x71\x65\151\151\147\141\x67\x73"], 10, 3)->qcsmikeggeemccuu("\x63\x72\x65\141\x74\145\144\x5f\164\x65\162\155", [$this, "\x6f\145\x77\171\167\x61\155\157\x71\145\x69\151\147\x61\x67\163"], 10, 3)->qcsmikeggeemccuu("\x64\x65\x6c\x65\x74\x65\x5f\164\145\162\155", [$this, "\x73\155\x67\x79\143\x61\163\x61\161\155\147\x63\141\145\x6b\161"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\141\x64\144\x5f\x66\157\162\x6d\137\146\x69\x65\154\x64\x73", [$this, "\x61\144\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x65\144\x69\x74\x5f\146\157\162\155\137\146\x69\x65\x6c\144\163", [$this, "\x77\x77\x67\x65\141\x65\x71\x67\x61\143\147\167\157\x6f\161\x69"])->qcsmikeggeemccuu("\x6d\141\x6e\141\x67\145\x5f{$ymqmyyeuycgmigyo}\137\x63\165\163\164\x6f\155\137\143\x6f\154\165\x6d\x6e", [$this, "\x75\x6f\141\157\165\145\x73\167\167\x77\155\151\167\x77\x71\163"], 10, 3);
        goto cagiyomyssauaquc;
        cagiyomyssauaquc:
        parent::wigskegsqequoeks();
        goto ayqwqcgquogagmsc;
        ayqwqcgquogagmsc:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\155\141\156\141\x67\145\x5f\x65\144\x69\164\x2d{$this->kuaoscooeuayycye()}\x5f\143\157\x6c\x75\x6d\x6e\163", [$this, "\145\x67\147\x65\x63\165\165\167\171\153\x61\x61\167\157\x71\167"]);
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
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\x61\x74\x74\x72\x69\x62\x75\164\145\137\156\x61\155\x65"));
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
            micgaswksmmkmgkq:
            umgmikwiqagosokm:
            goto gqqeucaekwcskwqm;
            ukkkayewayqiekce:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto smuqqgosmeymscwo;
            syaimiaogoukoqaa:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto ikiwqgmciageamia;
            }
            goto ukkkayewayqiekce;
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
        cuwwggakcukcesmy:
        miocgmmkkkksmisy:
        goto yukceuoyyusqyiak;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto igkameomykgywamu;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            oaoggiyikquikqmg:
            zsscgecwckmocwqa:
            goto awcqsekwccegiugq;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
            awgyiumgyeockqoa:
            if (!$iwewcwusemqaiggk) {
                goto weyuusiimkuykwca;
            }
            goto ouqgocoygmaiamou;
            igkameomykgywamu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eggowcqiawiuwski;
            }
            goto awgyiumgyeockqoa;
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
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            imqikuakumuqamky:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto eeimccqyqieauwuk;
            }
            goto myuwuwgiccywkiog;
            ackiyyoociyuiaio:
            eeimccqyqieauwuk:
            goto eckksscswgomeoqs;
            kaacyyeegamkqkak:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msqawsuquouuugkc;
            }
            goto uaqeuukkceomqisi;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
            ewgmqmguwukoekoc:
            gesseuyackqsekiy:
            goto wakwsokmekawssyi;
            eckksscswgomeoqs:
            msqawsuquouuugkc:
            goto ewgmqmguwukoekoc;
            wakwsokmekawssyi:
        }
        goto agmcywmicucyeiig;
        qwuuagecegiqouig:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto okgaykwweumwcsyq;
        }
        goto mmiukekqescmgkie;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        ayuwgkkummcqqesk:
        lwkkgmcgkowgygcs:
        goto eqgkqikoqkaiuocm;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\164\145\x72\x6d\137\x69\144" => $mceokigoiqekskwe], ["\x25\144"]);
        goto ayuwgkkummcqqesk;
        mouaeysyaawwqsmq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}

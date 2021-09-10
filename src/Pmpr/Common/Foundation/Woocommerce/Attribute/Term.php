<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const SHOW_ON_LIST = "\x73\150\157\x77\55\x6f\x6e\x2d\x6c\x69\x73\164";
    
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
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\157\143\157\155\155\x65\162\x63\x65\137\x70\x72\157\x64\165\x63\x74\x5f\x74\141\170\x6f\156\157\155\171\137{$this->kuaoscooeuayycye()}\137\x63\165\163\x74\x6f\x6d\x5f\x66\x69\145\154\x64\163"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\x63\x6f\155\x6d\x65\162\x63\145\137\160\162\x6f\144\165\143\164\x5f\164\141\x78\157\156\x6f\x6d\x79\x5f\x63\165\163\x74\x6f\x6d\x5f\146\151\x65\154\x64\163"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\144\141\x74\x65\x5f\164\x79\x70\x65", __("\x44\x61\x74\145\x20\x54\171\160\145", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\145\143\x6f\x6e\144\163", PR__CMN__FOUNDATION), self::MINUTE => __("\115\x69\x6e\165\164\145\x73", PR__CMN__FOUNDATION), self::HOUR => __("\115\151\156\x75\164\145\163", PR__CMN__FOUNDATION), self::DAY => __("\x44\x61\171\x73", PR__CMN__FOUNDATION), self::WEEK => __("\x57\145\145\153\163", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\157\x6e\164\x68\163", PR__CMN__FOUNDATION), self::YEAR => __("\x59\x65\x61\162\x73", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        iimgquoiiseikqug:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\x76\141\x6c\x75\x65\x5f\x74\x79\x70\145") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\x56\141\154\165\145", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\146\40\141\164\164\x72\151\x62\x75\164\x65\40\151\163\40\x61\40\156\x75\155\x62\145\x72\x20\146\x69\145\154\144\54\x20\x66\x69\154\154\40\164\150\151\163\x20\146\151\145\x6c\x64\x20\164\157\157\x2e", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\x65\x64\x69\x74\137\164\x65\162\155", [$this, "\157\x65\x77\x79\x77\141\x6d\x6f\161\145\151\151\147\141\147\x73"], 10, 3)->qcsmikeggeemccuu("\143\x72\x65\x61\x74\145\x64\137\164\145\162\155", [$this, "\x6f\145\167\x79\x77\x61\155\x6f\x71\x65\151\151\x67\141\147\x73"], 10, 3)->qcsmikeggeemccuu("\x64\145\154\x65\x74\145\x5f\164\x65\162\155", [$this, "\x73\155\x67\x79\143\x61\x73\141\x71\155\147\x63\141\x65\x6b\161"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\x64\x64\x5f\x66\x6f\162\155\x5f\x66\151\145\x6c\144\163", [$this, "\x61\144\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\x64\151\164\x5f\x66\x6f\x72\155\x5f\146\151\145\154\144\x73", [$this, "\x77\x77\x67\145\141\x65\x71\147\x61\143\x67\167\x6f\x6f\x71\x69"])->qcsmikeggeemccuu("\x6d\x61\156\x61\x67\145\137{$ymqmyyeuycgmigyo}\137\x63\x75\x73\164\x6f\155\x5f\x63\x6f\x6c\x75\155\x6e", [$this, "\165\157\x61\157\165\145\x73\167\x77\x77\155\151\167\167\x71\x73"], 10, 3);
        goto cagiyomyssauaquc;
        cagiyomyssauaquc:
        parent::wigskegsqequoeks();
        goto ayqwqcgquogagmsc;
        kqwoqegwcaycwyou:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto guuosmqayokicema;
        ayqwqcgquogagmsc:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\155\x61\156\x61\x67\x65\137\x65\144\151\x74\x2d{$this->kuaoscooeuayycye()}\137\x63\157\x6c\x75\x6d\156\x73", [$this, "\x65\x67\147\145\143\x75\165\x77\171\x6b\x61\x61\167\x6f\161\x77"]);
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
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\141\x74\x74\162\151\142\x75\164\x65\137\x6e\141\155\145"));
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
            smuqqgosmeymscwo:
            ikiwqgmciageamia:
            goto micgaswksmmkmgkq;
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
            gqqeucaekwcskwqm:
        }
        goto uegaqgayeaugeoim;
        ukgemiyqimumoyoa:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto wgawqekaeousiwwe;
        oewsmwkmgiiugcie:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto igkameomykgywamu;
            igkameomykgywamu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eggowcqiawiuwski;
            }
            goto awgyiumgyeockqoa;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
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
        cuwwggakcukcesmy:
        miocgmmkkkksmisy:
        goto yukceuoyyusqyiak;
        wgawqekaeousiwwe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oewsmwkmgiiugcie;
        yukceuoyyusqyiak:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto qwuuagecegiqouig;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            ackiyyoociyuiaio:
            eeimccqyqieauwuk:
            goto eckksscswgomeoqs;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            imqikuakumuqamky:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto eeimccqyqieauwuk;
            }
            goto myuwuwgiccywkiog;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
            kaacyyeegamkqkak:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msqawsuquouuugkc;
            }
            goto uaqeuukkceomqisi;
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
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\x74\145\x72\155\x5f\151\x64" => $mceokigoiqekskwe], ["\x25\x64"]);
        goto ayuwgkkummcqqesk;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
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

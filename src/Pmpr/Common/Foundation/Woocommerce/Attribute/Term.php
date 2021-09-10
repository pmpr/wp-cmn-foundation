<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const SHOW_ON_LIST = "\163\x68\157\x77\55\x6f\x6e\55\x6c\151\x73\164";
    
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
        if (!(ManipulateArray::get($kesssewsiegssiya, "\166\141\x6c\x75\145\137\x74\x79\x70\x65") === self::DATE)) {
            goto emcwccgymecyuwog;
        }
        goto gcsessaokiukkyig;
        ksugksoayiigqake:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\x6f\x63\x6f\x6d\x6d\x65\x72\x63\145\x5f\x70\162\157\144\165\x63\x74\137\x74\141\x78\x6f\x6e\157\x6d\171\137{$this->kuaoscooeuayycye()}\137\x63\165\x73\x74\x6f\x6d\x5f\x66\151\145\154\144\163"), $ikgwqyuyckaewsow);
        goto mukqaqueesywqsuq;
        qcmugwqioeggciuq:
        $this->taxonomy = $kesssewsiegssiya;
        goto iimgquoiiseikqug;
        mukqaqueesywqsuq:
        parent::__construct();
        goto gguissygssokqwso;
        cyomuwaeeaimesos:
        emcwccgymecyuwog:
        goto okywiecqsoykqemk;
        okywiecqsoykqemk:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\126\x61\154\x75\145", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\x20\141\164\x74\x72\151\x62\x75\164\x65\40\x69\163\40\141\40\x6e\165\x6d\142\145\x72\x20\x66\x69\x65\x6c\144\x2c\x20\146\x69\x6c\x6c\40\x74\x68\151\163\x20\x66\x69\145\154\x64\x20\164\x6f\x6f\56", PR__CMN__FOUNDATION)));
        goto acmmiiqmeggwcuis;
        acmmiiqmeggwcuis:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\x63\157\x6d\x6d\145\162\143\x65\x5f\160\162\x6f\144\165\x63\164\x5f\164\141\x78\x6f\x6e\x6f\155\171\137\143\165\x73\x74\157\155\137\146\x69\145\154\144\163"), $this->ugmceccgwaaaigiy());
        goto ksugksoayiigqake;
        gcsessaokiukkyig:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\x64\141\x74\x65\x5f\164\171\160\x65", __("\104\x61\164\145\x20\x54\171\x70\145", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\x65\143\157\x6e\144\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\x4d\x69\x6e\165\x74\x65\163", PR__CMN__FOUNDATION), self::HOUR => __("\115\151\x6e\165\x74\145\x73", PR__CMN__FOUNDATION), self::DAY => __("\x44\x61\x79\163", PR__CMN__FOUNDATION), self::WEEK => __("\127\x65\145\153\x73", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\x6f\156\x74\x68\x73", PR__CMN__FOUNDATION), self::YEAR => __("\131\145\x61\x72\163", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto cyomuwaeeaimesos;
        gguissygssokqwso:
    }
    public function wigskegsqequoeks()
    {
        goto kqwoqegwcaycwyou;
        guuosmqayokicema:
        $this->qcsmikeggeemccuu("\145\x64\x69\164\x5f\164\x65\162\155", [$this, "\x6f\x65\x77\171\167\141\155\157\x71\x65\x69\151\147\x61\147\x73"], 10, 3)->qcsmikeggeemccuu("\143\x72\x65\x61\164\145\x64\x5f\x74\x65\162\x6d", [$this, "\x6f\145\167\171\x77\x61\155\x6f\x71\x65\151\x69\x67\x61\x67\x73"], 10, 3)->qcsmikeggeemccuu("\x64\x65\x6c\145\x74\x65\137\164\145\162\155", [$this, "\163\155\x67\171\143\141\163\x61\x71\x6d\x67\x63\141\145\153\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x61\144\144\x5f\x66\x6f\162\x6d\x5f\146\151\145\x6c\144\163", [$this, "\141\144\144"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\x64\x69\164\x5f\x66\157\x72\155\x5f\x66\x69\x65\154\x64\x73", [$this, "\x77\x77\147\x65\x61\145\x71\x67\x61\x63\147\167\x6f\x6f\x71\151"])->qcsmikeggeemccuu("\x6d\x61\156\141\147\x65\x5f{$ymqmyyeuycgmigyo}\137\143\x75\163\164\157\155\137\143\x6f\x6c\x75\155\156", [$this, "\x75\157\x61\157\165\x65\x73\167\x77\x77\x6d\x69\x77\x77\x71\x73"], 10, 3);
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
        $this->cecaguuoecmccuse("\155\141\156\x61\147\x65\137\145\144\x69\164\55{$this->kuaoscooeuayycye()}\137\143\157\154\165\x6d\156\163", [$this, "\145\147\x67\x65\143\165\x75\167\171\x6b\141\x61\x77\x6f\161\167"]);
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
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\x61\x74\x74\162\x69\142\x75\x74\145\x5f\x6e\x61\155\145"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto ikaweoguqucoaegy;
        gyyuyqcmmcsoemkc:
        return $wkkweuacukumqmya;
        goto ukgemiyqimumoyoa;
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
        uegaqgayeaugeoim:
        cwcoqyuoyckuuios:
        goto gyyuyqcmmcsoemkc;
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
            awgyiumgyeockqoa:
            if (!$iwewcwusemqaiggk) {
                goto weyuusiimkuykwca;
            }
            goto ouqgocoygmaiamou;
            qaaymsuwqmigcoea:
            weyuusiimkuykwca:
            goto qkgoiusmuuaqwywu;
            ouqgocoygmaiamou:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto qaaymsuwqmigcoea;
            oaoggiyikquikqmg:
            zsscgecwckmocwqa:
            goto awcqsekwccegiugq;
            qkgoiusmuuaqwywu:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto waiwugiowecgeeww;
            waiwugiowecgeeww:
            eggowcqiawiuwski:
            goto oaoggiyikquikqmg;
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
        agmcywmicucyeiig:
        ywosowquuuociuio:
        goto miuwoyekioyugegk;
        qwuuagecegiqouig:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto okgaykwweumwcsyq;
        }
        goto mmiukekqescmgkie;
        mmiukekqescmgkie:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kaacyyeegamkqkak;
            myuwuwgiccywkiog:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto ackiyyoociyuiaio;
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
            ewgmqmguwukoekoc:
            gesseuyackqsekiy:
            goto wakwsokmekawssyi;
            uaqeuukkceomqisi:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto imqikuakumuqamky;
            eckksscswgomeoqs:
            msqawsuquouuugkc:
            goto ewgmqmguwukoekoc;
            wakwsokmekawssyi:
        }
        goto agmcywmicucyeiig;
        miuwoyekioyugegk:
        okgaykwweumwcsyq:
        goto uoowsoawqkggioeo;
        uoowsoawqkggioeo:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yukscyeaqukseeim;
        ickoqwmqsgowyscy:
        global $wpdb;
        goto cwgsuaukyieoswoq;
        eqgkqikoqkaiuocm:
        ueyqgegieiwkocck:
        goto mouaeysyaawwqsmq;
        uwoawkimmaqcwqcq:
        $wpdb->delete($wpdb->termmeta, ["\164\145\162\x6d\137\x69\x64" => $mceokigoiqekskwe], ["\x25\x64"]);
        goto ayuwgkkummcqqesk;
        cwgsuaukyieoswoq:
        if (!$mceokigoiqekskwe) {
            goto lwkkgmcgkowgygcs;
        }
        goto uwoawkimmaqcwqcq;
        ayuwgkkummcqqesk:
        lwkkgmcgkowgygcs:
        goto eqgkqikoqkaiuocm;
        yukscyeaqukseeim:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto ueyqgegieiwkocck;
        }
        goto ickoqwmqsgowyscy;
        mouaeysyaawwqsmq:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}

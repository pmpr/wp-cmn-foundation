<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger\Traits;

use Pmpr\Common\Foundation\Logger\Engine;
use Pmpr\Common\Foundation\Logger\Logger;

trait LogTrait
{
    
    protected ?string $logChannel = null;
    
    public function cycuaskkikweaoym() : ?string
    {
        return $this->logChannel;
    }
    
    public function ygaescewwyaseaoy() : Engine
    {
        return Engine::symcgieuakksimmu();
    }
    
    public function saqqeqmcyyoeqici(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::ERROR_CODE);
        
    }
    
    public function uiagwusgwcassqua(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::INFO_CODE);
    }
    
    public function oaumimwssciwumys(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek);
    }
    
    public function ciyuwccsawgygkie(?string $uamcoiueqaamsqma, array $icwicymcioeyeyek = [])
    {
        $this->giaekemmcwcgswce($uamcoiueqaamsqma, $icwicymcioeyeyek, Engine::WARNING_CODE);
    }
    
    private function giaekemmcwcgswce($uamcoiueqaamsqma, $mgkceomocowocqyo = [], $iqaosyayeiuaisqi = Engine::DEBUG_CODE)
    {
        goto qasccueceswyusgy;
        seasiecgqussuqkw:
        $this->ygaescewwyaseaoy()->uimukyawykswgwsm($iwcsiuuqeaaaeees, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto geacgaisikkgqosu;
        usosooekkcgwmgkq:
        $iwcsiuuqeaaaeees = Logger::DEFAULT_CHANNEL;
        goto eocusimsawyoyaas;
        eocusimsawyoyaas:
        mookyeaauceccaga:
        goto seasiecgqussuqkw;
        qasccueceswyusgy:
        $iwcsiuuqeaaaeees = $this->cycuaskkikweaoym();
        goto yuwiekiseooqagqo;
        yuwiekiseooqagqo:
        if ($iwcsiuuqeaaaeees) {
            goto mookyeaauceccaga;
        }
        goto usosooekkcgwmgkq;
        geacgaisikkgqosu:
    }
}

<?php
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\ConnectionInterface; use Illuminate\Database\ConnectionResolverInterface; class Resolver extends Common implements ConnectionResolverInterface { public function connection($W1Ttt = null) { return Database::getInstance(); } public function getDefaultConnection() { } public function setDefaultConnection($W1Ttt) { } }

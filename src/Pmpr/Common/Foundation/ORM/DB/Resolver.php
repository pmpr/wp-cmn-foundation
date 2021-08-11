<?php
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\ConnectionInterface; use Illuminate\Database\ConnectionResolverInterface; class Resolver extends Common implements ConnectionResolverInterface { public function connection($p6UoG = null) { return Database::getInstance(); } public function getDefaultConnection() { } public function setDefaultConnection($p6UoG) { } }

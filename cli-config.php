<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'init.php';

return ConsoleRunner::createHelperSet($entityManager);

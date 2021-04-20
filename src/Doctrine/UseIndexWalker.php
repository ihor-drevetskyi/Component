<?php

namespace ComponentBundle\Doctrine;

use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\AST\FromClause;

/**
 * Class UseIndexWalker
 * @package ComponentBundle\Doctrine
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class UseIndexWalker extends SqlWalker
{
    public const HINT_USE_INDEX = 'UseIndexWalker.UseIndex';

    /**
     * @param FromClause $fromClause
     * @return array|string|string[]|null
     */
    public function walkFromClause($fromClause)
    {
        $result = parent::walkFromClause($fromClause);

        if ($index = $this->getQuery()->getHint(self::HINT_USE_INDEX)) {
            $result = preg_replace('#(\bFROM\s*\w+\s*\w+)#', '\1 USE INDEX (' . $index . ')', $result);
        }

        return $result;
    }
}

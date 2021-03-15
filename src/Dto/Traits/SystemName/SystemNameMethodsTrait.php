<?php

namespace ComponentBundle\Dto\Traits\SystemName;

use Gedmo\Sluggable\Util as Sluggable;

/**
 * Trait SystemNameMethodsTrait
 * @package ComponentBundle\Dto\Traits\SystemName
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SystemNameMethodsTrait
{
    /**
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }

    /**
     * @param string|null $system_name
     */
    public function setSystemName(?string $system_name = null): void
    {
        if ($system_name) {
            $system_name = Sluggable\Urlizer::transliterate($system_name, '_');
        }

        $this->systemName = $system_name;
    }
}

<?php

namespace ComponentBundle\Service;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityElementInterface;

/**
 * Interface AbstractElementLinksServiceInterface
 * @package ComponentBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractElementLinksServiceInterface
{
    /**
     * @param AbstractEntityElementInterface $element
     * @param array $parameters
     * @param int $reference_type
     * @return string
     */
    public function getLink(
        AbstractEntityElementInterface $element,
        array $parameters = [],
        int $reference_type = UrlGeneratorInterface::ABSOLUTE_PATH
    ): string;

    /**
     * @param array $parameters
     * @param int $reference_type
     * @return string
     */
    public function getListLink(
        array $parameters = [],
        int $reference_type = UrlGeneratorInterface::ABSOLUTE_PATH
    ): string;

    /**
     * @param AbstractEntityElementInterface $element
     * @param int|null $count
     * @param int|null $page
     * @return string|RedirectResponse
     */
    public function getElementLinkForHelperForItemAction(
        AbstractEntityElementInterface $element,
        ?int $count = null,
        ?int $page = null
    );

    /**
     * @param int|null $page
     * @return array
     */
    public function responseLinkForListAction(?int $page = null): array;

    /**
     * @param int|null $count
     * @param int|null $page
     * @return mixed
     */
    public function getListLinkForHelperForListAction(?int $count = null, ?int $page = 1);

    /**
     * @param AbstractEntityElementInterface $element
     * @param int|null $page
     * @return array
     */
    public function responseLinkForItemAction(AbstractEntityElementInterface $element, ?int $page = null): array;
}

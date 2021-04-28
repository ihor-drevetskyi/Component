<?php

namespace ComponentBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityElementInterface;

/**
 * Class AbstractListAndElementLinksService
 * @package ComponentBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractListAndElementLinksService extends AbstractLinksService implements
    AbstractElementLinksServiceInterface
{
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
    )
    {
        if ($count && $page) {
            if ($this->request->query->has('page')) {
                return $this->redirect(
                    $this->getLink($element, [
                        'page' => $this->request->query->get('page'),
                        'count' => $count
                    ], UrlGeneratorInterface::ABSOLUTE_URL));
            } elseif ($this->request->get('page') == 1 && is_string($this->request->get('page'))) {
                return $this->redirect($this->getLink($element, [
                    'page' => $this->request->get('page'),
                    'count' => $count
                ], UrlGeneratorInterface::ABSOLUTE_URL));
            }

            $element_link = $this->getLink($element, [
                'page' => $page,
                'count' => $count
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        } else {
            $element_link = $this->getLink(
                $element, [], UrlGeneratorInterface::ABSOLUTE_URL
            );
        }

        if ($this->request_helper->getCurrentUrl() != $element_link) {
            return $this->redirect($element_link);
        }

        return $element_link;
    }

    /**
     * @param int|null $page
     * @return array
     */
    public function responseLinkForListAction(?int $page = null): array
    {
        $links = [];
        $response = new Response();
        $locales = $this->container->getParameter('locales');

        if (!empty($locales)) {
            $response_link = '';
            foreach ($locales as $key => $locale) {
                if ($page) {
                    $link = $this->getListLink([
                        'page' => $page,
                        '_locale' => $locale
                    ], UrlGeneratorInterface::ABSOLUTE_URL);
                } else {
                    $link = $this->getListLink([
                        '_locale' => $locale
                    ], UrlGeneratorInterface::ABSOLUTE_URL);
                }

                $links[$locale] = $link;
                $response_link .= "<$link>; rel=\"alternate\"; hreflang=\"$locale\"";
                end($locales);

                if ($key !== key($locales)) {
                    $response_link .= ', ';
                }
            }

            $response->headers->set('Link', $response_link);
        }

        return [
            'links' => $links,
            'response' => $response
        ];
    }

    /**
     * @param int|null $count
     * @param int|null $page
     * @return mixed|string|RedirectResponse
     */
    public function getListLinkForHelperForListAction(?int $count = null, ?int $page = 1)
    {
        $list_link = $this->getListLink([
            'page' => $page,
            'count' => $count
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        if ($this->request_helper->getCurrentUrl() != $list_link) {
            return $this->redirect($list_link);
        } elseif ($this->request->query->has('page')) {
            return $this->redirect($this->getListLink([
                'page' => $this->request->query->get('page'),
                'count' => $count
            ], UrlGeneratorInterface::ABSOLUTE_URL));
        } elseif ($this->request->get('page') == 1 && is_string($this->request->get('page'))) {
            return $this->redirect($this->getListLink([
                'page' => $this->request->get('page'),
                'count' => $count
            ], UrlGeneratorInterface::ABSOLUTE_URL));
        }

        return $list_link;
    }

    /**
     * @param AbstractEntityElementInterface $element
     * @param int|null $page
     * @return array
     */
    public function responseLinkForItemAction(AbstractEntityElementInterface $element, ?int $page = null): array
    {
        $links = [];
        $locales = [];
        $response = new Response();

        foreach ($element->getTranslations() as $locale => $translation) {
            $locales[] = $locale;
        }

        if (!empty($locales)) {
            $response_link = '';
            foreach ($locales as $key => $locale) {
                if ($page) {
                    $link = $this->getLink($element, [
                        'page' => $page,
                        '_locale' => $locale
                    ], UrlGeneratorInterface::ABSOLUTE_URL);
                } else {
                    $link = $this->getLink($element, [
                        '_locale' => $locale,
                    ], UrlGeneratorInterface::ABSOLUTE_URL);
                }

                $links[$locale] = $link;
                $response_link .= "<$link>; rel=\"alternate\"; hreflang=\"$locale\"";
                end($locales);

                if ($key !== key($locales)) {
                    $response_link .= ', ';
                }
            }

            $response->headers->set('Link', $response_link);
        }

        return [
            'links' => $links,
            'response' => $response
        ];
    }
}

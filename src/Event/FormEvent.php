<?php

namespace ComponentBundle\Event;

use Symfony\Component\Form\FormInterface;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FormEvent
 * @package ComponentBundle\Event
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class FormEvent extends Event
{
    /**
     * @var Request
     */
    protected Request $request;

    /**
     * @var Response
     */
    protected Response $response;

    /**
     * @var FormInterface
     */
    protected FormInterface $form;

    /**
     * FormEvent constructor.
     * @param FormInterface $form
     * @param Request $request
     */
    public function __construct(FormInterface $form, Request $request)
    {
        $this->form = $form;
        $this->request = $request;
    }

    /**
     * @return FormInterface
     */
    public function getForm(): FormInterface
    {
        return $this->form;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return Response|null
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }
}

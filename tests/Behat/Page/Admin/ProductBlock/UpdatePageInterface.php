<?php

namespace Tests\Lakion\SyliusCmsBundle\Behat\Page\Admin\ProductBlock;

use Sylius\Behat\Page\Admin\Crud\UpdatePageInterface as BaseUpdatePageInterface;

interface UpdatePageInterface extends BaseUpdatePageInterface
{
    /**
     * @param string $body
     */
    public function changeBodyTo($body);

    /**
     * @param string $link
     */
    public function changeLinkTo($link);

    /**
     * @param string $title
     */
    public function changeTitleTo($title);

    /**
     * @param string $productName
     */
    public function changeProductTo($productName);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @return string
     */
    public function getLink();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getProduct();
}

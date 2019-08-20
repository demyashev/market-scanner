<?php

namespace MarketScanner;

use MarketScanner\Model\Balance;
use MarketScanner\Model\Info;
use MarketScanner\Model\Photos;
use MarketScanner\Model\Specs;

class Scanner {

    private $key;

    /**
     * Scanner constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * @return Balance
     */
    public function getBalance() : Balance
    {
        return new Balance($this->key);
    }

    /**
     * @param int $id
     *
     * @return Info
     */
    public function getInfo(int $id) : Info
    {
        return new Info($this->key, $id);
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getPhotos(int $id) : array
    {
        $photos = new Photos($this->key, $id);

        return $photos->getPictures();
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getSpecs(int $id) : array
    {
        $specs = new Specs($this->key, $id);

        return $specs->getSpecifications();
    }
}
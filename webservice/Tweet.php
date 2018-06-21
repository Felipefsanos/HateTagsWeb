<?php
/**
 * Created by PhpStorm.
 * User: lipe2
 * Date: 21/06/2018
 * Time: 20:15
 */

class Tweet
{
    private  $id;

    private  $idTweet;

    private  $Name;

    private  $Text;
    private  $Language;

    private  $Data;
    private  $Image;
    private  $Link;
    private  $Favorites;
    private  $Retweets;
    private  $Sentiment;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdTweet()
    {
        return $this->idTweet;
    }

    /**
     * @param mixed $idTweet
     */
    public function setIdTweet($idTweet): void
    {
        $this->idTweet = $idTweet;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param mixed $Text
     */
    public function setText($Text): void
    {
        $this->Text = $Text;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param mixed $Language
     */
    public function setLanguage($Language): void
    {
        $this->Language = $Language;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param mixed $Data
     */
    public function setData($Data): void
    {
        $this->Data = $Data;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image): void
    {
        $this->Image = $Image;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->Link;
    }

    /**
     * @param mixed $Link
     */
    public function setLink($Link): void
    {
        $this->Link = $Link;
    }

    /**
     * @return mixed
     */
    public function getFavorites()
    {
        return $this->Favorites;
    }

    /**
     * @param mixed $Favorites
     */
    public function setFavorites($Favorites): void
    {
        $this->Favorites = $Favorites;
    }

    /**
     * @return mixed
     */
    public function getRetweets()
    {
        return $this->Retweets;
    }

    /**
     * @param mixed $Retweets
     */
    public function setRetweets($Retweets): void
    {
        $this->Retweets = $Retweets;
    }

    /**
     * @return mixed
     */
    public function getSentiment()
    {
        return $this->Sentiment;
    }

    /**
     * @param mixed $Sentiment
     */
    public function setSentiment($Sentiment): void
    {
        $this->Sentiment = $Sentiment;
    }

}
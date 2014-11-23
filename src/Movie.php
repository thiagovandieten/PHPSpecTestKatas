<?php
class Movie {

    protected $rating;
    protected $watched = false;
    protected $title;

    function __construct($title)
    {
        $this->title = $title;
    }

    public function watch()
    {
        $this->watched = true;
    }

    public function isWatched()
    {
        return $this->watched;
    }

    public function setRating($rating)
    {
        $this->validateRatingRange($rating);
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('InvalidArgumentException')->duringsetRating(8);
    }

    /**
     * @param $rating
     */
    public function validateRatingRange($rating)
    {
        if ($rating > 5)
        {
            throw new InvalidArgumentException;
        }
    }


    public function getTitle()
    {
        // TODO: write logic here
        return $this->title;
    }
}

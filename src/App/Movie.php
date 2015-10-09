<?php

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace App;

use App\InvalidArgumentException;

class Movie
{
    public function getRating()
    {
        $rating = 5;
        
        return $rating;
    }

    public function getRatingLike()
    {
        $rating = "5";
        
        return $rating;
    }

    public function getTitle()
    {
        $title = "Star Wars";

        return $title;
    }

    public function getReleaseDate()
    {
        $date = 233366400;

        return $date;
    }

    public function getDescription()
    {
        $desc = "Inexplicably popular children's film";

        return $desc;
    }

    public function setRating($argument1)
    {
        if ($argument1 < 0) {
            throw new InvalidArgumentException("Error Processing Request");	
        }

        return $argument1;
    }

    public function isAvailableOnCinemas()
    {
        return true;
    }

    public function hasSoundtrack()
    {
        return true;
    }

    public function getDirectors()
    {
        $directors = array('Director one', 'Director two', 'Director three', 'Director four');
        
        return $directors;
    }

    public function getCast()
    {
        $casts = array('Cast one', 'Cast two', 'Cast three', 'Jane Smith');
        
        return $casts;
    }
}

<?php namespace App\Photoblog\Images;

use App\Photo;

class ImageRepository {

	public function __construct(Photo $Photo)
	{
		$this->Photo = $Photo;

	}

	public function getPhotos()
	{
		return $this->Photo->get();
	}

}
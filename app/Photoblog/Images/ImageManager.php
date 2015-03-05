<?php namespace App\Photoblog\Images;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Photo;

class ImageManager {

	/**
	 * Request Class
	 * @var Illuminate\Http\Request;
	 */
	private $Request;

	/**
	 * Photo Model
	 * @var App\Photo
	 */
	private $Photo;

	/**
	 * Redirect class
	 * @var Illuminate\Routing\Redirector
	 */
	private $Redirect;

	public function __construct(Request $Request, Redirector $Redirector, Photo $Photo)
	{
		$this->Request = $Request;
		$this->Redirect = $Redirector;
		$this->Photo = $Photo;
	}

	public function alterImage($input)
	{
		$file = $this->Request->file('new_image');

		// open an image file
		$img = \Image::make($file);

		// now you are able to resize the instance
		$img->resize(320, 240)->greyscale();

		$img->save(public_path().'/img/foo.jpg');

		return $this->Redirect->route('homepage');
	}

	public function alterImageAndStoreIt($input)
	{
		$file = $this->Request->file('new_image');
		$img = \Image::make($file);

		$originalName = $input['new_image']->getClientOriginalName();

		$this->saveFullsized($img, $originalName);
		$this->saveThumbnail($img, $originalName);

		$this->savePhoto($input, $originalName);

		return $this->Redirect->route('homepage');
	}

	private function saveFullsized($image, $originalName)
	{
		$image->save(public_path().'/img/blog/'. $originalName);
	}

	private function saveThumbnail($image, $originalName)
	{
		// now you are able to resize the instance
		$image->resize(320, 240)->greyscale();

		$image->save(public_path().'/img/blog/thumbs/'. $originalName);
	}

	private function savePhoto($input, $originalName)
	{
		$photo = new $this->Photo;

		$photo->name = $input['name'];
		$photo->description = $input['description'];
		$photo->image_url = $originalName;

		$photo->save();
	}
}
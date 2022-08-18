<?php
namespace App\Helper;

Trait Imageable
{
    public function storeMedia($request)
    {
        $path = public_path('tmp/uploads');

        if ( ! file_exists($path ) ) {
            mkdir($path, 0777, true);
        }

            $file = $request->file('image');

            $fileName = uniq . ' _ ' . trim($file->getClientOriginalFilename());

            $this->image = $fileName;
            $this->save();

            $file->move($path, $fileName);

            return $this;

    }

}

?>
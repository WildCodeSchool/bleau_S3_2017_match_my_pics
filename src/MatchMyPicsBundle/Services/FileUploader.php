<?php

namespace MatchMyPicsBundle\Services;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $imageDirectory;

    public function __construct($imageDirectory)
    {
        $this->imageDirectory = $imageDirectory;
    }

    public function upload(File $file)
    {
        $fileName = uniqid() . '.' . $file->guessExtension();

        $file->move($this->imageDirectory, $fileName);

        return $fileName;
    }

    public function getImageDirectory()
    {
        return $this->imageDirectory;
    }
}
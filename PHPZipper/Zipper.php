<?php
namespace testnamespace;
use \ZipArchive as ZipArchive;

class Zipper
{
    private $files = array();
    private $zip;

    public function __construct()
    {
        $this->zip = new ZipArchive;
    }

    public function add($input)
    {
        if (is_array($input)) {
            $this->files = array_merge($this->files, $input);
        } else {
            $this->files[] = $input;
        }
    }

    public function store($location = null)
    {
        if (count($this->files) && $location) {
            foreach ($this->files as $index => $file) {
                if (!file_exists($file)) {
                    unset($this->files[$index]);
                }
            }
            if ($this->zip->open($location, file_exists($location) ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE)) {
                foreach ($this->files as $file) {
                    $this->zip->addFile($file, $file);
                }
                $this->zip->close();
            }
        }
    }
}

<?php

class FileUpload {

    protected $path;

    public function save($callback){
        // fer el que sigui que s'ha de fer per guardar el fitxer
        $this->path = '/tmp/eghrawwhqeawrhrh';
        //
        //
        //I ara què?
        $callback($this->path);
    }
}

class Profile {

    public function updateProfile(){
        $f = new FileUpload(); //pic

        $f->save(function (){
            echo "El fitxer s'ha guardat";
        });
    }
}

$profile = new Profile();
$profile->updateProfile();
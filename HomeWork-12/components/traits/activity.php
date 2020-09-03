<?php
trait activity
{
    public function file_put($key, $value, $path) {
        $json = (array)$this->file_get($path);
        if(count($json) === 0) {
            $info = json_encode([$key=>$value]);
            file_put_contents($path, $info,  FILE_APPEND);
        } else {
            $json[$key] = $value;
            $info = json_encode($json);
            file_put_contents($path, "");
            file_put_contents($path, $info,  FILE_APPEND);
        }
    }
    public function file_get($f) {
        $data = file_get_contents($f);
        return $accounts = json_decode($data, true);
    }
}

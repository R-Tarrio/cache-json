<?php 
namespace cacheJson\cacheJson;

class cacheJson
{

	public $HASH = null;
	public $RUTA = __DIR__."/cache/json/";
	public $FILE = "cache.json";
	public $FILE_CACHE = "cache.json";
	public $data = [];

	function __construct($hash)
	{
		$this->HASH = $hash;
		$this->FILE = $this->HASH.".json";
		$this->FILE_CACHE = $this->RUTA.$this->FILE;
	}

    public function setCache($data)
    {
    	return file_put_contents($this->FILE_CACHE, json_encode($data));
    }

    public function getCache()
    {
    	if(file_exists($this->FILE_CACHE)){
	    	return file_get_contents($this->FILE_CACHE);
    	}else{
    		return [];
    	}
    }

}
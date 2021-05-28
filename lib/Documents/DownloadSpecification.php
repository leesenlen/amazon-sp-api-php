<?php

namespace ClouSale\AmazonSellingPartnerAPI\Documents;

class DownloadSpecification 
{

    protected static $drivers = ["file", "php_stream"];

    /**
     * 原始数据接收引擎
     * @var [type]
     */
    protected $driver;

    /**
     * module 功能模块
     * default: spapi
     * @var [type]
     */
    protected $module;

    /**
     * report文件存储的目录
     * @var [type]
     */
    protected $basepath;

    /**
     * 文件后缀
     * @var [type]
     */
    protected $subffix;

    public function __construct($config=[])
    {

        if (!empty($config['driver']) && in_array($config['driver'], static::$drivers)) {
            $this->driver = $config['driver'];
        } else {
            $this->driver = 'file';
        }

        if (empty($config['basepath'])) {
            $config['basepath'] = ".";
        }
        $this->setBasepath($config['basepath']);

        if (!isset($config['module'])) {
            $config['module'] = "spapi";
        }
        $this->setModule($config['module']);
        
        if (!isset($config['subffix'])) {
            $config['subffix'] = "report";
        }
        $this->setSubffix($config['subffix']);
    }

    public function getModule()
    {
        return $this->module;
    }

    public function getBasepath()
    {
        return $this->basepath;
    }

    public function getSubffix()
    {
        return $this->subffix;
    }

    public function setModule($module)
    {
        $this->module = trim(trim($module), "/");
        return $this;
    }

    public function setBasepath($basepath)
    {
        $this->basepath = trim(trim($basepath), "/");
        return $this;
    }

    public function setSubffix($subffix)
    {
        $this->subffix = trim(trim($subffix), ".");
        return $this;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function fetchFileFullPath($filename="")
    {
        return $this->basepath . "/" . $this->module. "/" 
            . ($filename ? $filename : $this->generateFileName()) 
            . (!empty($this->subffix) ? ("." . trim($this->subffix, ".")) : "");
    }

    protected function generateFileName()
    {
        return date("YmdHis") . "-" . strtoupper(uniqid());
    }
}

<?php

namespace ClouSale\AmazonSellingPartnerAPI\Documents;

use ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportDocument;
use ClouSale\AmazonSellingPartnerAPI\Documents\DownloadSpecification;
use ClouSale\AmazonSellingPartnerAPI\Documents\Exceptions\DownloadException;

use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Psr7\Stream;

class ReportDownloadHelper 
{

    public $spec;

    public function __construct(DownloadSpecification $spec)
    {
        $this->spec = $spec;
    }

    /**
     * 返回数据流
     * GuzzleHttp\Psr7\Stream
     * @author leesenlen
     * @date   2021-05-28
     * @param  ReportDocument $document [description]
     * @return [type]                   [description]
     */
    public function download(ReportDocument $document, Stream $stream=null)
    {
        $download_stream = $this->simpleDownload($document);
        $content = $download_stream->getContents();

        // 解密
        $encryption_details = $document['encryption_details'];
        switch ($encryption_details['standard']) {
            case 'AES': 
                $content = AESCryptFactory::decrypt($content, $encryption_details['key'], $encryption_details['initialization_vector']);
                break;

            default:
                break;
        }

        // 解压
        $compression_algorithm = $document['compression_algorithm'];
        switch ($compression_algorithm) {
            case 'GZIP': 
                $content = GZIPDecodeFactory::decode($content);
                break;

            default:
                break;
        }

        /**
         * 返回流内容
         */
        if (is_null($stream)) {
            $fp = fopen("php://temp", 'w+');
            $stream = Utils::streamFor($fp);
        }
        $stream->write($content);
        $stream->rewind();

        return $stream;
    }

    public function simpleDownload(ReportDocument $document)
    {
        $driver = $this->spec->getDriver();

        switch ($driver) {
            case 'file':
                $filename = $this->spec->fetchFileFullPath();
                $fp = fopen($filename, 'w+');
                $stream = Utils::streamFor($fp);
                break;

            case 'php_stream':
                $fp = fopen("php://temp", 'w+');
                $stream = Utils::streamFor("php://temp");
                break;

            default:
                throw new DownloadException("Unsupported Download Save Driver");
        }

        $url = $document['url'];
        $client = new \GuzzleHttp\Client;
        $response = $client->request('GET', $url, ['save_to' => $stream]);

        return $response->getBody();
    }
}
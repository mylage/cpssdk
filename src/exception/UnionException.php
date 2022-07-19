<?php


namespace Mylarge\UnionSdk\exception;


use Throwable;

class UnionException extends \Exception
{

    /**
     * 异常数据
     * @var array
     */
    public $data = [];

    public static function build(string $message = '', int $code = 0, array $data = []): UnionException
    {
        $exception = new static($message, $code);
        $exception->setData($data);
        return $exception;
    }

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
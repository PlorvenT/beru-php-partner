<?php

namespace Yandex\Beru\Partner\Models\Response;

use Yandex\Beru\Partner\Models\Common\Errors;
use Yandex\Beru\Partner\Models\RecommendedPricesResult;
use Yandex\Common\Model;

class GetRecommendedPricesResponse extends Model
{
    protected $errors;
    protected $result;
    protected $status;

    protected $mappingClasses = [
        'errors' => Errors::class,
        'result' => RecommendedPricesResult::class,
    ];

    /**
     * @return Errors|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return RecommendedPricesResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

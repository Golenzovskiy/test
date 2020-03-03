<?php
​
/**
 * @param $params
 *
 * @return int
 */
private function getPaymentDoctorsCount($params)
{
    if ($params['sortingField'] === 'appointment') {
        /** @var DoctorsIndex $context */
        $context = $params['context'];
        $isNonCommercial = false;
        ​
        if ($context) {
            $context->specialityId = (int)$params['speciality'];
            $isNonCommercial = $context->isNonCommercial();
        }
​
        if ($isNonCommercial) {
            $excludedIndexes = [1000];
        } else {
            $excludedIndexes = [1000, 2000];
        }
​
        $queryParams = $params + [
                '!workplace.sort_index_b' => $excludedIndexes,
                '!workplace.sort_index_a' => [Indexer::WORKPLACE_INDEX_A_NO_SIGN],
            ];
        } else {
            $queryParams = $params + [
                'workplace.is_premium' => true,
            ];
    }

    return $this->runProxyTablesQueries($queryParams, true);
}

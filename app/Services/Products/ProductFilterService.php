<?php

namespace App\Services\Products;

use Illuminate\Database\Eloquent\Builder;

class ProductFilterService
{
    public function apply(Builder $query, array $filters): Builder
    {
        return $query

            ->when(
                $filters['search'] ?? null,
                fn ($q, $search) => $this->filterSearch($q, $search)
            )

            ->when(
                $filters['status'] ?? null,
                fn ($q, $status) => $this->filterStatus($q, $status)
            )

            ->when(
                $filters['brand'] ?? null,
                fn ($q, $brand) => $this->filterBrand($q, $brand)
            )

            ->when(
                $filters['category'] ?? null,
                fn ($q, $category) => $this->filterCategory($q, $category)
            )

            ->when(
                $filters['supplier'] ?? null,
                fn ($q, $supplier) => $this->filterSupplier($q, $supplier)
            )

            ->when(
                $filters['collection'] ?? null,
                fn ($q, $collection) => $this->filterCollection($q, $collection)
            )

            ->tap(function ($query) use ($filters) {

                $this->applySorting(
                    $query,
                    $filters['sort'] ?? 'newest'
                );

            });
    }


    private function filterSearch(
        Builder $query,
        string $search
    ): Builder {

        return $query->where(
            'name',
            'like',
            '%' . $search . '%'
        );
    }


    private function filterStatus(
        Builder $query,
        $status
    ): Builder {

        return $query->whereHas('status', function ($q) use ($status) {

            $q->whereIn(
                'id',
                (array) $status
            );

        });
    }


    private function filterBrand(
        Builder $query,
        $brand
    ): Builder {

        return $query->whereIn(
            'brand_id',
            (array) $brand
        );
    }


    private function filterCategory(
        Builder $query,
        $category
    ): Builder {

        return $query->whereHas('categories', function ($q) use ($category) {

            $q->whereIn(
                'categories.id',
                (array) $category
            );

        });
    }


    private function filterSupplier(
        Builder $query,
        $supplier
    ): Builder {

        return $query->whereHas('suppliers', function ($q) use ($supplier) {

            $q->whereIn(
                'suppliers.id',
                (array) $supplier
            );

        });
    }


    private function filterCollection(
        Builder $query,
        $collection
    ): Builder {

        return $query->whereHas('collections', function ($q) use ($collection) {

            $q->whereIn(
                'collections.id',
                (array) $collection
            );

        });
    }


    private function applySorting(
        Builder $query,
        string $sort
    ): void {

        $sorts = [

            'newest' => [
                'column' => 'created_at',
                'direction' => 'desc',
            ],

            'oldest' => [
                'column' => 'created_at',
                'direction' => 'asc',
            ],

            'name_asc' => [
                'column' => 'name',
                'direction' => 'asc',
            ],

            'name_desc' => [
                'column' => 'name',
                'direction' => 'desc',
            ],

            'price_asc' => [
                'column' => 'price',
                'direction' => 'asc',
            ],

            'price_desc' => [
                'column' => 'price',
                'direction' => 'desc',
            ],

        ];

        $order = $sorts[$sort] ?? $sorts['newest'];

        $query->orderBy(
            $order['column'],
            $order['direction']
        );
    }
}

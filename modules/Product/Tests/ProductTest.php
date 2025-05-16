<?php

namespace Modules\Product\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Modules\Product\Databases\factories\ProductFactory;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use DatabaseMigrations ; 
    public function test_product_is_true()
    {
        $product = ProductFactory::new()->create() ;  
        dd($product) ; 
    }
}

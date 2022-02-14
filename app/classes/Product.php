<?php


namespace App\classes;


class Product
{
    protected $product;
    protected $products =
        [
            0   =>
                [
                    'name'          => 'Product name: 00',
                    'price'         => '100',
                    'brand'         => 'brand 00',
                    'category'      => 'category 00',
                    'description'   => 'description 00',
                    'image'         => 'assets/img/shirt.jpg',
                    'id'            => '01',
                ],
            1   =>
                [
                    'name'          => 'Product name: 01',
                    'price'         => '100',
                    'brand'         => 'brand 01',
                    'category'      => 'category 01',
                    'description'   => 'description 01',
                    'image'         => 'assets/img/hair.jpg',
                    'id'            => '02',
                ],
            2   =>
                [
                    'name'          => 'Product name: 02',
                    'price'         => '100',
                    'brand'         => 'brand 02',
                    'category'      => 'category 02',
                    'description'   => 'description 02',
                    'image'         => 'assets/img/shirt2.jpg',
                    'id'            => '03',
                ],
            3   =>
                [
                    'name'          => 'Product name: 03',
                    'price'         => '100',
                    'brand'         => 'brand 03',
                    'category'      => 'category 03',
                    'description'   => 'description 03',
                    'image'         => 'assets/img/watch.jpg',
                    'id'            => '04',
                ],
            4   =>
                [
                    'name'          => 'Product name: 04',
                    'price'         => '100',
                    'brand'         => 'brand 04',
                    'category'      => 'category 04',
                    'description'   => 'description 04',
                    'image'         => 'assets/img/pant.jpg',
                    'id'            => '05',
                ],
            5   =>
                [
                    'name'          => 'Product name: 05',
                    'price'         => '100',
                    'brand'         => 'brand 05',
                    'category'      => 'category 05',
                    'description'   => 'description 05',
                    'image'         => 'assets/img/94.jpg',
                    'id'            => '06',
                ],
            6   =>
                [
                    'name'          => 'Product name: 06',
                    'price'         => '100',
                    'brand'         => 'brand 06',
                    'category'      => 'category 06',
                    'description'   => 'description 06',
                    'image'         => 'assets/img/pant2.jpg',
                    'id'            => '07',
                ],
            7   =>
                [
                    'name'          => 'Product name: 07',
                    'price'         => '100',
                    'brand'         => 'brand 07',
                    'category'      => 'category 07',
                    'description'   => 'description 07',
                    'image'         => 'assets/img/printer.jpg',
                    'id'            => '08',
                ],
            8   =>
                [
                    'name'          => 'Product name: 08',
                    'price'         => '100',
                    'brand'         => 'brand 08',
                    'category'      => 'category 08',
                    'description'   => 'description 08',
                    'image'         => 'assets/img/pi08.jpg',
                    'id'            => '09',
                ],
            9   =>
                [
                    'name'          => 'Product name: 09',
                    'price'         => '100',
                    'brand'         => 'brand 09',
                    'category'      => 'category 09',
                    'description'   => 'description 09',
                    'image'         => 'assets/img/pi09.jpg',
                    'id'            => '10',
                ],
            10   =>
                [
                    'name'          => 'Product name: 10',
                    'price'         => '100',
                    'brand'         => 'brand 10',
                    'category'      => 'category 10',
                    'description'   => 'description 10',
                    'image'         => 'assets/img/pi10.jpg',
                    'id'            => '11',
                ],
            11   =>
                [
                    'name'          => 'Product name: 11',
                    'price'         => '100',
                    'brand'         => 'brand 11',
                    'category'      => 'category 11',
                    'description'   => 'description 11',
                    'image'         => 'assets/img/pi11.jpg',
                    'id'            => '12',
                ],

        ];

    public function getAllProducts()
    {
        return $this->products;

    }

    public function getProductDetails($id)
    {
        foreach ($this->products as $p)
        {
            if ($id == $p['id'])
            {
                return $p;
                break;
            }
        }

        return $this->product;

    }



}
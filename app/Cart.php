<?php

namespace App;

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    /**
     * Добавление товара в корзину (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public static function addItem(int $id)
    {
        $itemsInCart = [];

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (session()->get('items')) {
            // То заполним наш массив товарами
            $itemsInCart = session()->get('items');
        }

        // Проверяем есть ли уже такой товар в корзине
        if (array_key_exists($id, $itemsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $itemsInCart[$id] ++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $itemsInCart[$id] = 1;
        }

        // Записываем массив с товарами в сессию
        Session::put('items', $itemsInCart);

        // Возвращаем количество товаров в корзине
         return self::countItemsInCart();
    }

    /**
     * Подсчет количество товаров в корзине (в сессии)
     * @return int <p>Количество товаров в корзине</p>
     */
    public static function countItemsInCart()
    {
        // Проверка наличия товаров в корзине
        if (session()->get('items')) {

            $count =  array_sum(session()->get('items'));

        } else {

            // Если товаров нет, вернем 0
            $count =  0;
        }

        return HomeController::declension(['товар', 'товара', 'товаров'], $count);
    }

    /**
     * Возвращает массив с идентификаторами и количеством товаров в корзине<br/>
     * Если товаров нет, возвращает false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (session()->get('items')) {
            return session()->get('items');
        }
        return false;
    }

    /**
     * Получаем общую стоимость переданных товаров
     * @param array $products <p>Массив с информацией о товарах</p>
     * @return integer <p>Общая стоимость</p>
     */
    public static function getTotalPrice($products)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();

        // Подсчитываем общую стоимость
        $total = 0;
        if ($productsInCart) {
            // Если в корзине не пусто
            // Проходим по переданному в метод массиву товаров
            foreach ($products as $item) {
                // Находим общую стоимость: цена товара * количество товара
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    /**
     * Очищает корзину
     */
    public static function clear()
    {
        if (session()->get('items')) {
        }
    }

    /**
     * Удаляет товар с указанным id из корзины
     * @param integer $id <p>id товара</p>
     */
    public static function deleteProduct(int $id)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $itemsInCart = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($itemsInCart[$id]);

        // Записываем массив товаров с удаленным элементом в сессию
        Session::put('items', $itemsInCart);
    }

}

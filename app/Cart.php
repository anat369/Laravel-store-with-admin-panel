<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * Добавление товара в корзину (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public static function addProduct(int $id)
    {
        $itemsInCart = [];

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['items'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['items'];
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
        $_SESSION['items'] = $itemsInCart;

        // Возвращаем количество товаров в корзине
        return self::countItems();
    }

    /**
     * Подсчет количество товаров в корзине (в сессии)
     * @return int <p>Количество товаров в корзине</p>
     */
    public static function countItems()
    {
        // Проверка наличия товаров в корзине
        if (isset($_SESSION['items'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach ($_SESSION['items'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }

    /**
     * Возвращает массив с идентификаторами и количеством товаров в корзине<br/>
     * Если товаров нет, возвращает false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (isset($_SESSION['items'])) {
            return $_SESSION['items'];
        }
        return false;
    }

    /**
     * Получаем общую стоимость переданных товаров
     * @param array $products <p>Массив с информацией о товарах</p>
     * @return integer <p>Общая стоимость</p>
     */
    public static function getTotalPrice(array $items)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $itemsInCart = self::getProducts();

        // Подсчитываем общую стоимость
        $total = 0;
        if ($itemsInCart) {
            // Если в корзине не пусто
            // Проходим по переданному в метод массиву товаров
            foreach ($items as $item) {
                // Находим общую стоимость: цена товара * количество товара
                $total += $item['price'] * $itemsInCart[$item['id']];
            }
        }

        return $total;
    }

    /**
     * Очищает корзину
     */
    public static function clear()
    {
        if (isset($_SESSION['items'])) {
            unset($_SESSION['items']);
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
        $_SESSION['items'] = $itemsInCart;
    }

}
